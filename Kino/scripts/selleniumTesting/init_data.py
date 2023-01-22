import random
from time import sleep

from selenium import webdriver
from selenium.webdriver import ActionChains
from selenium.webdriver.common.by import By

def add_products():
    driver.find_element(by=By.CSS_SELECTOR, value="#valueImportMatchs").click()
    driver.find_element(by=By.CSS_SELECTOR, value="#valueImportMatchs > option:nth-child(7) ").click()
    driver.find_element(by=By.CSS_SELECTOR, value="#loadImportMatchs").click()
    sleep(2)

    driver.find_element(by=By.CSS_SELECTOR, value="#type_value\[1\]").click()
    driver.find_element(by=By.CSS_SELECTOR, value="#type_value\[1\] > option:nth-child(2)").click()

    driver.find_element(by=By.CSS_SELECTOR, value="#type_value\[3\]").click()
    driver.find_element(by=By.CSS_SELECTOR, value="#type_value\[3\] > option:nth-child(6)").click()

    addr_url = driver.find_element(by=By.CSS_SELECTOR, value="#type_value\[4\]")
    addr_url.click()
    driver.find_element(by=By.CSS_SELECTOR, value="#type_value\[4\] > option:nth-child(50)").click()

    tags = driver.find_element(by=By.CSS_SELECTOR, value="#type_value\[5\]")
    tags.click()
    driver.find_element(by=By.CSS_SELECTOR, value="#type_value\[5\] > option:nth-child(39)").click()

    # next to 2
    next = driver.find_element(by=By.CSS_SELECTOR, value="#btn_right")
    ActionChains(driver) \
        .scroll_to_element(next) \
        .perform()
    next.click()

    driver.find_element(by=By.CSS_SELECTOR, value="#type_value\[9\]").click()
    driver.find_element(by=By.CSS_SELECTOR, value="#type_value\[9\] > option:nth-child(5)").click()

    # next to 3
    next = driver.find_element(by=By.CSS_SELECTOR, value="#btn_right")
    ActionChains(driver) \
        .scroll_to_element(next) \
        .perform()
    next.click()

    driver.find_element(by=By.CSS_SELECTOR, value="#type_value\[15\]").click()
    driver.find_element(by=By.CSS_SELECTOR, value="#type_value\[15\] > option:nth-child(38)").click()

    # next to 4
    next = driver.find_element(by=By.CSS_SELECTOR, value="#btn_right")
    ActionChains(driver) \
        .scroll_to_element(next) \
        .perform()
    next.click()

    driver.find_element(by=By.CSS_SELECTOR, value="#type_value\[19\]").click()
    driver.find_element(by=By.CSS_SELECTOR, value="#type_value\[19\] > option:nth-child(4)").click()

    # next to 5
    next = driver.find_element(by=By.CSS_SELECTOR, value="#btn_right")
    ActionChains(driver) \
        .scroll_to_element(next) \
        .perform()
    next.click()

    # next to 6
    next = driver.find_element(by=By.CSS_SELECTOR, value="#btn_right")
    ActionChains(driver) \
        .scroll_to_element(next) \
        .perform()
    next.click()

    driver.find_element(by=By.CSS_SELECTOR, value="#type_value\[30\]").click()
    driver.find_element(by=By.CSS_SELECTOR, value="#type_value\[30\] > option:nth-child(46)").click()

    driver.find_element(by=By.CSS_SELECTOR, value="#type_value\[31\]").click()
    driver.find_element(by=By.CSS_SELECTOR, value="#type_value\[31\] > option:nth-child(29)").click()

def add_combinations():
    driver.find_element(by=By.CSS_SELECTOR, value="#valueImportMatchs").click()
    driver.find_element(by=By.CSS_SELECTOR, value="#valueImportMatchs > option:nth-child(7) ").click()
    driver.find_element(by=By.CSS_SELECTOR, value="#loadImportMatchs").click()
    sleep(2)

    driver.find_element(by=By.CSS_SELECTOR, value="#type_value\[1\]").click()
    driver.find_element(by=By.CSS_SELECTOR, value="#type_value\[1\] > option:nth-child(2)").click()

    driver.find_element(by=By.CSS_SELECTOR, value="#type_value\[4\]").click()
    driver.find_element(by=By.CSS_SELECTOR, value="#type_value\[4\] > option:nth-child(22)").click()

    next = driver.find_element(by=By.CSS_SELECTOR, value="#btn_right")
    ActionChains(driver) \
        .scroll_to_element(next) \
        .perform()
    next.click()

    driver.find_element(by=By.CSS_SELECTOR, value="#type_value\[6\]").click()
    driver.find_element(by=By.CSS_SELECTOR, value="#type_value\[6\] > option:nth-child(4)").click()

    driver.find_element(by=By.CSS_SELECTOR, value="#type_value\[7\]").click()
    driver.find_element(by=By.CSS_SELECTOR, value="#type_value\[7\] > option:nth-child(5)").click()

    driver.find_element(by=By.CSS_SELECTOR, value="#type_value\[8\]").click()
    driver.find_element(by=By.CSS_SELECTOR, value="#type_value\[8\] > option:nth-child(12)").click()

    driver.find_element(by=By.CSS_SELECTOR, value="#type_value\[10\]").click()
    driver.find_element(by=By.CSS_SELECTOR, value="#type_value\[10\] > option:nth-child(14)").click()

if __name__ == '__main__':

    driver = webdriver.Chrome()
    driver.maximize_window()

    driver.get("http://localhost/Kino/prestashop/admin429saele3")

    driver.implicitly_wait(0.5)

    driver.find_element(by=By.CSS_SELECTOR, value="#details-button").click()
    driver.find_element(by=By.CSS_SELECTOR, value="#proceed-link").click()
    driver.implicitly_wait(0.5)

    driver.find_element(by=By.CSS_SELECTOR, value="#email").send_keys("bogush22092209@gmail.com")
    driver.find_element(by=By.CSS_SELECTOR, value="#passwd").send_keys("1qz2wx3ec")
    driver.find_element(by=By.CSS_SELECTOR, value="#submit_login").click()
    driver.implicitly_wait(5)

    driver.find_element(by=By.CSS_SELECTOR, value="#subtab-AdminCatalog > a").click()
    driver.find_element(by=By.CSS_SELECTOR, value="#subtab-AdminProducts > a").click()
    driver.implicitly_wait(7)

    driver.find_element(by=By.CSS_SELECTOR, value="#catalog-tools-button").click()
    driver.find_element(by=By.CSS_SELECTOR, value="#desc-product-import").click()
    driver.implicitly_wait(55)

    # category
    chooseFile = driver.find_element(by=By.ID, value="file")
    chooseFile.send_keys("C:/Users/maryk/xampp/htdocs/Kino/parser/final/categories.csv")
    driver.implicitly_wait(9)
    sleep(3)

    driver.execute_script("window.scrollTo(0, document.body.scrollHeight);")
    driver.find_element(by=By.CSS_SELECTOR, value="#truncate_1").click()
    driver.find_element(by=By.CSS_SELECTOR, value="#main-div > div > div.row > div > div.row.row.justify-content-center > div > div > div.col-12.col-md-8 > form > div > div.card-footer > div > button").click()
    driver.switch_to.alert.accept()
    driver.implicitly_wait(3)
    driver.execute_script("window.scrollTo(0, document.body.scrollHeight);")
    driver.find_element(by=By.ID, value="import").click()
    driver.implicitly_wait(100)
    driver.find_element(by=By.CSS_SELECTOR, value="#import_close_button").click()
    sleep(3)

    # # products
    driver.find_element(by=By.CSS_SELECTOR, value="#entity").click()
    driver.find_element(by=By.CSS_SELECTOR, value="#entity > option:nth-child(2)").click()

    chooseFile = driver.find_element(by=By.ID, value="file")
    chooseFile.send_keys("C:/Users/maryk/xampp/htdocs/Kino/parser/final/uniq_movies.csv")
    driver.implicitly_wait(9)
    sleep(3)

    next = driver.find_element(by=By.CSS_SELECTOR,
                         value="#main-div > div > div.row > div > div.row.row.justify-content-center > div > div > div.col-12.col-md-8 > form > div > div.card-footer > div > button")
    ActionChains(driver) \
         .scroll_to_element(next) \
         .perform()
    driver.find_element(by=By.CSS_SELECTOR, value="#forceIDs_1").click()
    next.click()

    driver.switch_to.alert.accept()
    driver.implicitly_wait(3)
    #code here
    add_products()

    driver.execute_script("window.scrollTo(0, document.body.scrollHeight);")
    driver.find_element(by=By.ID, value="import").click()
    driver.implicitly_wait(500)
    sleep(120)
    driver.find_element(by=By.CSS_SELECTOR, value="#import_close_button").click()
    sleep(2)

    # combinations
    driver.find_element(by=By.CSS_SELECTOR, value="#entity").click()
    driver.find_element(by=By.CSS_SELECTOR, value="#entity > option:nth-child(3)").click()

    chooseFile = driver.find_element(by=By.ID, value="file")
    chooseFile.send_keys("C:/Users/maryk/xampp/htdocs/Kino/parser/final/comb_final.csv")
    sleep(2)

    driver.execute_script("window.scrollTo(0, document.body.scrollHeight);")
    driver.find_element(by=By.CSS_SELECTOR,
                        value="#main-div > div > div.row > div > div.row.row.justify-content-center > div > div > div.col-12.col-md-8 > form > div > div.card-footer > div > button").click()

    driver.switch_to.alert.accept()
    driver.implicitly_wait(3)

    add_combinations()

    driver.execute_script("window.scrollTo(0, document.body.scrollHeight);")
    driver.find_element(by=By.ID, value="import").click()
    driver.implicitly_wait(300)
    sleep(40)
    driver.find_element(by=By.CSS_SELECTOR, value="#import_close_button").click()


    driver.quit()