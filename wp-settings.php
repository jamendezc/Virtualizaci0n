#todo lo que este con * se debe cambiar

<?php
#Define el nombre de la base de datos que se creaste por linea de comando.*
define( 'DB_NAME', 'mybasededatos' );

#Define el nombre de usuario de la base de datos.*
define( 'DB_USER', 'admin' );

#Define la contraseña del usuario de la base de datos.*
define( 'DB_PASSWORD', 'Duoc.2023' );

#Define el host de la base de datos.*
#En este caso, se utiliza 'punto de conexion instancia RDS' 
#Para indicar que la base de datos se encuentra en el mismo servidor que WordPress.
define( 'DB_HOST', 'prueba2-instance-1.c0p67o0eorpd.us-east-1.rds.amazonaws.com' );

#Define el juego de caracteres utilizado por la base de datos.
define( 'DB_CHARSET', 'utf8' );

#Define la configuración de ordenamiento de la base de datos. En este caso, se utiliza el valor por defecto.
define( 'DB_COLLATE', '' );

#Estas líneas definen las claves únicas utilizadas para mejorar la seguridad de WordPress. *
define( 'AUTH_KEY', 'Duoc.2023' );
define( 'SECURE_AUTH_KEY', 'Duoc.2023' );
define( 'LOGGED_IN_KEY', 'Duoc.2023' );
define( 'NONCE_KEY', 'Duoc.2023' );

#Define el prefijo de la tabla de la base de datos de WordPress. El prefijo predeterminado es 'wp_'.
$table_prefix = 'wp_';

#Define el prefijo de la tabla de la base de datos de WordPress. El prefijo predeterminado es 'wp_'.
define( 'WP_DEBUG', false );

#Define el límite de memoria para WordPress.
define( 'WP_MEMORY_LIMIT', '64M' );

#Define la ruta absoluta de acceso a los archivos de WordPress.
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

# Incluye el archivo 'wp-settings.php', que carga la configuración principal de WordPress y realiza las inicializaciones necesarias.
require_once ABSPATH . 'wp-settings.php';
