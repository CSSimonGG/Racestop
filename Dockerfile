FROM php:8.1 as php

RUN apt-get update -y
RUN apt-get install -y unzip libpq-dev
RUN docker-php-ext-install pdo pdo_mysql mbstring libmcrypt-dev

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www
COPY . .

RUN composer install

ENV PORT =8000
ENTRYPOINT [ "docker/entrypoint.sh" ]
