# --------------------
# Base PHP + FPM image
# --------------------
FROM php:8.2-fpm

# Install system dependencies & PHP extensions
RUN apt-get update && apt-get install -y \
    git curl unzip libpng-dev libzip-dev libonig-dev libxml2-dev \
    nginx npm supervisor \
    && docker-php-ext-install pdo_mysql mbstring bcmath zip exif pcntl

# Set working directory
WORKDIR /var/www/html

# Copy project files
COPY . .

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Install Node dependencies & build Tailwind assets
RUN npm install
RUN npm run build

# Set permissions
RUN chown -R www-data:www-data storage bootstrap/cache

# Remove default Nginx config
RUN rm /etc/nginx/sites-enabled/default

# Copy custom Nginx config
COPY nginx.conf /etc/nginx/conf.d/default.conf

# Expose port 80
EXPOSE 80

# Start supervisord to run PHP-FPM + Nginx
CMD ["/usr/bin/supervisord", "-n", "-c", "/etc/supervisor/supervisord.conf"]
