-- mysql -u kinouser -ppassword
USE prestashop;
SOURCE ./dump.sql;

UPDATE ps_configuration SET value = 0 WHERE name = 'PS_SSL_ENABLED';
UPDATE ps_configuration SET value = 0 WHERE name = 'PS_SSL_ENABLED_EVERYWHERE';
UPDATE ps_shop_url SET domain = '127.0.0.1:8910' WHERE id_shop_url = 1;
UPDATE ps_shop_url SET domain_ssl = '127.0.0.1:8910' WHERE id_shop_url = 1;
UPDATE ps_shop_url SET physical_uri = '/' WHERE id_shop_url = 1;
UPDATE ps_configuration set value = '127.0.0.1:8910' WHERE name = 'PS_SHOP_DOMAIN';
UPDATE ps_configuration set value = '127.0.0.1:8910' WHERE name = 'PS_SHOP_DOMAIN_SSL';