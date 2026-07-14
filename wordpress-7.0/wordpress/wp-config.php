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
define( 'DB_NAME', 'wordpress_sv' );

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
define( 'AUTH_KEY',         ';&tI6]h|$g8x*}0Anf$`EZ] 3{dAi$LZ.#sc<K+{K2PVtK _<Z:Aid83H(5tkWDN' );
define( 'SECURE_AUTH_KEY',  'KtA<FJ|M$zeFN_,E<wp5L4,15F2tPZIm{A?:V0<{K>&eWmx@WzXNY<<ZvZ;[wK0X' );
define( 'LOGGED_IN_KEY',    '!1]eSdl1fVGC`*@H==&)Nx+ASkN-1c7D!3UzL}hp8~2@F10<@IUbTXD>,C?&:P!S' );
define( 'NONCE_KEY',        'uH!9H*d0%ScgjK0LvOJevwK/+/]U|;sPR`@b=g#5,U;dqs^1[5=~1!Gy>9qi@U/&' );
define( 'AUTH_SALT',        ':YysnNjmFM8_y3HO8Xf_{KPm ?d0Zf6:DQ>)G(y =m2JN|@jnLst1k*K;&aWhaZ(' );
define( 'SECURE_AUTH_SALT', 'Bcu)L2wja1q)uKY1c%Jg+Xcc@WX!A+F_i }3S=4vr0y+udJ#Nu:O?IgO2 ]!1.7<' );
define( 'LOGGED_IN_SALT',   '>I%_{Cp|5l.MzF+Hb%KV_2abvKaGCS>_Y,7/f+QBrjWdhZ?N<!Y{CjDvssoyB,~F' );
define( 'NONCE_SALT',       '`5+hByogjFnQ`IXQjY5 @-`q5zNHPF~K&{l>Q{.IyoMvuuv?;<xFnST%hemb!;=`' );

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
