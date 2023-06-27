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
define( 'DB_NAME', 'online_store' );

/** Database username */
define( 'DB_USER', 'dbplab' );

/** Database password */
define( 'DB_PASSWORD', 'db123' );

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
define( 'AUTH_KEY',         'zM(Q2qxal+%d;*8-VF3ud&olt>~u=UR;-b>?Bk>(JGJnP>2a*vI^D;`C5!zAy;H$' );
define( 'SECURE_AUTH_KEY',  '1oA4j{q&]n Q,3KY&JHq]Lf/DP`2/:v1O}cj.UFX,1AL01*~Vo47QD?%[Oz<]@fm' );
define( 'LOGGED_IN_KEY',    'MPc9qqVi0hpsX{exHZJ#LE9Cuc{-9N+:^0vy qz08foL3qRnX[yDMcCI?$:@4[);' );
define( 'NONCE_KEY',        '%G}_/U]&Bb0JuLIuaKg.nWlqwS.OAP[Ng=xfmCSQb<M53<`av-/^PbjA+7v2K}6m' );
define( 'AUTH_SALT',        'F6tk>nXp%-$!e@bG7H)NA#=5g<|Egp7#%UQQ%>#S~;jc+e5Bv//bp7Nt?ga#6E_)' );
define( 'SECURE_AUTH_SALT', '[pg?Y=>]`s=9*U&&yPt)Bo@z<Lv|{-,YteQqf?K^S3d7]XG4R$8wQino,%h(.G^:' );
define( 'LOGGED_IN_SALT',   'sICf]=dqiY2[e<5Pa[ m+q8J+7F3 locxpMR2<_Rt]%:MMej8<6OiJLZ^9:4zABH' );
define( 'NONCE_SALT',       'JZ5orx<g&eOTx#>2W2RkTb`%?#1soP7Qa9gd$qsj3j:R:13WRH;h@I(L!/Q~j#};' );

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
