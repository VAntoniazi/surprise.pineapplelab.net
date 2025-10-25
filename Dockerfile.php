FROM php:8.2-fpm

RUN set -eux; \
    apt-get update; \
    apt-get install -y --no-install-recommends git unzip; \
    rm -rf /var/lib/apt/lists/*

# habilita MySQL (resolve "could not find driver")
RUN docker-php-ext-install pdo pdo_mysql mysqli

WORKDIR /var/www/html
