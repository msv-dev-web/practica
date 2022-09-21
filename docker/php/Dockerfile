FROM php:8-fpm-alpine

RUN apk add --update nodejs npm yarn curl git build-base zlib-dev oniguruma-dev autoconf bash

ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/
RUN chmod +x /usr/local/bin/install-php-extensions && \
    install-php-extensions mongodb-stable pcntl

RUN docker-php-ext-install sockets

RUN wget https://getcomposer.org/installer -O - | php -- --install-dir=/usr/local/bin --filename=composer

RUN pecl install xdebug && docker-php-ext-enable xdebug;
COPY xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini

ADD php.ini /usr/local/etc/php/php.ini
ADD php-fpm.conf /etc/php/php-fpm.d/

WORKDIR /var/www/app

EXPOSE 9001

CMD ["php-fpm", "-F"]
