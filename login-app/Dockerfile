# Use an official PHP-Apache base image
FROM php:7.4-apache

# Set the working directory in the container
WORKDIR /var/www/html

# Copy application files to the container
COPY . /var/www/html

# Expose port 80 to be able to access the web server
EXPOSE 80

# Start the Apache server
CMD ["apache2-foreground"]
