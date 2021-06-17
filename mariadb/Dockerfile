FROM debian:buster

RUN apt-get update
RUN apt-get -y upgrade
RUN apt-get install -y default-mysql-server procps

COPY ./srcs/* /var/www/
EXPOSE 3306
RUN chmod +x /var/www/start.sh

RUN sed -ie 's3#port3port3' /etc/mysql/mariadb.conf.d/50-server.cnf
RUN sed -ie 's3bind-address3#bind-address3' /etc/mysql/mariadb.conf.d/50-server.cnf
RUN echo [mysqld]\\n \
user = root\\n \
port = 3306\\n \
datadir = /var/lib/mysql\\n \
bind-address = 0.0.0.0\\n \
skip-networking = false\n  > /etc/mysql/my.cnf

ENTRYPOINT ["/var/www/start.sh"]
CMD ["mysql"]

