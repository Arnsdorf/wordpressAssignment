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
define( 'DB_NAME', 'wp_assignment' );

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
define( 'AUTH_KEY',         'OHSs&EX7UQz34#ns)Zpww8.c=>/?~8!7tN8yIKRc;:#l?H{j[dMEMTfjs,76n+y9' );
define( 'SECURE_AUTH_KEY',  '95tM7.rw54`73M2Nde1TO),1%5EP~^;vE8Z5 25ldtuK%1?CEVt4L@bTl7aT(NU.' );
define( 'LOGGED_IN_KEY',    '233v6K&!cA?jk_[&|aw*;^&y]!!i4@=O*l0|H/hArL8mS3&H0:r-B%qk`a>u#B]R' );
define( 'NONCE_KEY',        'GIWC_rxe *JmPhNURA_wL|bEz4_?}#LXg*l$N&nACD5!v+1TuRf}k%Sm>q[~-S@Q' );
define( 'AUTH_SALT',        'DyicEvTjvM?OGqBLmbqcA);V?0&Q<9BsG{[IbXD`.]A5<6Yv`O+50{cL}/Y@@ylD' );
define( 'SECURE_AUTH_SALT', 'Z>yepF@ebt5?S/2R7~]F;WfbP|c35u<,Qd<?klpmOg`lu7i9Hk|3h1D/j4Y-EaRx' );
define( 'LOGGED_IN_SALT',   'kC8s0.^zkTY6z%Bh;X2;P%4mpw+v4`|<]J=w3Tf; 4cjBq_NJT*&Du[1^Di.Vw*o' );
define( 'NONCE_SALT',       '(o@$2b 2jm2J4~TCoXx-91TdhIb]$aaS 4st[MR:1TcshaA6~%M=G?BUx|F=!TnN' );

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
