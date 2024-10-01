FROM php:8.0-apache
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN mkdir -p /var/www/lib
WORKDIR /var/www/lib