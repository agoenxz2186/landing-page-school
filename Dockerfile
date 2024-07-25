FROM php:5.6-apache

RUN apt-get update && apt-get install -y libpq-dev libmcrypt-dev libxml2-dev libcurl4-openssl-dev libicu-dev \
    && docker-php-ext-install pdo_mysql pdo_pgsql curl intl mcrypt mbstring xmlrpc

COPY . /var/www/html

RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
