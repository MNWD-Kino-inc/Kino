echo 'user creation'
mysql -u root -p$MYSQL_ROOT_PASSWORD < ./database_user1Root.sql
echo 'export start'
mysql -u $MARIADB_USER -p$MYSQL_ROOT_PASSWORD < ./database_config2User.sql