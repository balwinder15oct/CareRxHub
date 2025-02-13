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
define( 'DB_NAME', 'carerxhub_db' );

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
define( 'AUTH_KEY',         ' CkEX,[l0T5&,E;L}/wU$&cJj8FkGQ/6h-g(d{)/y%D`Q_,YMmJoldj$OfHve>uO' );
define( 'SECURE_AUTH_KEY',  '@CB=Jg|~jZk:Ed<+bMkjEi0M=6<ZWTVkM~&CZi-JJ3d{>Qa+CcQy](f-x?Rcu~=c' );
define( 'LOGGED_IN_KEY',    ']D)X2Y $>@iQ2N`Im{9[Irj# ME*lns#cUSKo#w=tO52r_U:@}~x/3G:X2LzZvS7' );
define( 'NONCE_KEY',        'n_;~UQ-90Bg<DP)Mx5/W*%iTZr_/&K8S:V9vJE{@(2]9mHB=dkS~lWzYfS?i)N{w' );
define( 'AUTH_SALT',        'QdfQWD(Mlu?j}NVb=s_]7s0G5F1a^;IY{Ot6^C}aSr4tI#v>Fy.zO=?9wE<_?fK=' );
define( 'SECURE_AUTH_SALT', 'AU:HYi@kx3W?JC-@k.0t|uJJgzC$RY/p/XBx/pUW57BC7p@p%b,I iQPD|{p&tAk' );
define( 'LOGGED_IN_SALT',   '=qd<jZWdH*`:@_re/f(NTmR|PF2$BBTCX?Y;tB&p[vHSDO}%hc7MB/::5eJnB|J*' );
define( 'NONCE_SALT',       'vw?%z~sHPp]~ n}F0/FS8yRXcyJ{u~v5J@cW`jPGB/6ps:rC4UZr,#s}ZdY:6!1;' );

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
