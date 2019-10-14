ARG COMPOSER_VERSION=1.9.0
ARG PHP_VERSION=7.3.10

FROM composer:${COMPOSER_VERSION} as composer

FROM php:${PHP_VERSION}-cli-alpine

ENV COMPOSER_ALLOW_SUPERUSER=1
ENV COMPOSER_NO_INTERACTION=1

COPY --from=composer /usr/bin/composer /usr/bin/composer


ARG PACKAGIST_REGION
ENV PACKAGIST_REGION ${PACKAGIST_REGION}

RUN if [ ${PACKAGIST_REGION} ]; then \
    composer config -g repo.packagist composer ${PACKAGIST_REGION} \
;fi

ADD . .

RUN composer install