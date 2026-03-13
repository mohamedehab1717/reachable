#!/bin/bash

# Install dependencies
composer install --no-dev --optimize-autoloader

# Clear caches
php artisan optimize:clear

# Run the Laravel server
php artisan serve --host=0.0.0.0 --port=$PORT
