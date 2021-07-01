FROM php:8.0.5-fpm-alpine

# Arguments defined in docker-compose.yml
ARG user
ARG uid

# Install system dependencies
RUN set -ex \
    && apk add --no-cache --update \
    git \
    curl \
    libpng-dev \
#    libonig-dev \ заменил на oniguruma-dev \
    oniguruma-dev \
    libxml2-dev \
    zip \
    unzip \
    && rm -rf /var/cache/apk/* \


# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Create system user to run Composer and Artisan Commands. Команда в ubuntu
# Аналог команды "#RUN useradd -G www-data,root -u $uid -d /home/$user $user" в alpine

RUN addgroup -g $uid $user && adduser -G $user -g $user -s /bin/sh -D $user

RUN mkdir -p /home/$user/.composer && \
    chown -R $user:$user /home/$user

# Set working directory
WORKDIR /var/www

USER $user
