FROM debian:buster

RUN apt-get update
RUN apt-get -y upgrade
RUN apt-get install -y mariadb-server
RUN apt-get install -y default-mysql-server
RUN service mysql start

COPY ./srcs/* ./
EXPOSE 3306
RUN chmod 777 start.sh
CMD bash start.sh

