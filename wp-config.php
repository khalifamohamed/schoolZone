<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'schoolZone' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Tr*G;,1G`e*P=r[p8eG7fV}A^O1YAP5w>31.P]5r~p2Varcnq(9H9g&[aQwkaol$' );
define( 'SECURE_AUTH_KEY',  'Cb}z;|]~uG!<SEo@}QAU``fOsagw,{WKf|MgB]>[Ek},a 1,7k%B t*/DL,^2e#6' );
define( 'LOGGED_IN_KEY',    'I7Hg20bID3,y*vHsALYsm|-)Gq49ubk@C[P]9K:V6>)Ybr+kSr,o>oT,4O]0f8Oi' );
define( 'NONCE_KEY',        'j)K2!AmN5W#.ijmW/rFkAz+G6P!U&U1R*~B?/gK?gyuPn<+Q@qi.f:Yk:Tjmh*]=' );
define( 'AUTH_SALT',        '5Ac%93qkZnP#4H$|?#H9?l++1F_&Uoe=5>Nt)fU(fwhPdW ;:wM8}<,QBIH+>HeK' );
define( 'SECURE_AUTH_SALT', 'q?[VIHg,SRPxf=[ffRib`{~~l HqoNW+[#Ht7Eg6elVS9;bM#,k6yNhBN^8Rc1qO' );
define( 'LOGGED_IN_SALT',   'dM2Ku!gSpIwhVp:!7f2@~z7,cBH,3)hcX9Q^;>B+T6A/sR =>#zo8wvc^/L&<sVB' );
define( 'NONCE_SALT',       'fx99RfJuUt?o3~Zac+oIzc#B7 #ML[@7qPyE{nS?tDZ~vkD7L9Ai/,^pZ5<^kcKx' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
