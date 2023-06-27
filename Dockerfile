# Utilizar una imagen base de PHP con Apache
FROM php:7.4-apache

# Variables de entorno para configurar la base de datos de WordPress
ENV WORDPRESS_DB_HOST=prueba2-instance-1.c0p67o0eorpd.us-east-1.rds.amazonaws.com
ENV WORDPRESS_DB_NAME=mybasededatos
ENV WORDPRESS_DB_USER=admin
ENV WORDPRESS_DB_PASSWORD=Duoc.2023

# Instalar extensiones de PHP requeridas por WordPress
RUN docker-php-ext-install mysqli && \
    docker-php-ext-enable mysqli

# Descargar e instalar WordPress
RUN curl -o /tmp/latest.tar.gz -SL https://wordpress.org/latest.tar.gz && \
    tar -xzf /tmp/latest.tar.gz -C /var/www/html --strip-components=1 && \
    rm /tmp/latest.tar.gz && \
    chown -R www-data:www-data /var/www/html/

# Copiar archivo de configuración de Apache
COPY apache-config.conf /etc/apache2/sites-available/000-default.conf

# Copiar el archivo wp-config.php personalizado al contenedor
COPY wp-config.php /var/www/html/wp-config.php

# Habilitar el módulo de reescritura de Apache
RUN a2enmod rewrite

# Exponer el puerto 80 para acceder a la aplicación web
EXPOSE 80

# Iniciar el servidor Apache en segundo plano al iniciar el contenedor
CMD ["apache2-foreground"]
