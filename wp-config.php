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
define( 'DB_NAME', 'evently' );

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
define( 'AUTH_KEY',         '4u3exJ&{f3n!/OEuE;9+H?6GHl<q8i?J6if%%vW5t]YBDl[bw~V7[pq6qT&PV.1j' );
define( 'SECURE_AUTH_KEY',  '&pe:u_9x;*:7J%1pV+*bw&S.wT5j.4?3S`M)6hZ?imJ34x+7b[!09fQuu,70X5k5' );
define( 'LOGGED_IN_KEY',    'wJ7(4h#v<?PwO;vQ1%#e&c/EYq|a6]Ci0#-fMio.*_mlx7RP7tP0q,iVo^5^a!fV' );
define( 'NONCE_KEY',        'Cjv9:8)|=Sfw.sLv4-K~ta.O)_cy(+AIRt4M+%+fo8Okx<k{KEWn:X]A~!;ieV<y' );
define( 'AUTH_SALT',        'S;F!/f2nyzijHMk4C1D0huU0N+!LBqPR^_oXSYg?]uSz40L$Sg;SN*n;i]==FcJ2' );
define( 'SECURE_AUTH_SALT', '+5CT5#YBnFB@sd] (5T:;Lp6Hsxgh_UCLGe{dl<x|v_kR=%~s8u(NEf WU- iUXR' );
define( 'LOGGED_IN_SALT',   'M9$xW]n4WG-E5`d#Atnsf;X0Mh)Y^h{u0qKgv&qcqi $A@p$wzN19Z%:mcc0yMY$' );
define( 'NONCE_SALT',       '[B{MYc,GcIHpYi~)avw.?^M%hD1Ua[s61d]CvwO@GhB6*n9y-0f*mV<N]P:XS[/7' );

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



define( 'SURECART_ENCRYPTION_KEY', 'wJ7(4h#v<?PwO;vQ1%#e&c/EYq|a6]Ci0#-fMio.*_mlx7RP7tP0q,iVo^5^a!fV' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
