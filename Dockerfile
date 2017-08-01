# Dockerfile
# Base Php image
#FROM php:7.0-apache
FROM buymart/php-mongo-image:1.0

# Installing some important libraries like libssl 
# When you run sudo apt-get update (or use the Refresh button in a package manager), 
# a list of packages will get downloaded from the Ubuntu servers. These files are then stored in /var/lib/apt/lists/.
# You can safely remove the contents of that directory as it is recreated when you refresh the package lists.
#RUN apt-get update && apt-get install -y libssl-dev && rm -rf /var/lib/apt/lists/*

# Installing and enabling MongoDB extension
#RUN pecl install mongodb-1.2.9 \
#   	&& docker-php-ext-enable mongodb

RUN a2enmod rewrite

# Adding application to web root
ADD . /var/www

# Adding public files to web root public
ADD ./public /var/www/html

# Giving Write persmission to storage
RUN chmod -R 777 /var/www/storage

# run this container using : docker run -p 8000[external port]:80[internal port] imagename:tag
