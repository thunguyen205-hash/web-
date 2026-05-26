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
define( 'DB_NAME', 'tt43' );

/** Database username */
define( 'DB_USER', 'tt43' );

/** Database password */
define( 'DB_PASSWORD', 'dK6NYZT7Xz25EKFbjvF0' );

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
define( 'AUTH_KEY',         'z|Xk.xz Ng~.Zvo=44nS6}TsNP#7QNWwOzK*8(^p7H@R(%h*9c0oxlI?Qkcz7ojs' );
define( 'SECURE_AUTH_KEY',  'nXjE-Q&0^ytU*,PRfSn==lpr 3X^<]cRv!`5sEa:78(?jbuuI#^k56i5xF(O^kCf' );
define( 'LOGGED_IN_KEY',    'MV&#8fb+<Jq:KwDgs3*248L6C2;Hb,#ODG.<FO}F*29C9p }2@Y)=v-e9E$xPjJu' );
define( 'NONCE_KEY',        'z7Eju-I/)zV^8(jTY]!Z%h]+iYtO.YWMPL?<s3+xZh_#)_FfYOheV?3$u2<9S%QX' );
define( 'AUTH_SALT',        '{qEgD+&&eHdeCf=K28r%gMgd9]:?#4tiAxwk/pwy)T6wxC_`-5wDgECYm~w3u=cT' );
define( 'SECURE_AUTH_SALT', 'ATdF~n?Y.X9~}e1#bD8P*?U-w[!n73L->Wqx.ZU:SO5s0;sSUA^w &jnmLKj]=%x' );
define( 'LOGGED_IN_SALT',   'hUA/!D@Vc2iK4Za|AY 9E4P[8,/]pRRhS:~Cg+gR%0<&{7ne_2h[? -r@,Y6{mHW' );
define( 'NONCE_SALT',       '!.slsW:~(8x<cXWZt.sFd0Uc.Kc#oHrO/<SpU3j|YobMH$^S0;oYs^aSqy5#0Z<!' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
define('FS_METHOD', 'direct');

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
