### Evaluación tecnologías de virtualización.
##### by Javiera Méndez :hibiscus:
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

### :pushpin: *Base de datos RDS.*
En esta parte se debe crear la base de datos que se utilizará para almacenar toda la información relacionada con el sitio web.

Ir a RDS y configurar lo siguiente: 
 
1. Método de creación estándar.
2. Opciones de motor Aurora (MySQL Compatible)
3. Plantillas de desarrollo y pruebas.
4. Elegir un nombre de identificador del clúster de base de datos.
5. Dejar por defecto el nombre de usuario maestro (admin).
6. Elegir una contraseña para administrar credenciales maestras.
7. Elegir en Cluster storage configuration Aurora-Standard.
8. Configuración de la instancia clases con ráfagas (incluye clases t) y elegir tamaño small.
7. Elegir Autenticación de bases de datos con contraseña.
8. Crear base de datos.  
:warning: Lo que no salga aquí queda por defecto. :warning:
------------

### :pushpin: *Instancia EC2 en AWS.*

Se creará una instacia con AMI tipo Linux para poder conectarnos mediante SSH en putty.

### :pushpin: *Instalación de Docker y creación Dockerfile.*
Una vez conectados en putty configurar los siguientes comandos en **usuario root.**

` yum update` #Actualizar paquetes.

`yum -y install docker`  #Instalar Docker.

` systemctl start docker`  #Iniciar Docker.

`systemctl status docker`   #Estado de Docker.

` mkdir _____ `    #Crear directorio.

` cd ______ `      #Cambiar al directorio creado.

` vim Dockerfile `    #Entrar al archivo Dockefile y pegar el codigo q ocuparás.

` vim apache-config.conf `    #Entrar al archivo y pegar el codigo q ocuparás.

` vim wp-settings.php `    #Entrar al archivo y pegar el codigo q ocuparás.

` docker build -t _________ . `  #Creación de la imagen .

` docker run -d -p 8080:80 ________ . `  #Lanzar la imagen .

### :pushpin: *Instalación de base de datos.*

` yum install mariadb105-server-utils.x86_64 `  #Instalar Mariadb .

` mysql -h _________ -P 3306 -u admin -p`  #Conerctarse a la base de datos mediante punto de conexion instancia RDS.

`show databases;` #Entrar a la base de datos.

`create database ______` #Asiganar nombre a la base de datos.

`grant all privileges on ______.* to admin` #Asiganar permisos en la base de datos recién creada.

`flush privileges;` #Confirmar cambios.

### :pushpin: *Instalación AWS CLI*
configurar los siguientes comandos en **usuario ec2-user en el directorio home.**


`curl "https://awscli.amazonaws.com/awscli-exe-linux-x86_64.zip" -o "awscliv2.zip"` #Descargar el archivo "awscliv2.zip" que contiene la herramienta AWS CLI.

`unzip awscliv2.zip`  #Descomprimir el archivo y extraer su contenido al directorio actual.

`sudo ./aws/install`   #Ejecutar el script de instalación de AWS CLI.

`vmkdir ~/.aws/` #Crear el directorio.

`vim ~/.aws/credentials` #Entrar al archivo y pegar el AWS CLI que aparece en Lerner lab.

------------

### *Creación de Amazon Elastic Container Registry (ECR)*

Aquí nos devolvemos a AWS y en el buscador ingresamos ECR lo que permitirá tener un repositorio privado para almacenar y administrar nuestra imágen de contenedor Docker brindándote mayor control y seguridad.










