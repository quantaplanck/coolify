# Base PHP image
FROM php:8.2-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git curl unzip npm libzip-dev libpng-dev libonig-dev libxml2-dev \
    && docker-php-ext-install pdo_mysql mbstring bcmath zip exif pcntl

# Set working directory
WORKDIR /var/www/html

# Copy entire project
COPY . .

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Install Node & Tailwind
RUN npm install
RUN npm run build

# Permissions
RUN chown -R www-data:www-data storage bootstrap/cache

# Expose port & start server
EXPOSE 8000
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=$PORT"]
