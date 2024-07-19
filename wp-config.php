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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'movie_db' );

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
define( 'AUTH_KEY',         'V%W6,}c)yl_S-fD4eigBlC,vQ:X/,lkRIRghPEJRhtxhu-NrbX(Mr0.$Uc$G+)^u' );
define( 'SECURE_AUTH_KEY',  'F%L6L?DP0dl)_`b17!cBWa5z[y$eX0p(?*-z@!7(eEe0]F-YT!pLl7BTZKk5ce(L' );
define( 'LOGGED_IN_KEY',    '9M!d9l6*.WTI2G(_AOK{+_0<?3P9L>>hXg*@:d7KDW_J.O>r=K&+Z5?v0,weci0^' );
define( 'NONCE_KEY',        '3AJ[vOs8u[yj^fd3C1X*AgZswYRQ-j+gAMOBmOx#?c7xH_sxrS.>F!8U-E5E|.ED' );
define( 'AUTH_SALT',        'IosBgmPGv94Xi9IG#ua`l=J<%[zNiR=NPZ]eb@Q`!4N&*U!~*%UoWxa@+YKa!?s`' );
define( 'SECURE_AUTH_SALT', 'oL=T_xCk{j58D;T83+sNSqN9<I(Ek19miw4OIjA}S57W`{$x9A`nwn,PmTZ_{;BM' );
define( 'LOGGED_IN_SALT',   '6Qi3n]+a~X#dN[Z`OcBG~IUUss0s(|97elBnhwxEkun4U6%]U;Qe!9VFuO^+p^=?' );
define( 'NONCE_SALT',       '@[~>zl2gzkCX=;*,Ot=/6az;/T5f=Y2xFQF(1oeH<YK w<`0bvIym=&p|fS6IaB0' );

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
