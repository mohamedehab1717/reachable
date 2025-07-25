# 1. صورة PHP
FROM php:8.2-cli

# 2. تثبيت الأدوات والإضافات المطلوبة
RUN apt-get update && apt-get install -y \
    unzip \
    git \
    curl \
    libzip-dev \
    libpng-dev \
    libonig-dev \
    && docker-php-ext-install zip pdo pdo_mysql mbstring

# 3. نسخ Composer من صورة جاهزة
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# 4. تحديد مكان الملفات
WORKDIR /app

# 5. نسخ الملفات
COPY . /app

# 6. تثبيت المكتبات
RUN composer install --no-interaction --prefer-dist --optimize-autoloader



# 8. فتح البورت
EXPOSE 10000

# 9. تشغيل السيرفر
CMD php artisan serve --host 0.0.0.0 --port 10000
