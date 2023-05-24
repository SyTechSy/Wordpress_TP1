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
define( 'DB_NAME', 'docword1' );

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
define( 'AUTH_KEY',         'f!)g5{O:*q{T6,g+U[B!}-fnf6KNn9l*3IZ@XNhy=GBUP&,xMbOume0O$k Kh(Eq' );
define( 'SECURE_AUTH_KEY',  'oo:5}7kcNNG&s?_2X`m8tO`SP+[)mj>d#Une^t2*/XCZ5-`f!4@<9ftH5l>AB=J*' );
define( 'LOGGED_IN_KEY',    '(=%0^!U;0R;bH,tu=m1Nq^ox_8Q=MzbS~kMNuFn,haZF]~y$D|v$lxRZ_LoI93L8' );
define( 'NONCE_KEY',        '@vV_U/hNy,O*).1m,fBi?0,D5x8a;80[I)^oEEWu@peQWhbk04_#:2-962hg+<OU' );
define( 'AUTH_SALT',        'm#DD,!swS~dUsy!#U3r.1Mu0XQK`cU_<0K%YHcNj;[6Iy&!:CC?u~%`tR=3U4]Gq' );
define( 'SECURE_AUTH_SALT', 'K80arm r[<0GtOfJ3y;`zxoz.@zt_TDBnhA:{&_dl)hO}yeohQoAffIYJJ|/6YX*' );
define( 'LOGGED_IN_SALT',   '5,-f6=(%PI:W@ni>3}H$+!:*5~wzihTG{-y8?P$ja -J;j5E2y,:s8t3/-Pc`kT#' );
define( 'NONCE_SALT',       'm4ji$evdU!Z~, E4R6u,u.?f279%{1j;nno@v5^BNDV-yu{3ogk&^d,wF42tl{kw' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
