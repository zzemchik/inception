#!/usr/bin/env bash 
service mysql start

echo "CREATE DATABASE IF NOT EXISTS $DATABASE;"| mysql -u root 
echo "CREATE USER IF NOT EXISTS '$USER_NAME'@'%' IDENTIFIED BY '$PASSWORD_MYSQL';"| mysql -u root 
echo "GRANT ALL PRIVILEGES ON  $DATABASE.* TO '$USER_NAME'@'%';"| mysql -u root 
echo "FLUSH PRIVILEGES;"| mysql -u root 
echo "qwer1234" | mysqladmin -u root password
exec "$@"