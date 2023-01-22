-- mysql -u root -ppassword

CREATE DATABASE prestashop;
CREATE USER 'kinouser'@'localhost' IDENTIFIED BY 'password';
GRANT ALL PRIVILEGES ON prestashop.* TO 'kinouser'@'localhost' WITH GRANT OPTION;
