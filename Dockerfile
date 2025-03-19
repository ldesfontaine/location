# Utilise une image PHP avec FPM
FROM php:8.1-fpm

# Installation des dépendances système
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    git

# Installer les extensions PHP nécessaires
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Copier les fichiers de dépendances Composer
COPY composer.json composer.lock /var/www/

# Installer Composer depuis l'image officielle
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

# Installer les dépendances PHP via Composer
WORKDIR /var/www
RUN composer install --prefer-dist --no-dev --no-scripts --no-interaction

# Copier le reste de l’application dans le conteneur
COPY . .

# Donner les droits au répertoire
RUN chown -R www-data:www-data /var/www

# Exécuter PHP-FPM
CMD ["php-fpm"]
