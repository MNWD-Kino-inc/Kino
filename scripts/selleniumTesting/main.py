import random

from selenium import webdriver
from selenium.webdriver.common.by import By

def add_product(num):
    prod = "#content > section > div > div:nth-child(" + str(num) + ")"
    product = driver.find_element(by=By.CSS_SELECTOR, value="#content > section > div > div:nth-child(" + str(num+1) + ")")
    product.click()

    # color = driver.find_element(by=By.CSS_SELECTOR, value="#group_2 > li:nth-child(2) > label > input")
    # color.click()

    up = driver.find_element(by=By.CSS_SELECTOR,
                             value="#add-to-cart-or-refresh > div.product-add-to-cart.js-product-add-to-cart > div > div.qty > div > span.input-group-btn-vertical > button.btn.btn-touchspin.js-touchspin.bootstrap-touchspin-up")
    clicks = random.randint(0, 5)
    for i in range(clicks):
        up.click()

    buy = driver.find_element(by=By.CSS_SELECTOR,
                              value="#add-to-cart-or-refresh > div.product-add-to-cart.js-product-add-to-cart > div > div.add > button")
    buy.click()
    driver.implicitly_wait(2.5)

    cont_shopping = driver.find_element(by=By.CSS_SELECTOR,
                                        value="#blockcart-modal > div > div > div.modal-body > div > div.col-md-7 > div > div > button")
    cont_shopping.click()

    main_page = driver.find_element(by=By.CSS_SELECTOR, value="#_desktop_logo")
    main_page.click()

def rej_account():
    driver.find_element(by=By.CSS_SELECTOR, value="#field-firstname").send_keys("Nina")
    driver.find_element(by=By.CSS_SELECTOR, value="#field-lastname").send_keys("Orlowska")
    driver.find_element(by=By.CSS_SELECTOR, value="#field-email").send_keys("nina4.orlowska@gmail.com")
    driver.find_element(by=By.CSS_SELECTOR, value="#field-password").send_keys("1234!@#$")
    driver.find_element(by=By.CSS_SELECTOR, value="#field-birthday").send_keys("2000-03-15")
    driver.find_element(by=By.CSS_SELECTOR, value="#customer-form > div > div:nth-child(8) > div.col-md-6 > span").click()
    driver.find_element(by=By.CSS_SELECTOR, value="#customer-form > div > div:nth-child(9) > div.col-md-6 > span").click()
    driver.find_element(by=By.CSS_SELECTOR, value="#customer-form > div > div:nth-child(10) > div.col-md-6 > span").click()
    driver.find_element(by=By.CSS_SELECTOR, value="#customer-form > div > div:nth-child(11) > div.col-md-6 > span").click()
    driver.find_element(by=By.CSS_SELECTOR, value="#customer-form > footer > button").click()

def delivery():
    driver.find_element(by=By.CSS_SELECTOR, value="#field-address1").send_keys("ul. Wyspianskiego 9/201B")
    driver.find_element(by=By.CSS_SELECTOR, value="#field-postcode").send_keys("80-422")
    driver.find_element(by=By.CSS_SELECTOR, value="#field-city").send_keys("Gdansk")
    driver.find_element(by=By.CSS_SELECTOR, value="#delivery-address > div > footer > button").click()
    driver.find_element(by=By.CSS_SELECTOR, value="#delivery_option_2").click()
    driver.find_element(by=By.CSS_SELECTOR, value="#js-delivery > button").click()

def pay():
    driver.find_element(by=By.CSS_SELECTOR, value="#payment-option-2").click()
    driver.find_element(by=By.CSS_SELECTOR, value="#conditions_to_approve\[terms-and-conditions\]").click()
    driver.find_element(by=By.CSS_SELECTOR, value="#payment-confirmation > div.ps-shown-by-js > button").click()

if __name__ == '__main__':

    driver = webdriver.Chrome()

    driver.get("http://localhost/prestashop/en/")

    driver.implicitly_wait(0.5)

    for i in range(2):
        add_product(i)

    basket = driver.find_element(by=By.CSS_SELECTOR, value="div.header")
    basket.click()
    driver.implicitly_wait(0.5)

    delete = driver.find_element(by=By.CSS_SELECTOR, value="#main > div > div.cart-grid-body.col-xs-12.col-lg-8 > div > div.cart-overview.js-cart > ul > li > div > div.product-line-grid-right.product-line-actions.col-md-5.col-xs-12 > div > div.col-md-2.col-xs-2.text-xs-right > div")
    delete.click()

    order = driver.find_element(by=By.CSS_SELECTOR, value="#main > div > div.cart-grid-right.col-xs-12.col-lg-4 > div.card.cart-summary > div.checkout.cart-detailed-actions.js-cart-detailed-actions.card-block > div > a")
    order.click()

    rej_account()
    delivery()
    pay()

    driver.quit()