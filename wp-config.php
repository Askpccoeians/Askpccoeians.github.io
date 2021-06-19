<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'main2' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '`tON1MMs-N+JtPd>~|>j^9I^0)lioIY/L$#;]g/M3LOZ=nHpRAeMT;&uu*1.kd`a' );
define( 'SECURE_AUTH_KEY',  'tV7>8Dv=jfuEri!`jKAPN@=J9fo<VXu.l%sH}fV@A_a)8MFcd/HNaPo}tMH)`0FV' );
define( 'LOGGED_IN_KEY',    '3&<[06AEj,Zuwt&rg$^G~NVXbc)I&wkUWg%#IyjkNVK1YA4T*#,^Vo&#Rc1mD[`6' );
define( 'NONCE_KEY',        'X~;y<?]jG)FDNu2z 2>^7]/mhT,)eJru?]tX|2vj3,J>y7?rkNKHC_Z{}n3LolsG' );
define( 'AUTH_SALT',        '5GW!<tY}mlseH+f7&6pmv<7C}S^$xzj,dzx(CeRW9^VE`Q^Sb2At*w,zhEy5L^+7' );
define( 'SECURE_AUTH_SALT', '`dk&!S95L4P2?Y+Cc!i7} Z%gE[CkGl?WRqiYa1@hD3`Xr|cYC5oApi!t0]eU zs' );
define( 'LOGGED_IN_SALT',   ' i`?v]|-pySnXkhR*~`2;Il2]WY}n,_9S{7.AQfffuoXF#-^}_Ukmb$2]jL-G&7j' );
define( 'NONCE_SALT',       '}T3xjp|^l]F?0M0|=kosfwaRFS.pv>~OMMScFa_b~tEN`/SbnDgHACF5 $G%Ky;D' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
