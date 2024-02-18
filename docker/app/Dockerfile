FROM php:8.2.0-fpm

# Set working directory
WORKDIR /var/www

# Install dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    locales \
    tzdata\
    git \
    unzip \
    zip \
    curl \
    libxml2-dev \
    libzip-dev \
    libpng-dev \
    libgd-dev \
    supervisor


# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install extensions
RUN docker-php-ext-configure gd --enable-gd --with-freetype --with-jpeg
RUN docker-php-ext-install pdo_mysql exif pcntl soap zip gd bcmath gettext intl

#Redis
RUN pecl install redis &&  rm -rf /tmp/pear &&  docker-php-ext-enable redis

#install composer
COPY --from=composer:2.5.4 /usr/bin/composer /usr/local/bin/composer

# Add user for laravel application
RUN groupadd -g 1000 www
RUN useradd -u 1000 -ms /bin/bash -g www www

COPY ./unoconv /usr/bin/unoconv
COPY ./supervisord.conf /etc/supervisor/conf.d/
RUN chmod +x /usr/bin/unoconv

# Change current user to www
USER www

# Expose port 9000 and start bash server
EXPOSE 9000
CMD ["php-fpm"]

