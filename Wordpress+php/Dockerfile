FROM debian:buster

RUN apt-get -y update
RUN apt-get -y install wordpress
RUN apt-get -y install php7.3 php7.3-fpm php7.3-mysql php7.3-curl \
php7.3-gd php7.3-intl php7.3-mbstring php7.3-soap \
php7.3-xml php7.3-xmlrpc php7.3-zip \
php7.3-common php7.3-gmp php7.3-cli php7.3-imap wget
COPY ./srcs/* ./
#wordpress
RUN mkdir mu-plugins
RUN mv mu-plugins /usr/share/wordpress/wp-content/
RUN mv create-admin-user.php /usr/share/wordpress/wp-content/mu-plugins/
RUN mv /usr/share/wordpress /var/www/html
RUN mv wp-config.php /var/www/html/wordpress
RUN chown -R www-data:www-data /var/www/*;
RUN rm -rf  /var/www/html/wordpress/wp-config-sample.php
EXPOSE 9000

RUN sed -ie 's#/run/php/php7.3-fpm.sock#9000#' /etc/php/7.3/fpm/pool.d/www.conf
RUN service php7.3-fpm start
CMD ["usr/sbin/php-fpm7.3", "--nodaemonize"]