FROM php:7.4.8-fpm-alpine

RUN apk --update add \
    && apk add build-base curl git libzip-dev \
    && docker-php-ext-install zip pdo_mysql

COPY --from=composer /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html