FROM php:8.2-apache

RUN a2enmod rewrite proxy proxy_http

COPY ./my-vhost.conf /etc/apache2/sites-available/000-default.conf

RUN chown -R www-data:www-data /var/www/html && chmod -R 755 /var/www/html

RUN apt-get update && apt-get install -y \
  zip \
  unzip \
  vim \
  curl \
  git \
  && docker-php-ext-install mysqli pdo pdo_mysql \
  && curl -sS https://getcomposer.org/installer | php -- \
  && mv composer.phar /usr/local/bin/composer

EXPOSE 80

CMD ["apache2-foreground"]
