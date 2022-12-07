import requests
import xml.etree.ElementTree as ET
import xmltodict
from pprint import pprint
from dict2xml import dict2xml
headers={
    "Authorization": "Basic M0xVTlYxTk1URFFCS05DRUVIQlQ4WTVUQlhTMlpTQUI6"}
response = requests.get("http://localhost/Kino/prestashop/api/products/1", headers=headers)


addresses_xml = requests.get("http://localhost/Kino/prestashop/api/addresses/?display=full",headers=headers)


#my_dict = xmltodict.parse(addresses_xml.content)

#pprint(my_dict)
#xml = dict2xml(my_dict)
#print(xml)
response = requests.post("http://localhost/Kino/prestashop/api/addresses/",addresses_xml.content,headers=headers)
print(response.status_code)
print(response.text)