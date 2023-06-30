### Evaluación tecnológias de virtualización.
##### Javiera Méndez:tw-1f33a:
![](https://www2.udsenterprise.com/media/filer_public_thumbnails/filer_public/ae/9c/ae9c8279-ef28-4eb0-a209-a1c6c10efd49/docker_with_aws_beta.jpg__800x600_q85_subsampling-2.jpg)

**FASE 1**

El siguiente proyecto implica implementar una aplicación web utilizando contenedores y GitHub, con la opción de elegir WordPress como la aplicación web a desarrollar. 
Esto permitirá familiarizarnos con la implementación de WordPress en contenedores y practicar los conceptos fundamentales de Docker y GitHub en el proceso.

##### Creación de instancia EC2 en AWS.
En esta parte se debe crear la instacia con AMI tipo Linux para poder conectarnos a la lína de comando mediante SSH en putty.

Una vez conectados en putty configurar los siguientes comandos en usuario root: 

` yum update` #Actualizar paquetes.

`yum -y install docker`  #Instalar Docker.

` systemctl start docker`  #Iniciar Docker.

`systemctl status docker`   #Estado de Docker.

` mkdir _____ `    #Crear directorio.

` cd ______ `      #Cambiar al directorio creado.

` vim Dockerfile `    #Entrar al archivo Dockefile.


```
FROM php:7.4-apache

ENV WORDPRESS_DB_HOST=prueba2-instance-1.c0p67o0eorpd.us-east-1.rds.amazonaws.com*
ENV WORDPRESS_DB_NAME=mybasededatos*
ENV WORDPRESS_DB_USER=admin*
ENV WORDPRESS_DB_PASSWORD=Duoc.2023*

RUN docker-php-ext-install mysqli && \
    docker-php-ext-enable mysqli

RUN curl -o /tmp/latest.tar.gz -SL https://wordpress.org/latest.tar.gz && \
    tar -xzf /tmp/latest.tar.gz -C /var/www/html --strip-components=1 && \
    rm /tmp/latest.tar.gz && \
    chown -R www-data:www-data /var/www/html/

COPY apache-config.conf /etc/apache2/sites-available/000-default.conf

COPY wp-config.php /var/www/html/wp-config.php

RUN a2enmod rewrite

EXPOSE 80

CMD ["apache2-foreground"]
```
