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

define( 'WP_REDIS_HOST', 'redis-server' );
define( 'WP_REDIS_PORT', 6379 );
define( 'WP_REDIS_PREFIX', 'dolanan' );
define( 'WP_REDIS_DATABASE', 0 ); // 0-15
define( 'WP_REDIS_TIMEOUT', 1 );
define( 'WP_REDIS_READ_TIMEOUT', 1 );

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_dp' );

/** Database username */
define( 'DB_USER', 'wordpress_user' );

/** Database password */
define( 'DB_PASSWORD', 'sandi_wordpress' );

/** Database hostname */
define( 'DB_HOST', 'mysql-server' );

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
define( 'AUTH_KEY',         '3p}Q8OcP,fq7x!BKuYiRO!I.<U/{m7Jt=J{cMs57nNrog{xE(%I<0D;?X=]$ns6H' );
define( 'SECURE_AUTH_KEY',  'HUaYUcce8bd?~b$GX:(V`a^6Xyv =)wdlSFU&5i/Y-@mb4TN2nXSKHFb;?R94a;E' );
define( 'LOGGED_IN_KEY',    'Hx+MiF19Rv}r%>75T[_Z)jcm_{}&DEAb?W*<#;zB~WGuT2Az>qeZr [m:0s3Mf1G' );
define( 'NONCE_KEY',        'I#2^&~fDcOW$sM!)r8B3<;$Mo<U`%DCO4dHb%6S9%R(:>+#uKMM[D@(_{j{po)b.' );
define( 'AUTH_SALT',        '}!:232-*2)eDVEJ*M`w67rl~a?)0pF$F#WZUJD|9]CQ5xSGi#JE/W2ei`Xx/O/k_' );
define( 'SECURE_AUTH_SALT', '5Ywo*t*W/0a4HPE.hb9KxRG)InY]F0qP0Nyy%jv78lGBUqjbgx5[xsqzmNrWLaMq' );
define( 'LOGGED_IN_SALT',   'J&p=t2J[F}CAvWS8320$32`rx$8-v8vE!veF3p/Xc={B !!NC@$Uw^O%2n-*20Zm' );
define( 'NONCE_SALT',       '5Dy38/[/$R@T)ODPjSF+tVEfCyML*n#8@r9)%gQ~u%a.Y^XW,)B(-AAuqSI8:SZi' );

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

define( 'FS_METHOD', 'direct' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
