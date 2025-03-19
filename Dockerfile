# Utilise une image PHP avec FPM (ici PHP 8.1)
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

# Définir le répertoire de travail
WORKDIR /var/www

# Copier les fichiers de dépendances Composer
COPY composer.json composer.lock ./

# Installer les dépendances PHP via Composer
# (Il est possible d'installer Composer dans l'image ou d'utiliser une image qui l'intègre déjà)
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install --prefer-dist --no-dev --no-scripts --no-interaction

# Copier le reste de l’application dans le conteneur
COPY . .

# Donner les droits au répertoire (votre application Laravel doit pouvoir écrire dans certains dossiers)
RUN chown -R www-data:www-data /var/www

# Exécuter PHP-FPM
CMD ["php-fpm"]
