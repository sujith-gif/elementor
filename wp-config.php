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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'elementor' );

/** Database username */
define( 'DB_USER', 'sujith' );

/** Database password */
define( 'DB_PASSWORD', '123' );

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
define( 'AUTH_KEY',         'WQ^6SR(!Xg5w<5eJa_PgHb>3w:UK^ys1!Vo@]po}m5CNRjc.[Nb&mHiDl@Ro;Uy2' );
define( 'SECURE_AUTH_KEY',  '6*:}h8Qz)i )aAHT UTt=+{ECTx`i%`|CAxaf-^s%{1%hk!:#zV~]%ON>zf6ERs!' );
define( 'LOGGED_IN_KEY',    'SqD_0Ugfnp=zQD5{;^Ij[v&]t%!>k+18g/4sMt/9a_qX$C/QfO83!no=k+yty/<~' );
define( 'NONCE_KEY',        'VhN7*:#q^|(h2|.sXzC&vljmcHiW+sX8=W5+pc w$*{+y[6WyYSxKL{m~7{H|o>]' );
define( 'AUTH_SALT',        'reFX@!JZWABLal}S$P0Js+ Dz?Kgr<t4-xC&`  tb 5*/7FF=.}rZscW s{-j!f:' );
define( 'SECURE_AUTH_SALT', '(Vb{5Z$Pcrv}4eq{}qC#Z+Ox#^kE7[]A9/;ja0::GSN7)wKIX0RD]B@_-tMD__9A' );
define( 'LOGGED_IN_SALT',   'Im6&>5XI?h^NPJEls**L.c%8q) &WSM?~%n.p&vTJ&EpC=G&30b(J8Xi(%*=u*(0' );
define( 'NONCE_SALT',       'ltk8E}9=k}9T}EI.T}M5S6LU$>_Q0gg[b:0C* ybC<OK}U$CY*xG@cTuMPrNe  e' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);
@ini_set('display_errors', 0);


/* Add any custom values between this line and the "stop editing" line. */




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
define( 'FS_METHOD', 'direct' );