#!/usr/bin/env bash 
service mysql start

echo "CREATE DATABASE IF NOT EXISTS database1;"| mysql -u root --skip-password
# echo "USE database1;" | mysql -u root --skip-password
echo "CREATE USER IF NOT EXISTS 'root'@'%' IDENTIFIED BY '$PASSWORD_MYSQL' ;"| mysql -u root --skip-password
echo "GRANT ALL PRIVILEGES ON database1.* TO 'root'@'%';"| mysql -u root --skip-password
echo "FLUSH PRIVILEGES;"| mysql -u root --skip-password
echo "qwer1234" | mysqladmin -u root password
exec "$@"