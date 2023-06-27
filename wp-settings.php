Archivo que se encarga de cargar y configurar todo lo necesario para que WordPress funcione
<?php
#Definimos el nombre de la base de datos de WordPress.
define( 'DB_NAME', 'mybasededatos' );

define( 'DB_USER', 'admin' );
define( 'DB_PASSWORD', 'Duoc.2023' );
define( 'DB_HOST', 'prueba2-instance-1.c0p67o0eorpd.us-east-1.rds.amazonaws.com' );
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

define( 'AUTH_KEY', 'Duoc.2023' );
define( 'SECURE_AUTH_KEY', 'Duoc.2023' );
define( 'LOGGED_IN_KEY', 'Duoc.2023' );
define( 'NONCE_KEY', 'Duoc.2023' );

$table_prefix = 'wp_';

define( 'WP_DEBUG', false );
define( 'WP_MEMORY_LIMIT', '64M' );

if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

require_once ABSPATH . 'wp-settings.php';
