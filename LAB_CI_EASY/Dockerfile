FROM ubuntu:latest

RUN apt-get update && apt-get install -y \
    iputils-ping \
    php \
    php-cli \
    php-fpm \
    php-mbstring \
    php-xml \
    php-curl \
    php-json \
    iputils-ping    

COPY src/ /var/www/html/

COPY flags/root.txt /root/root.txt

RUN rm -rf /var/www/html/index.html

EXPOSE 80
