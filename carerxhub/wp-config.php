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
define( 'DB_NAME', 'if0_38426290_carehub' );

/** Database username */
define( 'DB_USER', '38426290_7' );

/** Database password */
define( 'DB_PASSWORD', '9[04FI3p[S' );

/** Database hostname */
define( 'DB_HOST', 'sql303.byetcluster.com' );

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
define( 'AUTH_KEY',         'wseutbkkjgymrnjnq3n3lr63m4mjssh63j39xmmwizi7adulgq5fgppoevnyqvhw' );
define( 'SECURE_AUTH_KEY',  'ojw6tecit2uvacz4qxitqhxvorwac5sylsksfm6fmcedjahg4oxohctuct7qndbq' );
define( 'LOGGED_IN_KEY',    'wdhjt09ncr3jt0pwwbybu7zvfmzfgka9eybhmimrmwshzo8gucbtt4psp0aze4fm' );
define( 'NONCE_KEY',        'odtz3wrktusoh8cmczmxagydyslmr0giuvhyrroqe0hphwfql2ddxbfcccvzhnac' );
define( 'AUTH_SALT',        'lwagevvanbmvp4foo29eo29e9qxtkytznyl0a7jtaosiuxjg55uyaf21t6qpro7l' );
define( 'SECURE_AUTH_SALT', 'h63jwg1rahuoocyv1uutphezkcwr4lzc3xzbb6xfuccoixqkdrprqv4s3z8ipjto' );
define( 'LOGGED_IN_SALT',   'cbcvvopgqnyxmnvklzibrfahphnk9thafo0x1gzi9ecv5gut2hwyn5epu8d7ccvb' );
define( 'NONCE_SALT',       'jfropub7ooe3rfins5e6q2czzfoss48jgxlj8tbw7boira0vqpwj2hvccuahvnkc' );

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
$table_prefix = 'wpdf_';

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
