import random

from selenium import webdriver
from selenium.webdriver.common.by import By

def add_product(num):
    product = driver.find_element(by=By.CSS_SELECTOR, value="#js-product-list > div.products.row > div:nth-child(" + str(num+1) + ") > article > div > div.thumbnail-top > a")
    product.click()
    driver.implicitly_wait(0.5)

    # color = driver.find_element(by=By.CSS_SELECTOR, value="#group_2 > li:nth-child(2) > label > input")
    # color.click()

    up = driver.find_element(by=By.CSS_SELECTOR,
                             value="#add-to-cart-or-refresh > div.product-add-to-cart.js-product-add-to-cart > div > div.qty > div > span.input-group-btn-vertical > button.btn.btn-touchspin.js-touchspin.bootstrap-touchspin-up")
    clicks = random.randint(0, 4)
    for i in range(clicks):
        up.click()
    driver.implicitly_wait(1)

    buy = driver.find_element(by=By.CSS_SELECTOR,
                              value="#add-to-cart-or-refresh > div.product-add-to-cart.js-product-add-to-cart > div > div.add > button")
    buy.click()
    driver.implicitly_wait(2.5)

    cont_shopping = driver.find_element(by=By.CSS_SELECTOR,
                                        value="#blockcart-modal > div > div > div.modal-body > div > div.col-md-7 > div > div > button")
    cont_shopping.click()
    driver.implicitly_wait(1.5)

    main_page = driver.find_element(by=By.CSS_SELECTOR, value="#category-10 > a")
    main_page.click()

def rej_account():
    driver.find_element(by=By.CSS_SELECTOR, value="#field-firstname").send_keys("Nina")
    driver.find_element(by=By.CSS_SELECTOR, value="#field-lastname").send_keys("Orlowska")
    driver.find_element(by=By.CSS_SELECTOR, value="#field-email").send_keys("nina9.orlowska@gmail.com")
    driver.find_element(by=By.CSS_SELECTOR, value="#field-password").send_keys("1234!@#$")
    driver.find_element(by=By.CSS_SELECTOR, value="#field-birthday").send_keys("2000-03-15")
    driver.implicitly_wait(0.5)
    driver.find_element(by=By.CSS_SELECTOR, value="#customer-form > div > div:nth-child(8) > div.col-md-6 > span").click()
    driver.find_element(by=By.CSS_SELECTOR, value="#customer-form > div > div:nth-child(9) > div.col-md-6 > span").click()
    driver.find_element(by=By.CSS_SELECTOR, value="#customer-form > div > div:nth-child(10) > div.col-md-6 > span").click()
    driver.find_element(by=By.CSS_SELECTOR, value="#customer-form > div > div:nth-child(11) > div.col-md-6 > span").click()
    driver.find_element(by=By.CSS_SELECTOR, value="#customer-form > footer > button").click()
    driver.implicitly_wait(0.5)

def delivery():
    driver.find_element(by=By.CSS_SELECTOR, value="#field-address1").send_keys("ul. Wyspianskiego 9/201B")
    driver.find_element(by=By.CSS_SELECTOR, value="#field-postcode").send_keys("80-422")
    driver.find_element(by=By.CSS_SELECTOR, value="#field-city").send_keys("Gdansk")
    driver.implicitly_wait(0.5)
    driver.find_element(by=By.CSS_SELECTOR, value="#delivery-address > div > footer > button").click()
    driver.find_element(by=By.CSS_SELECTOR, value="#delivery_option_5").click()
    driver.find_element(by=By.CSS_SELECTOR, value="#js-delivery > button").click()
    driver.implicitly_wait(0.5)

def pay():
    driver.find_element(by=By.CSS_SELECTOR, value="#payment-option-2").click()
    driver.find_element(by=By.CSS_SELECTOR, value="#conditions_to_approve\[terms-and-conditions\]").click()
    driver.find_element(by=By.CSS_SELECTOR, value="#payment-confirmation > div.ps-shown-by-js > button").click()
    driver.implicitly_wait(0.5)

if __name__ == '__main__':

    driver = webdriver.Chrome()

    driver.get("https://localhost/Kino/prestashop/")

    driver.implicitly_wait(0.5)

    driver.find_element(by=By.CSS_SELECTOR, value="#details-button").click()
    driver.find_element(by=By.CSS_SELECTOR, value="#proceed-link").click()
    driver.implicitly_wait(0.5)

    driver.find_element(by=By.CSS_SELECTOR, value="#category-10 > a").click()

    # driver.find_element(by=By.CSS_SELECTOR, value="#left-column > div.block-categories > ul > li:nth-child(2) > ul > li:nth-child(2) > a").click()
    for i in range(1, 6):
        driver.find_element(by=By.CSS_SELECTOR, value="#left-column > div.block-categories > ul > li:nth-child(2) > ul > li:nth-child(2) > a").click()
        add_product(i)
        driver.implicitly_wait(0.5)

    # driver.find_element(by=By.CSS_SELECTOR, value="#left-column > div.block-categories > ul > li:nth-child(2) > ul > li:nth-child(3) > a").click()
    for i in range(5):
        driver.find_element(by=By.CSS_SELECTOR, value="#left-column > div.block-categories > ul > li:nth-child(2) > ul > li:nth-child(3) > a").click()
        add_product(i)
        driver.implicitly_wait(0.5)

    basket = driver.find_element(by=By.CSS_SELECTOR, value="div.header")
    basket.click()
    driver.implicitly_wait(1.5)

    delete = driver.find_element(by=By.CSS_SELECTOR, value="#main > div > div.cart-grid-body.col-xs-12.col-lg-8 > div > div.cart-overview.js-cart > ul > li > div > div.product-line-grid-right.product-line-actions.col-md-5.col-xs-12 > div > div.col-md-2.col-xs-2.text-xs-right > div")
    delete.click()
    driver.implicitly_wait(1.5)

    order = driver.find_element(by=By.CSS_SELECTOR, value="#main > div > div.cart-grid-right.col-xs-12.col-lg-4 > div.card.cart-summary > div.checkout.cart-detailed-actions.js-cart-detailed-actions.card-block > div > a")
    order.click()
    driver.implicitly_wait(0.5)

    rej_account()
    driver.implicitly_wait(1.5)
    delivery()
    driver.implicitly_wait(1.5)
    pay()
    driver.implicitly_wait(1.5)

    driver.find_element(by=By.CSS_SELECTOR, value="#_desktop_user_info > div > a.account").click()
    driver.find_element(by=By.CSS_SELECTOR, value="#history-link").click()
    driver.implicitly_wait(0.5)
    print(driver.find_element(by=By.CSS_SELECTOR, value="#content > table > tbody > tr > td:nth-child(5) > span").text)

    driver.quit()