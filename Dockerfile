FROM php:8.2-apache

# Install required packages for PostgreSQL extensions
RUN apt-get update && apt-get install -y libpq-dev && \
    docker-php-ext-install pgsql pdo_pgsql

# Enable Apache rewrite module (used by the site)
RUN a2enmod rewrite

# Install mysqli extension (kept for compatibility)
RUN docker-php-ext-install mysqli

# Copy the application source code into the Apache document root
COPY . /var/www/html/

# Ensure the correct file permissions for Apache
RUN chown -R www-data:www-data /var/www/html

# Expose the default HTTP port (Render expects port 80)
EXPOSE 80
