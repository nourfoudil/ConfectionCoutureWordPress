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
define( 'DB_NAME', 'noura_couture_db' );

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
define( 'AUTH_KEY',         'noexZ?Ub%>YY9*%xFJ4&_KLjV[_s_Z+pQBr. @vuosN2IgEys#Rm)iADGC9$ANdc' );
define( 'SECURE_AUTH_KEY',  '|Q(4HL.:JLw]iB7+}/$LL#zEvUH#GCq2UW^9+z+&nNu@WU=|$^p])rl{W.q=Rj=W' );
define( 'LOGGED_IN_KEY',    'Yp1I.?KVH-lJXm!EE-ASD ,3!94LA$}E-f[hEM:E:U+XCzXROC]#9hsy eo*Xg2/' );
define( 'NONCE_KEY',        '?d7qw,$Z:S^5;-qFV5FnEV{p`|-v;(YjN4Y&L.M@y#{559L?~OZX*Xm!e#2ryZGy' );
define( 'AUTH_SALT',        'kf#E-,F7T8wk{~B}%T[q)[>6k?uVT^rb%XpI+>;C>f,Q{yb<~@-;+jkwpc,_99Al' );
define( 'SECURE_AUTH_SALT', 'fEWsvxTP#,QvUV>j:8Yl/21x6~OG:D3Z(QR!<C*wFTMG@,JC)*9FY2.m-<RH~@za' );
define( 'LOGGED_IN_SALT',   'H(8$w+SpiUWN9wR TvV+%x9?VpsN*G,/=Y!ha~h%Kl:g:QAWLZh&%]1C&% Is@~{' );
define( 'NONCE_SALT',       'a@(;=P$W*]`^a~&>C5Gzt*I|KFuR :]_}{4{]kK}VC}yAe.R`j9(ft0zq7CJ)JLw' );

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
