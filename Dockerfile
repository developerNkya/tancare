FROM php:8.2-fpm

WORKDIR /var/www

# Install dependencies including SQLite
RUN apt-get update && apt-get install -y \
    nginx \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    libzip-dev \
    default-mysql-client \
    sqlite3

RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql pdo_sqlite mbstring exif pcntl bcmath gd zip

# Install composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy application files
COPY . .

# Create nginx configuration
RUN echo 'server { \
    listen 80; \
    root /var/www/public; \
    index index.php index.html index.htm; \
    \
    location / { \
        try_files \$uri \$uri/ /index.php?\$query_string; \
    } \
    \
    location ~ \.php$ { \
        include fastcgi_params; \
        fastcgi_pass 127.0.0.1:9000; \
        fastcgi_param SCRIPT_FILENAME \$document_root\$fastcgi_script_name; \
    } \
    \
    location ~ /\.ht { \
        deny all; \
    } \
}' > /etc/nginx/sites-available/default

# Enable site
RUN ln -sf /etc/nginx/sites-available/default /etc/nginx/sites-enabled/default
RUN rm -rf /etc/nginx/conf.d/default.conf

# Create SQLite database directory and file
RUN mkdir -p /var/www/database
RUN touch /var/www/database/database.sqlite
RUN chmod 666 /var/www/database/database.sqlite

# Install Laravel dependencies
RUN composer install --no-dev --optimize-autoloader

# Set permissions
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache /var/www/database
RUN chmod -R 775 /var/www/storage /var/www/bootstrap/cache
RUN chmod 666 /var/www/database/database.sqlite

# Create .env if it doesn't exist and ensure SQLite configuration
RUN if [ ! -f .env ]; then cp .env.example .env; fi

# Ensure database configuration uses sqlite
RUN sed -i 's/DB_CONNECTION=.*/DB_CONNECTION=sqlite/' .env
RUN sed -i 's/DB_DATABASE=.*/DB_DATABASE=\/var\/www\/database\/database.sqlite/' .env

# Generate application key
RUN php artisan key:generate

# Run database migrations
RUN php artisan migrate --force

# Cache configuration
RUN php artisan config:cache
RUN php artisan route:cache

EXPOSE 80

# Start both services directly
CMD sh -c "php-fpm -D && nginx -g 'daemon off;'"