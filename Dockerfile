# 1. Base image with PHP + Composer
FROM php:8.2-fpm

# 2. Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    curl \
    npm \
    libzip-dev \
    && docker-php-ext-install pdo_mysql zip

# 3. Set working directory
WORKDIR /var/www/html

# 4. Copy composer files and install dependencies
COPY composer.json composer.lock ./
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install --no-dev --optimize-autoloader

# 5. Copy package.json and install Tailwind
COPY package.json package-lock.json ./
RUN npm install
RUN npm run build  # compile Tailwind

# 6. Copy app code
COPY . .

# 7. Set permissions
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# 8. Expose port and run server
EXPOSE 8000
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
