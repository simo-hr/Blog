FROM php:8.0-fpm-buster
# timezone
ARG TZ
SHELL ["/bin/bash", "-oeux", "pipefail", "-c"]
ENV COMPOSER_ALLOW_SUPERUSER=1 \
  COMPOSER_HOME=/composer

COPY ./docker/php/php.ini /usr/local/etc/php/
COPY ./laravel/ /var/www/laravel/
COPY --from=composer:2.0 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/laravel

RUN apt-get update && \
  apt-get -y install git unzip libzip-dev libicu-dev libonig-dev && \
  apt-get clean && \
  rm -rf /var/lib/apt/lists/* && \
  docker-php-ext-install intl pdo_mysql zip bcmath
