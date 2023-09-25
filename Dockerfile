# Use an official PHP runtime as a parent image
FROM php:7.4-apache

 

# Set the working directory in the container
WORKDIR /var/www/html

 

# Copy your PHP application code into the container
COPY . .

 

# Install any necessary PHP extensions and dependencies
RUN docker-php-ext-install mysqli pdo pdo_mysql

 

# Expose port 80 for the Apache web server
EXPOSE 80

 

# Start the Apache web server when the container runs
CMD ["apache2-foreground"]
