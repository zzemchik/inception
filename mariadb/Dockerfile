FROM debian:buster

RUN apt-get update
RUN apt-get -y upgrade
RUN apt-get install -y default-mysql-server procps

COPY ./srcs/start.sh /var/www/
EXPOSE 3306
RUN chmod +x /var/www/start.sh
RUN set -ie 's/#port/port/' /etc/mysql/mariadb.conf.d/50-server.cnf
RUN set -ie 's/= 127.0.0.1/0.0.0.0/' /etc/mysql/mariadb.conf.d/50-server.cnf


ENTRYPOINT ["/var/www/start.sh"]
CMD ["mysql"]

