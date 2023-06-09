# YII2 Docker
# Created By: Defri Indra Mahardika
# Created At: 2021

FROM php:7.0-fpm

# Copy composer.lock and composer.json
COPY composer.lock composer.json /var/www/html/

# Set working directory
WORKDIR /var/www/html

# Install dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    locales \
    libzip-dev \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    unzip \
    git \
    curl

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install extensions
RUN docker-php-ext-install pdo_mysql zip exif pcntl
RUN docker-php-ext-configure gd --with-jpeg=/usr/include/ --with-freetype=/usr/include/
RUN docker-php-ext-install gd

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# downgrade composer
RUN composer self-update --1

# Copy existing application directory contents
COPY . /var/www/html

# add new user
RUN useradd -ms /bin/bash isalam

# Copy existing application directory permissions
COPY --chown=isalam:isalam . /var/www/html

RUN composer install

COPY composer.json ./

# Change current user to www
USER isalam
# Expose port 9000 and start php-fpm server
EXPOSE 9000
CMD ["php-fpm"]