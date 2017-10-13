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
define('DB_NAME', 'wordpress');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY', 'K$oQ#aLK+O%~&5p#{orU;VLp{$z=ez0dwI<h@+ozvG1@V^*w 8_c.aX`7m3~eLkE');
define('SECURE_AUTH_KEY', 's``L(.nDLm9VivBRRDO@ZwQ8?F*%|aK>RNm$byNH9>1H}:(8qgK8OrWrQgl&}z8/');
define('LOGGED_IN_KEY', 'uZE`CvVp(t]hFzL~h)r-%gjJmRS!EDcAH% lnsPa{Lz(WdP+21HkJ91Bk~T0/$M!');
define('NONCE_KEY', 'FyC&=pD<T:Pv$2Nrvo/`r:8geE4!JJEKNnE1Bb2]3pE& A{>I:==h;qvr_)m7/=g');
define('AUTH_SALT', '.EJY,hJjE]!8Uk~=1pQa0]gU9]=5up/SQI*7gd.rlo0VmiFZc{u$MT>}D|4A5fL:');
define('SECURE_AUTH_SALT', 'Fo:+pXB;}_WrzIs.p.qjP,nP,;/A~iITj-1-dG1a+C}0(0$tT9AF]hHrU~x>k,9 ');
define('LOGGED_IN_SALT', '!{sB)/lBT^{E4R~{ZlAfjsIPk>[zyxrXk`E[hY<JMKQ+>TtI^V]/c|@^2y TJ(Gw');
define('NONCE_SALT', 'N7Y|<Ei]m?Sc!}H@V{q13!RgGvu2RKJ@UI #IQ()aMcn FBCPsF*Ai5E*FT7dW]n');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


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

