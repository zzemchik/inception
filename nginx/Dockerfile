
FROM debian:buster
# install all
RUN apt-get -y update
RUN apt-get -y install openssl
RUN apt-get -y install nginx
RUN apt-get -y install wget
COPY ./srcs/* ./
# SSL key
RUN	mkdir /etc/nginx/ssl
RUN openssl req -x509 -nodes -days 365 -newkey \
rsa:2048 -keyout /etc/nginx/ssl/rnancee.key \
-out /etc/nginx/ssl/rnancee.crt \
-subj '/C=RU/ST=Kazan/L=Kazan/O=Ecole42/OU=School21/CN=rnancee'

RUN chmod -R 755 /etc/nginx/ssl/rnancee*
#ngingx
RUN rm -Rf /etc/nginx/sites-enabled/default
RUN rm -Rf /etc/nginx/sites-available/default
RUN mv nginx.conf /etc/nginx/sites-available/nginx.conf
RUN ln -s /etc/nginx/sites-available/nginx.conf /etc/nginx/sites-enabled/nginx.conf
EXPOSE 80 443

CMD ["nginx", "-g", "daemon off;"]