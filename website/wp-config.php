<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'rucatiri_db');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '{R4 HQD--kuq $w|7Mj0xo}rg-SS-6YQlyG~MgAa:K(peKKn5JZ#nN:>;<w7%]OL');
define('SECURE_AUTH_KEY',  '3 0(]V*hm|i!E;xc``wv*J-ZN.sD-?<+_.5a9L&4q)hq,K&)qF4wHPPa~mj%V55^');
define('LOGGED_IN_KEY',    'o <]`o_zF#<x_>r8L(mHs-nAD j,U0oM+xmCBr!RZJ2EYjlfDp7@oMFq}FW%iQ9g');
define('NONCE_KEY',        '()j:-v4_2>~{VFDsR.*+yh-R9CHQ:G5D|XQR;+2QEW.A!k/k`54,`q+C0I|M9Yi~');
define('AUTH_SALT',        '1Xc>XqNTf$n2<vf3FGAQN/l#5/&3]^-UL.JA}:X (Z}-rghMpJ6N*3d<w/67|xd#');
define('SECURE_AUTH_SALT', 'X2r??1LOd,[d|V!(sKK$GrkeL(l{8&Yl(R.k^|<p;~l*eQLKgRH+_U  ~Ic|z|wL');
define('LOGGED_IN_SALT',   'MKqkL>_ELPi>(~C79j1A>/ZDJpEZKU%#}q1PqULY^_~G<B!`-wM}Au%h^1Y(UXGc');
define('NONCE_SALT',       'm.=w? |,U3c(+%XPBV~2xjLC)CcyY[vH`-m:95!;NQ=2mpcR_/~WQ-_WwX6G9Ek*');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'rtmm_';

/**
 * Idioma de WordPress.
 *
 * Cambia lo siguiente para tener WordPress en tu idioma. El correspondiente archivo MO
 * del lenguaje elegido debe encontrarse en wp-content/languages.
 * Por ejemplo, instala ca_ES.mo copiándolo a wp-content/languages y define WPLANG como 'ca_ES'
 * para traducir WordPress al catalán.
 */
define('WPLANG', 'es_ES');

/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

