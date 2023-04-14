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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'M*Qb{Mb~i;}|_lrQI5&Q$WJ=b*?2!l8J4,R/qRk*qw*JM*b[BS!/&%,tb?CxUF7@' );
define( 'SECURE_AUTH_KEY',  '(RU9dq916d4jcI*VGQK%#XviZt3`xB3P#vft9(|92lS9yEdC)w?UZol58NLMU9Jl' );
define( 'LOGGED_IN_KEY',    'nXB/=iA#.]|@(BlQ~3hiwN,q8+t=Ofv+_qY`$n!orjacaPmGPd]%i*NRtLR&w|wX' );
define( 'NONCE_KEY',        '4lhzS]l2anW;_)vsDPXC:*=ikUp#4I~p#J{/1I0UCF%K2h:E]~~H{y,sqe8nl|>q' );
define( 'AUTH_SALT',        't~jXwD*BOK%. OQy7X0QA4GH$4)/y~Yp_B?[UZhnZe=j$[!2q -|pRu7:v]p7_d}' );
define( 'SECURE_AUTH_SALT', 'oI24>/2a,7lnQ-J>e~1ItVot-$ a![y%Tz^JD?q`2F<6_f}E&v6<LS+bK+z eq*|' );
define( 'LOGGED_IN_SALT',   '%O~uX[Lx=?zx!PKj-sK)% ?)qjL1*-<@T%9`I3?tWup^aZmoi9J4~e|,v*&N7ig ' );
define( 'NONCE_SALT',       'Xy9Ou3zt}8`pDJKnWUxB{w##y$Nf0Zjzqj<#dxtnwo~D>8$8#sN+3q#cEk[YYhzT' );

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
