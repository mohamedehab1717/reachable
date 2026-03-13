#!/bin/bash

# Exit on error
set -e

# Install dependencies
composer install --no-dev --optimize-autoloader

# Ensure sqlite database exists if needed for fallback
touch database/database.sqlite

# Clear caches
php artisan optimize:clear

# Run migrations (force for production)
php artisan migrate --force
