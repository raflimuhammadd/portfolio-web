FROM php:8.4-fpm-alpine

RUN apk add --no-cache \
    bash curl git unzip icu-dev oniguruma-dev libzip-dev \
    mysql-client \
    && docker-php-ext-install pdo pdo_mysql mbstring intl zip opcache

# Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Custom php.ini
COPY php.ini /usr/local/etc/php/conf.d/99-custom.ini

