#!/usr/bin/env bash 
service mysql start
echo "CREATE DATABASE IF NOT EXISTS database1;"| mysql -u root --skip-password
echo "GRANT ALL PRIVILEGES ON database1.* TO 'root'@'localhost' WITH GRANT OPTION;"| mysql -u root --skip-password
echo "FLUSH PRIVILEGES;"| mysql -u root --skip-password
echo "UPDATE mysql.user SET plugin='' WHERE user='root';"| mysql -u root --skip-password
exec "$@"
