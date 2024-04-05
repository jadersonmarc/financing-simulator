FROM php:8.1-fpm-alpine

# Instalar dependências do sistema para extensões do PHP
RUN apk add --no-cache postgresql-dev
RUN apk add --no-cache postgresql-client

# Instalar as extensões pdo_pgsql
RUN docker-php-ext-install pdo pdo_pgsql

# Definir diretório de trabalho
WORKDIR /var/www

# Copiar o aplicativo para o diretório de trabalho
COPY . /var/www

# Instalar o Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Usar o Composer para instalar dependências do projeto
RUN composer install

# Expor a porta 9000
EXPOSE 9000

# Comando para rodar o PHP-FPM
CMD ["php-fpm"]
