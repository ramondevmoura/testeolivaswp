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
define( 'DB_NAME', 'testewpdb' );

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
define( 'AUTH_KEY',         'b<D`kNCG=%F&Xqr/6EL=kj+J^w|TkRZx8`WAy<O*z?`*4uk-^FfaRE9-@tC|HxDj' );
define( 'SECURE_AUTH_KEY',  'LEJoO6*y3RRsz,/PPbKwEQm7q%vX%s`<sR598ELCz3d[{Eu~k ~V9;*vT!8rj]5h' );
define( 'LOGGED_IN_KEY',    'Pz]iZL>lBUc%$) P7QxVo}>!qF<Pz4EM{g:Qb*Vieh>pzPi5<)@IG{x.$m)*@rJ6' );
define( 'NONCE_KEY',        'q.)TK)S)oW;gB|<&N)08z3?|=3?kx0C272e|?XgJ/GS]*gj,3~JF>lGWd1Q>Z3jE' );
define( 'AUTH_SALT',        'H-rLpXT)<)]6d?*ied bT0BGIk@{,HZ*uKNDkkQJ4V4htX?X/;*89DT5kUWXninh' );
define( 'SECURE_AUTH_SALT', '&8$wO8eR}zOx#1!V%5.<t>(0)BEb[8b]Lub3>5ba;`m+Dh*z$-$#>U]]} 6VS5[k' );
define( 'LOGGED_IN_SALT',   'mFE0Hh>W}Qg)|~U.~.E?)i4$DD]Ut]6AQ78{eK8HnK-z?$ywFOtC-]qNw4&JgPa_' );
define( 'NONCE_SALT',       'XB3|0`mn:Rir^?/!4cua1LOZop1_qSojmmC$A:nBfM.$Q<|;m7pkUK4eY;9PmEPR' );

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
