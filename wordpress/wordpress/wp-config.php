<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'green_world' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'molocal' );

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
define( 'AUTH_KEY',         '7/q&%=Cu*k,O6Zdaqk:fzh+^8[O?;j)uG2lx7]SX8Ta@5pG91*0*I?+J72FN_p^U' );
define( 'SECURE_AUTH_KEY',  ')DiVgo95@aLqOU[Z/AV`jKaZR~g:d,;geAYB6rD^.j4G;g1.l(8R#Xl, $zUr8ec' );
define( 'LOGGED_IN_KEY',    '0JPNkDQ&SKa(>:[1-F*OR(;%EUF5bSpANA;o#(?7~_7t6pf*Y{=7qsWo/40a?Z1W' );
define( 'NONCE_KEY',        '+V2dU$wUDfB}ag9Uq:myaW<MWlsHOR(7W!?)<;Vbm~0U,6N4Bv5/>)g1qwR[k|nR' );
define( 'AUTH_SALT',        '<^-D*5dh&`USz59ybHbe[&l-!RlD@bl7`~epZNs$vw^.e)P8S$]_6*7I7@~`[P-s' );
define( 'SECURE_AUTH_SALT', 'v#Sg:QDQ<.b (Ehc9r=2L c,1`i^s(M4~V|3Xc)MYW>O;R0t/Ak`*ws{)V}?S1dH' );
define( 'LOGGED_IN_SALT',   ' K2p`-lAd[M%ju<agi*r XQhlmG)yq!pY}-<#w<D,|a4>7F:^a8{{oauE^1&4``H' );
define( 'NONCE_SALT',       ']~cy;+%>oWy/8;2^0Kn(9*l+<:*0/6xhc^XQt9n/XhEA2:?:)5+/c+`{IXPmu~+_' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
