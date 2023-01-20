import requests
from bs4 import BeautifulSoup
from movie import Movie
from progress.bar import Bar
import os
import uuid
import shutil
import re
from selenium import webdriver  
BASE ="https://www.dvdmax.pl"

film_price = {}
def get_price(movie_div):
    price = movie_div.find("div", class_ = "price")
    print("price" + str(price))
    print("zloty: "+price.find(text=True).strip())
    zloty = int(re.sub("[^0-9]", "", price.find(text=True).strip()))
    print("groszy " + price.find("sup").text.strip())
    groszy = int(price.find("sup").text.strip().replace(' ', ''))
    return (zloty, groszy)
def get_title(movie_div):
    return movie_div.find("div",class_="product-header").find("strong").text.strip()

def get_movie_info(movie_div):
    movie_info = {}
    info_tables = movie_div.findAll("table")
    for info_table in info_tables:
        for row in info_table.findAll("tr"):
            aux = row.findAll("td")
            movie_info[aux[0].text.strip()] = aux[1].text.strip().replace(' | ',' , ')
    return movie_info
def get_cast(movie_div):
    ul = movie_div.find("ul",class_="details-list cast-list")
    if(ul == None):
        return None
    cast = list(map(lambda tag: tag.text.strip(), ul.findAll("a")))
    cast = list(filter( lambda actor :not actor == "",cast))
    return cast



def get_link(movie):
    return movie.find("a", class_= "product-link")["href"]

def get_image(movie):
    #print(movie)
    return movie.find("ul",class_="gallery__main-carriage").find("img")["src"].strip()


def get_categories():
    url="https://www.dvdmax.pl/filmy-dvd,k5"
    main_page = requests.get(url)
    main_soup = BeautifulSoup(main_page.content, "html.parser")
    with open("categories.csv","w",encoding="utf-8") as file:
        categories_ul = main_soup.find("ul", class_ = "categories")
        c_id = 10
        header = "Category ID;Active (0/1);Name *;Parent category\n"
        file.write(header)
        main_category = "Filmy"
        base = "{};{};{}\n"
        base2 = "{};{};{};{}\n"
        file.write(base.format(c_id,1, main_category))
        c_id+=1
        subcategories =  categories_ul.find("ul", class_ = "subcategories")
        for subcategory in subcategories:
            sub = subcategory.text.strip()
            if sub != "":
                file.write(base2.format(c_id,1,sub,main_category))
                c_id+=1

def get_movies(movies_num:int):
    no_header = True
    comb_path = 'combination_movies.csv'
    if os.path.isfile(comb_path):
        os.remove(comb_path)
    with open(comb_path,'a',encoding="utf-8") as csv_combinations:
        bar = Bar('Processing', max=movies_num)
        if(os.path.isdir("img")):
            shutil.rmtree("img")
        ID = 30
        options = webdriver.ChromeOptions()
        options.add_argument('--headless')
        browser = webdriver.Chrome(options=options,executable_path="C:\Python\parser\chromedriver.exe")
        movies = []
        for num_page in range(1,200):
            url = BASE + "/filmy" +"?page="+ str(num_page)

            main_page = requests.get(url)

            main_soup = BeautifulSoup(main_page.content, "html.parser")
            mini_movies_divs =  main_soup.find_all("div", class_ = "item")
            for m_movie_div in mini_movies_divs:
                page_url = BASE + get_link(m_movie_div)
                print(page_url)
                #print("This is file 1")
                browser.get(page_url)
                movie_page = browser.page_source
                movie_soup = BeautifulSoup(movie_page,"html.parser")
                movie_div = movie_soup# movie_soup.find("section",class_="main")
                imdb_title_div = movie_div.find("span",class_="imdbRatingPlugin ready imdbRatingStyle4")
                if(imdb_title_div == None):
                    continue
                else:
                    imdb_title_div = imdb_title_div.find("a")["href"]
                    movie_id = imdb_title_div.split('/')[4].replace("tt",'').lstrip('0')
                ID += 1
                product_id = ID#uuid.uuid1()
                movie_title = get_title(movie_div)
                movie_price = get_price(movie_div)
                movie = Movie(product_id, movie_title, movie_id, movie_price,)
                movie.info = get_movie_info(movie_div)

                try:
                    del movie.info["Napisy"]
                    del movie.info["Dźwięk"]
                except KeyError as ex:
                    pass
                    print(KeyError)
                movie.cast = get_cast(movie_div)
                movie_img_src = get_image(movie_div)

                presta_image_path = "http://localhost/Kino/prestashop/img/p/{}/{}.jpg".format(product_id,product_id)
                movie.image = presta_image_path
                #download image
                response = requests.get(movie_img_src)
                os.makedirs("img/{}".format(product_id))
                local_image_path = 'img/{}/{}.jpg'.format(product_id,product_id)
                if response.status_code:
                    fp = open( local_image_path, 'wb')
                    fp.write(response.content)
                    fp.close()

                if movie.movie_id not in film_price.keys():
                    film_price[movie.movie_id] = movie.getPrice()
                else:
                    movie.price_impact = movie.getPrice() - film_price[movie.movie_id]
                movies.append(movie)
                bar.next()
                print(len(movies))
                if len(movies) == 1 and no_header:
                    no_header = False
                    csv_combinations.write(movies[0].get_scv_header())
                csv_combinations.write(movie.to_scv_row())
                if len(movies) > 700:
                    browser.quit()
                    return movies
        browser.quit()
        bar.finish()
        return movies


def main():
    movies_max = 1000

    get_categories()
    movies = get_movies(movies_max)
    # Movie.all_keys.extend(["product_id", "movie_id", "movie_title","price", "image","actors"])
    for key in movies[0].info:
        Movie.all_keys.append(key)
    with open('unique_movies.csv','w',encoding="utf-8") as csv_unique_movies:
            csv_unique_movies.write(movies[0].get_scv_header())
            unique_movies_ids = []
            unique_movies = []
            for movie in list(sorted(movies,key=lambda m: m.getPrice())):
                if movie.movie_id not in unique_movies_ids:
                    unique_movies_ids.append(movie.movie_id)
                    unique_movies.append(movie)
            for movie in unique_movies:
                csv_unique_movies.write(movie.to_scv_row())
if __name__ == "__main__":
    main()
        