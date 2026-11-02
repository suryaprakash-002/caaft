<?php
define( 'WP_CACHE', true );

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
define( 'DB_NAME', 'u367114761_Caaft_NEWDb' );

/** Database username */
define( 'DB_USER', 'u367114761_Caaft_WP_Admin' );

/** Database password */
define( 'DB_PASSWORD', 'HxQvwBGRFTHREH*J>d9' );

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
define( 'AUTH_KEY',         '6/=gH]mEJ[P4DJZ*hyxR|%Q3jAvPj`|K[8QK6 LttnN^<`dbAeTW>JNOrhBt#?@(' );
define( 'SECURE_AUTH_KEY',  '45GQq7rE-d*2}*chiBy@Dzw5.Da*;|x^$}xhGC/k97oTu=h?P:nUaN.jf34-@AZ#' );
define( 'LOGGED_IN_KEY',    '-lE93rbmkh6708R0`gPZ^W|Fij8NO_)ePD,-pai+$WH#iFZh9Vdpnu@XMajv6/I2' );
define( 'NONCE_KEY',        'Hl5dGmEbL-d&i6u/GE(@kf<3BG-O]!r7mzVXAB*Bn$RHTcgAT=+griL/o5r+[{oj' );
define( 'AUTH_SALT',        'Wp0!-l@JQ01FV<8e1>BM4Z?eME!5,)hbrs6Vq#3{OTSUIP28|zxw0y[)UL.%u0A+' );
define( 'SECURE_AUTH_SALT', 'm<-0P=W`:=<4eJ{Jf[sniS7mo%/O#fW)F_~jcPS3S&C9Hn:}_<22xs+J8&|UB~=4' );
define( 'LOGGED_IN_SALT',   'xfV!VeQty)CWc,/c$IL6?MR_W^0g<5&Qk(z`_.@?.qgU&h-e+4g)CFll=#h}Hlst' );
define( 'NONCE_SALT',       '2Ce{iXeK._h!m2Tq{<:fWKo4m66RVe?aP[zhDG9U7z38{{iZMJ}`gDUR9mvT7cy~' );

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

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
