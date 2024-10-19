# Dockerfile
ARG PHP_VERSION

FROM nanoninja/php-fpm:${PHP_VERSION}

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set the working directory
WORKDIR /var/www/html