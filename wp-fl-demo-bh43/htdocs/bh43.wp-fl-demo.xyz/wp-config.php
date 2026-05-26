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
define( 'DB_NAME', 'bh43' );

/** Database username */
define( 'DB_USER', 'bh43' );

/** Database password */
define( 'DB_PASSWORD', 'bTtUbVT5AKy332C6ncuA' );

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
define( 'AUTH_KEY',         'r2p&aXk0ie}0@C=kD5MD$>Our=G]u1Xt{p1t@RVP+so2^lZXhDeU!>va}@!zdg<Q' );
define( 'SECURE_AUTH_KEY',  'D<+,E@6V{uT#eE!_*%p|HQ/A6pZrbeTRi7h+o>QFfWr,e/1!u*]R;r#OA{;80q+,' );
define( 'LOGGED_IN_KEY',    'pE=a8*UpRW+gd=aN<ClWp1qHKKf;bjLp}GEmr#, uaCTT0;Ew@Vr6cm~9fN(j]4l' );
define( 'NONCE_KEY',        '/#f|?,DiUPg&kFxq-z@yrlQep_;rct&M_KN_<9$jE7l5<3@4HAa6:p:2T7(hf;E<' );
define( 'AUTH_SALT',        '^NhDdZz q~i{Nv2}dj=?@)Ya=T+6qzo+~3>VoiWU~^cd5nq+!nx?u[Bq2Lza^K:!' );
define( 'SECURE_AUTH_SALT', 'aivA^ fo~KZ_ME&c.^:hqn7Kou}_CLA=7@wfxwd/?F`I$p<JoO9BT}_T.Md;Q99r' );
define( 'LOGGED_IN_SALT',   ';+-sRYAJ-Fk- evou<IxE3{SExP}]u3=(Od/]9&H~qYpj*|_)8$L9Ba$X>V*;I6L' );
define( 'NONCE_SALT',       'K{`a:F~s5xx# t;0!%:6gl){tc=WY_IcIE|h>)J];%i&<Idz0aSaWb9tD)v6x#=u' );

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
define( 'WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */

define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
