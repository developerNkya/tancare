# FROM php:8.2-cli

# WORKDIR /var/www

# # Install dependencies
# RUN apt-get update && apt-get install -y \
#     git \
#     curl \
#     libpng-dev \
#     libonig-dev \
#     libxml2-dev \
#     zip \
#     unzip \
#     libzip-dev \
#     default-mysql-client

# RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

# COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# COPY . .

# RUN composer install --no-dev --optimize-autoloader

# RUN chown -R www-data:www-data storage bootstrap/cache
# RUN chmod -R 775 storage bootstrap/cache

# RUN if [ ! -f .env ]; then cp .env.example .env && php artisan key:generate; fi

# RUN php artisan config:cache
# RUN php artisan route:cache

# EXPOSE 8000

# CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]



FROM php:8.2-cli

WORKDIR /var/www

RUN apt-get update && apt-get install -y \
    git curl libpng-dev libonig-dev libxml2-dev zip unzip libzip-dev default-mysql-client \
 && apt-get clean && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

COPY . .

RUN composer install --no-dev --optimize-autoloader

# Ensure SQLite file exists
RUN mkdir -p database && touch database/database.sqlite && chmod -R 775 database

RUN chown -R www-data:www-data storage bootstrap/cache database
RUN chmod -R 775 storage bootstrap/cache database

RUN if [ ! -f .env ]; then cp .env.example .env && php artisan key:generate; fi

RUN php artisan config:cache
RUN php artisan route:cache
RUN php artisan migrate --force

EXPOSE 8000

CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
