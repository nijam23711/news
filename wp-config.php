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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress11' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '|j>hjb5>Mv&:~;hw  q/~]o_<nMnXp?=4!)HZh)a*2xc?o+UqF.t!^Me?IH56bo!' );
define( 'SECURE_AUTH_KEY',  'iWCzAg`BBkJ$@=GVD5y@Ga;THe2O$^ePE!3Kr3 L*C1sG}?131PGWTy8qrWa~M%]' );
define( 'LOGGED_IN_KEY',    '[Ej? *VUj@t+u[l+fsxvN$eSG[GfUDBSk7~9wda;IBK>hWga+2Hm=}a~I[;Dbp4#' );
define( 'NONCE_KEY',        '#k2B-ZGdef@e{z :6+C}#T<,bGt!6j@KOnefy/nZ?p?pKFcG:J/nPafGF$ooAWJv' );
define( 'AUTH_SALT',        'o^3Cfy&QS#_c>mN_$$B-A%4p$>/oT9Ll?j9{)]=kPXz)^rZ=Ck6Y14>nHcbAYEIF' );
define( 'SECURE_AUTH_SALT', '&B)?P{kAO|Psvw^gQ}+K@T/fJ@A*.?C: ozarm6W(-u9Ms26|K4}~s>=L:~ep-!&' );
define( 'LOGGED_IN_SALT',   'cwo&#F#t!kgqiK$U:ngl*Nn-CF_xxuS?DA,Xl3*tfo.LD%N68dH,7MqHWB<)y-{I' );
define( 'NONCE_SALT',       'zD<h.sC.(O~v~m@D_m)wS_G6*vLh*8TP-^WBI:U^hsMZ<6`y:0$?U3~DHv,j ZKC' );

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
