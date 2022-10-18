<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_project3' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'gWKe,f6Fo-6U2Dz0;paNu1XaF5vhw32s^gnS/Jsx~?M{L^J~X`qO(@A+fHsg6[%r' );
define( 'SECURE_AUTH_KEY',  'y-U;Igdnv4Zs}TYw-jeS^dMGyms3<AL,x[~2^J9*@r4wPgj3,LsGOySa@^j#g}H/' );
define( 'LOGGED_IN_KEY',    'kyC#4DJU|f*.DO L!d:^a)/lW}qyJE2)o87;/@[H3G/<QA{5 Czk350sl!9OG;[s' );
define( 'NONCE_KEY',        '1}+Ur!l{)%_9lHD4MB^8MV{mY=y~q] -i}R/%%Mwqk8gD!Wdo3p}Ms6v=rBeNr.6' );
define( 'AUTH_SALT',        'gk%+9ypZ+Rquj  JTcab[}~-G2z2%Faf`A=}qoi>K2Me:IBs2A~)%E<KG1`/<PU#' );
define( 'SECURE_AUTH_SALT', 'GuUXc^ghWrPkv5V`f5=?tcmA0<i)tIG&ijbh6);(?&I>sw)4subO 0 ,T7`JSY3t' );
define( 'LOGGED_IN_SALT',   'P L8Q7*$;hu3G4/sBtEqpcEXF]`[Im+S^Av_h~ It?ecNy=-CZ}!GvZ~C/oe`C%1' );
define( 'NONCE_SALT',       '#KgE<X0&n;JgtB&xp#.>7D1J% f`?^rhf=>IE~hyOl~[S( D.ZWMHuAxM7fR!td-' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
