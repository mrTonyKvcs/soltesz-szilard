FROM php:8.5-fpm-bookworm

RUN apt-get update && apt-get install -y --no-install-recommends \
        libicu-dev libzip-dev libpng-dev libxml2-dev libsqlite3-dev libonig-dev unzip git \
    && docker-php-ext-install -j$(nproc) pdo_mysql pdo_sqlite intl zip gd mbstring \
    && rm -rf /var/lib/apt/lists/*

COPY --from=composer:2 /usr/bin/composer /usr/local/bin/composer
WORKDIR /var/www/html
COPY uploads.ini /usr/local/etc/php/conf.d/99-application.ini
