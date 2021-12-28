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
define( 'DB_NAME', 'jsblogger' );

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
define( 'AUTH_KEY',         'z>{]}o~~Sxo/2bf2qn7-*Ytc;._arjk^?%$,Ff~MBLD@dN!Vs|Y6OE*~5Y#FcW][' );
define( 'SECURE_AUTH_KEY',  'bj9W=-=itecf6Rbj|WZ}g!!#n+f7RHX*vYZuXfIo6]!^UlO3OV,%j%hGKfR#8M5x' );
define( 'LOGGED_IN_KEY',    '^PH8cvUQr01lkyX2?}w}$.r~.4_z%K=_ZEFs3&*qyK0|sqdMZLkRAiPGn,)C^U4A' );
define( 'NONCE_KEY',        'h#`? yOWEoLilZMd(br``A4|/ |wT=,rvQ{nLY5Yz-UBp626$]y=L|9SbtKz6!o`' );
define( 'AUTH_SALT',        'NVt:.WAB^qV-!8Q;USB?sLA9#1qRf7QDMN?HUi/q97B_LfMfR/X3~ah0EAt*Fcph' );
define( 'SECURE_AUTH_SALT', 'EjBTO|`QtO^Dc.`Xq9@ OsiL0_J`E$0+GKwYpUjDD%1Typts9@oz:]tA5z4!@lA|' );
define( 'LOGGED_IN_SALT',   'wVvp@T3<[R8`s&:ZtomLU}T`MZhG}0^VZyg7^_vl`>;k`zhQ5#INIafQqqP)B}bX' );
define( 'NONCE_SALT',       'ICrFT89MD(;YYm|@[>d.vGmvYA#4!^ux:2:F Q]pz8XpZM<bUdTebA?aZomdJ[nj' );

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
