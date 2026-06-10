#!/bin/bash
set -e

# Run storage:link
php artisan storage:link --force

# Check if SQLite database exists, if not create it
if [ "$DB_CONNECTION" = "sqlite" ] && [ ! -f "database/database.sqlite" ]; then
    touch database/database.sqlite
fi

# Run boot scripts
php artisan package:discover --ansi
php artisan optimize

# Run migrations
php artisan migrate --force

# Execute the CMD from Dockerfile
exec "$@"
