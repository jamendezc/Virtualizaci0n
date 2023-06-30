### Evaluación tecnológias de virtualización.
##### By Javiera Méndez
![](https://www2.udsenterprise.com/media/filer_public_thumbnails/filer_public/ae/9c/ae9c8279-ef28-4eb0-a209-a1c6c10efd49/docker_with_aws_beta.jpg__800x600_q85_subsampling-2.jpg)

El siguiente proyecto implica implementar una aplicación web utilizando contenedores y GitHub, con la opción de elegir WordPress como la aplicación web a desarrollar. 
Esto permitirá familiarizarnos con la implementación de WordPress en contenedores y practicar los conceptos fundamentales de Docker y GitHub en el proceso.

Servicios a utilizar:
- Base de datos RDS
- Amazon Elastic Container Registry (ECR)
- Amazon Elastic Container Service (ECS)
- Application Load Balancer

------------


###  *Creación de instancia EC2 en AWS.*

En esta parte se debe crear la instacia con AMI tipo Linux para poder conectarnos a la lína de comando mediante SSH en putty.

------------


### *Instalación de Docker y creación Dockerfile.*
Una vez conectados en putty configurar los siguientes comandos en usuario root: 

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

------------


