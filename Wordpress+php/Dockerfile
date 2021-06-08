FROM debian:buster

RUN apt-get -y update
RUN apt-get -y install wordpress
RUN apt-get -y install php7.3 php7.3-fpm php7.3-mysql php7.3-curl \
php7.3-gd php7.3-intl php7.3-mbstring php7.3-soap \
php7.3-xml php7.3-xmlrpc php7.3-zip \
php7.3-common php7.3-gmp php7.3-cli php7.3-imap wget
COPY ./srcs/* ./
RUN mv start.sh /var/www/
#wordpress
RUN mv /usr/share/wordpress /var/www/html
RUN mv wp-config.php /var/www/html/wordpress
RUN chmod +x www.conf
RUN chmod +x php-fpm.conf

# RUN rm -rf /etc/php/7.3/fpm/php-fpm.conf
# RUN mv www.conf /etc/php/7.3/fpm/php-fpm.conf
# RUN rm -rf /etc/php/7.3/fpm/pool.d/www.conf
# RUN mv www.conf /etc/php/7.3/fpm/pool.d/www.conf
EXPOSE 9000 

RUN sed -ie 's#/run/php/php7.3-fpm.sock#9000#' /etc/php/7.3/fpm/pool.d/www.conf
RUN chmod +x /var/www/start.sh
RUN service php7.3-fpm start
# ENTRYPOINT ["/var/www/start.sh"]
CMD ["usr/sbin/php-fpm7.3", "--nodaemonize"]