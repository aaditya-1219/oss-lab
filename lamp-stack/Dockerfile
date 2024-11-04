# Use the existing image as the base
FROM mattrayner/lamp:latest-1804

# Copy the PHP files into the appropriate directory in the container
COPY index.php /var/www/html/index.php
COPY db.php /var/www/html/db.php

# Set the working directory (optional)
WORKDIR /var/www/html

# Expose port 80 if necessary
EXPOSE 80

