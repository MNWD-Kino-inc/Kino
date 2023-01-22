import random


class Movie:
    all_keys = []
    product_id = ""
    info = {}
    image = ""
    cast = []
    price_impact = 0
    is_active = 1
    amount = random.randint(1,15)
    def __init__(self, product_id:str, title:str,movie_id:str, price):
        self.product_id = product_id
        self.movie_id = movie_id
        self.title = title
        self._price = price
    def getPrice(self):
        return self._price[0] + self._price[1] * 0.01
    
    def __str__(self) -> str:
        return self.title + " " + str(self._price) +self.category
    
    def get_scv_header(self)->str:
        movie_scv_header =  "{};{};{};{};{};{};{};{};{}".format("product_id", "movie_id"
                                                          , "movie_title","price", "image","actors","Attribute (Name:Type:Position)",
                                                          "Value (Value:Position)",self.price_impact)
        for key in self.info:
            movie_scv_header += ";" + key
        movie_scv_header += ";" + "is_active"
        movie_scv_header += ";" + "amount"
        movie_scv_header += "\n"
        return movie_scv_header
    def to_scv_row(self)->str:
        ntp = "Jakość"+":"+"select" +":0"
        vp = self.info['Dział'] +":0"
        cast_p= ""
        if self.cast is not None:
            cast_p= ','.join(actor.replace('\n','') for actor in self.cast)

        movie_scv_text = "{};{};{};{};{};{};{};{};{}".format(self.product_id,
                    self.movie_id,self.title,
                    self.getPrice(),
                    self.image,
                     cast_p,                             ntp,vp,self.price_impact
                                                          )
        for key in Movie.all_keys:
            movie_scv_text += ";" 
            try:
                movie_scv_text += self.info[key].strip().strip('\n').replace('\n','').replace(';','')
            except KeyError:
                print(KeyError)
        movie_scv_text +=";"+ str(self.is_active)
        movie_scv_text += ";" + str(self.amount)
        movie_scv_text+="\n"
        return movie_scv_text 
