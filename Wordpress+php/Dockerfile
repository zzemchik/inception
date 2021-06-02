FROM debian:buster

RUN apt-get -y update
RUN apt-get -y install wordpress
RUN apt-get -y install php7.3 php7.3-fpm php7.3-mysql php7.3-curl \
php7.3-gd php7.3-intl php7.3-mbstring php7.3-soap \
php7.3-xml php7.3-xmlrpc php7.3-zip \
php7.3-common php7.3-gmp php7.3-cli php7.3-imap
RUN apt-get -y install wget
COPY ./srcs/* ./
#wordpress
RUN mv /usr/share/wordpress /var/www/html
RUN mv wp-config.php /var/www/html/wordpress


#phpmyadmin install
RUN mkdir var/www/html/phpmyadmin
RUN wget https://files.phpmyadmin.net/phpMyAdmin/4.9.5/phpMyAdmin-4.9.5-english.tar.gz
RUN tar -xzvf phpMyAdmin-4.9.5-english.tar.gz
RUN mv phpMyAdmin-4.9.5-english/* var/www/html/phpmyadmin
RUN rm -rf phpMyAdmin-4.9.5-english.tar.gz phpMyAdmin-4.9.5-english
RUN mv config.inc.php var/www/html/phpmyadmin
EXPOSE 9000

CMD bash start.sh