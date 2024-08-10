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
define( 'DB_NAME', 'BlogWebsite' );

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
define( 'AUTH_KEY',         'FRd:Kv!y2ai?j=(S||1R**_^;n%.jwBxPc5s8Glz)Ce/UUN:~/sY0elR[B@2a]T@' );
define( 'SECURE_AUTH_KEY',  'JjODplVR#<##XU7a4CXKsrc[FUi9Zfh!{gL3]AN5@]af@J@$+a0?.WJ!_)rAcf$T' );
define( 'LOGGED_IN_KEY',    '!|jF24hUAGIDC0:]I/;e?Nh;/`ue;Y;xyJe}d=OP7tY5Ue`4/KU9Y]r%7KnM=0=S' );
define( 'NONCE_KEY',        '<u/|uj-m/LGBKuj@ KLJ$h03MfpQz%s/_Y_09~,bZzHrPU<Sg?M2soOF.~k*we7Y' );
define( 'AUTH_SALT',        'wE{i*eUtuoHhu{+H4(ONr4cK<+/5A08pd%$i XG07@ez+$hizaI~$6`~*K@l*HhP' );
define( 'SECURE_AUTH_SALT', 'yO!e.@hs4f{w9VXnS(];:`/n A:)d@+TCvOe`@SEc@w Oj*r%k;2|yEtb^$!P7IX' );
define( 'LOGGED_IN_SALT',   'bTT](u0I%CftGHnN3_~,}5glGdx E>R?ME8R;JJx4/*bNO?Uv+~jdcA6=Zo/U=(J' );
define( 'NONCE_SALT',       'Kv9TAKn!/pQ!V2X3?A$s)Sgx[+(]HW4hPMx:,-^y(2Y^vub+q=P7v%kh$6*0J}.(' );

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
