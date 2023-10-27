#FROM php:8.1-apache
#RUN apt-get update && docker-php-ext-install mysqli pdo && docker-php-ext-enable mysqli pdo
#COPY . /var/www/html/
FROM php:8.1-apache

RUN apt-get update && apt-get install -y \
    libicu-dev \
    libzip-dev \
    && docker-php-ext-install mysqli pdo pdo_mysql intl zip \
    && a2enmod rewrite

COPY . /var/www/html/
