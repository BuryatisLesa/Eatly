    FROM php:8.2-fpm

RUN apt-get update && apt-get install -y libmcrypt-dev libpng-dev mariadb-client \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libgd-dev \
    && docker-php-ext-install pdo_mysql


RUN apt-get update && \
    apt-get install -y --no-install-recommends git zip

RUN curl --silent --show-error https://getcomposer.org/installer | php


WORKDIR /var/www



