### Evaluación tecnológias de virtualización.
##### By Javiera Méndez :hibiscus:
![](https://www2.udsenterprise.com/media/filer_public_thumbnails/filer_public/ae/9c/ae9c8279-ef28-4eb0-a209-a1c6c10efd49/docker_with_aws_beta.jpg__800x600_q85_subsampling-2.jpg)

El siguiente proyecto implica implementar una aplicación web utilizando contenedores y GitHub, con la opción de elegir WordPress como la aplicación web a desarrollar. 
Esto permitirá familiarizarnos con la implementación de WordPress en contenedores y practicar los conceptos fundamentales de Docker y GitHub en el proceso.

Servicios a utilizar:
- Base de datos RDS
- EC2
- Amazon Elastic Container Registry (ECR)
- Amazon Elastic Container Service (ECS)
- Application Load Balancer

------------

### *Base de datos RDS.*
En esta parte se debe crear la base de datos que se utilizará para almacenar toda la información relacionada con el sitio web.

Ir a RDS y configurar lo siguiente: 
 
1. Método de creación estándar.
2. Opciones de motor Aurora (MySQL Compatible)
3. Plantillas de desarrollo y pruebas.
4. Elegir un nomnbre para identificador del clúster de base de datos.
5. Dejar por defecto el nombre de usuario maestro (admin).
6. Elegir una contraseña para administrar credenciales maestras.
7. Cluster storage configuration Aurora-Standard.
8. Configuración de la instancia Clases con ráfagas (incluye clases t) y elegir tamaño small.
7. Autenticación de bases de datos con contraseña.
8. Crear base de datos.

:exclamation: Lo que no salga aquí es por que queda por defecto.:exclamation:
