# Utilizamos una imagen base de PHP con Apache
# Todo lo que esta con * se debe cambiar
FROM php:7.4-apache

# Variables de entorno para configurar la base de datos de WordPress
ENV WORDPRESS_DB_HOST=prueba2-instance-1.c0p67o0eorpd.us-east-1.rds.amazonaws.com*
ENV WORDPRESS_DB_NAME=mybasededatos*
ENV WORDPRESS_DB_USER=admin*
ENV WORDPRESS_DB_PASSWORD=Duoc.2023*

# Instalamos las extensiones de PHP requeridas para WordPress
RUN docker-php-ext-install mysqli && \
    docker-php-ext-enable mysqli

# Descargamos e instalamos WordPress
RUN curl -o /tmp/latest.tar.gz -SL https://wordpress.org/latest.tar.gz && \
    tar -xzf /tmp/latest.tar.gz -C /var/www/html --strip-components=1 && \
    rm /tmp/latest.tar.gz && \
    chown -R www-data:www-data /var/www/html/

# Copiamos el archivo de configuración Apache
COPY apache-config.conf /etc/apache2/sites-available/000-default.conf

# Copiamos el archivo wp-config.php personalizado anteriormente
COPY wp-config.php /var/www/html/wp-config.php

# Habilitamos el módulo de reescritura para Apache
RUN a2enmod rewrite

# Exponemos el puerto 80 para acceder a la aplicación web
EXPOSE 80

# Iniciamos el servidor Apache en segundo plano al iniciar el contenedor
CMD ["apache2-foreground"]
