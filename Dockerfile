FROM php:8.1-apache

RUN apt-get update && apt-get upgrade -y && apt-get install -y git && \
    apt-get install -y \
    libzip-dev \
    && docker-php-ext-install zip
RUN apt-get install -y libmagickwand-dev --no-install-recommends && rm -rf /var/lib/apt/lists/*
RUN printf "\n" | pecl install imagick
RUN docker-php-ext-enable imagick
RUN docker-php-ext-install gd
RUN docker-php-ext-install mysqli pdo pdo_mysql
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN apt-get update && apt-get install -y \
    software-properties-common \
    npm
RUN npm install -g npm@8.10.0 && \
    npm install laravel-mix@latest

EXPOSE 80