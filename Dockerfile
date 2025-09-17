# Use official PHP 8.2 image with built-in FPM
FROM php:8.2-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git unzip curl libzip-dev libpng-dev libonig-dev libxml2-dev \
    npm \
    && docker-php-ext-install pdo_mysql mbstring bcmath zip exif pcntl

# Set working directory
WORKDIR /var/www/html

# Copy project files
COPY . .

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Install Node.js dependencies & build Tailwind
RUN npm install
RUN npm run build

# Fix permissions
RUN chown -R www-data:www-data storage bootstrap/cache
RUN chmod -R 775 storage bootstrap/cache

# Expose default HTTP port
EXPOSE 8000

# Start Laravel PHP server
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
