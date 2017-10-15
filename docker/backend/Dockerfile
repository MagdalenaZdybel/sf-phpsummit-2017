FROM php:7.1.6-fpm

RUN apt-get update && apt-get install -y \
        libmcrypt-dev \
        libpng12-dev \
        libicu-dev \
        git \
        libpcre3-dev \
        libpq-dev \
        postgresql-client \
    && docker-php-ext-install -j$(nproc) mcrypt intl zip pdo_pgsql

RUN docker-php-ext-enable opcache

RUN pecl install apcu \
    && docker-php-ext-enable apcu

RUN apt-get update && apt-get install -y libssl-dev

RUN curl -sS https://getcomposer.org/installer | php \
    && mv composer.phar /usr/bin/composer

RUN mkdir -p /usr/local/bin && curl -LsS https://symfony.com/installer -o /usr/local/bin/symfony && \
   chmod a+x /usr/local/bin/symfony

WORKDIR /var/www/symfony