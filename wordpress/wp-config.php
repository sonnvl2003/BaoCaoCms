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
define( 'AUTH_KEY',         'rLgK-3}9C%Bu*U3w1+L/d@sK:}9 %8YqUkTLd(sx.C-i&]~>J][@1(amu${~CzT?' );
define( 'SECURE_AUTH_KEY',  '!Oo+n3yyH=3Xx(E&tWTX!>I*X(Dg3?Z)N{`s8?|Y#<V]q~S<(HnmPzAZ3S]}O74T' );
define( 'LOGGED_IN_KEY',    '<1^v]/jV^$4(KH{>xnoq^VR~~wfXg=KCSP;C!b{>V3us+!Q5Yn$D2N&f|-#jB| !' );
define( 'NONCE_KEY',        'Jgmvce~L2A!L{}Cu(rsEkKOJ6,nPPnu@klXwP2@gXSQ6dd0f$KFcQ7_BM^X.E)+W' );
define( 'AUTH_SALT',        'VN/}X[LLANtE1?rl?bs&!E[CA{z5{OD7|wgmaBxE.n@a6$an}(wr{{*o>0U^dqNi' );
define( 'SECURE_AUTH_SALT', 'Q>D631tVf&*IU|s*1C=oKr4]~H+B_jRN1!(!!dT]wj};t0J)m<%|#eR~g~$aatg}' );
define( 'LOGGED_IN_SALT',   '&:n0djlh!$TXYo0V3nMe^}x4KT3X%bzJ[B}JsSu!uJz^1{H}<A_h{*X_(=/9*w4}' );
define( 'NONCE_SALT',       '&fc<DftxZCy#VSmz9eu~}HH9dWgl;JF17OY(jrcIKbZY? Fy`?^,|[]{P,@*OE5L' );

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
