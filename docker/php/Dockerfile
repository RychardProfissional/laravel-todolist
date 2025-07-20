FROM php:7.4-fpm

# Instala dependencias
RUN apt-get update && apt-get install -y \
    git unzip curl libpq-dev libzip-dev \
    libpng-dev libonig-dev zip bash \
    && docker-php-ext-install pdo pdo_pgsql zip mbstring
    
# Instala Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Copia Node.js e NPM da imagem Node.js
COPY --from=node:18 /usr/local/bin/node /usr/local/bin/node
COPY --from=node:18 /usr/local/bin/npm /usr/local/bin/npm
COPY --from=node:18 /usr/local/lib/node_modules /usr/local/lib/node_modules

# Copia aliases para dentro do container (sem depender de volume)
COPY docker/php/aliases.sh /etc/profile.d/aliases.sh
RUN chmod +x /etc/profile.d/aliases.sh

WORKDIR /var/www
