# Dockerfile
# Base Php image
FROM php:7.0-apache

# Installing some important libraries like libssl 
RUN apt-get update && apt-get install -y libssl-dev && rm -rf /var/lib/apt/lists/*

# Installing and enabling MongoDB extension
RUN pecl install mongodb-1.2.9 \
    && docker-php-ext-enable mongodb

RUN a2enmod rewrite

ADD . /var/www

ADD ./public /var/www/html

RUN chmod -R 777 /var/www/storage

# run this container using : docker run -p 8000:80 imagename:tag
