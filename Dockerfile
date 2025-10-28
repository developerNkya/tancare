FROM php:8.2-fpm

# Set working directory
WORKDIR /var/www

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    libzip-dev \
    default-mysql-client \
    nginx \
    supervisor

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

# Install composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy application files
COPY . .

# Set proper permissions
RUN chown -R www-data:www-data /var/www
RUN chmod -R 755 /var/www/storage
RUN chmod -R 755 /var/www/bootstrap/cache

# Create nginx configuration
RUN echo 'server { \
    listen 80; \
    server_name _; \
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
        fastcgi_param PATH_INFO \$fastcgi_path_info; \
    } \
    \
    location ~ /\.ht { \
        deny all; \
    } \
}' > /etc/nginx/sites-available/default

# Enable the site
RUN ln -s /etc/nginx/sites-available/default /etc/nginx/sites-enabled/

# Create supervisor configuration
RUN echo '[supervisord] \
nodaemon=true \
user=root \
\
[program:php-fpm] \
command=php-fpm -D \
autostart=true \
autorestart=true \
\
[program:nginx] \
command=nginx -g "daemon off;" \
autostart=true \
autorestart=true \
' > /etc/supervisor/conf.d/supervisor.conf

# Install dependencies
RUN composer install --no-dev --optimize-autoloader

# Generate application key
RUN php artisan key:generate

# Run optimizations
RUN php artisan config:cache
RUN php artisan route:cache

EXPOSE 80

# Start supervisor
CMD ["/usr/bin/supervisord", "-c", "/etc/supervisor/conf.d/supervisor.conf"]