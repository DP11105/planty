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
define( 'DB_NAME', 'planty' );

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
define( 'AUTH_KEY',         'V;wc&X),!3&Iii3o8~^^Kq%}}_SnGDiVB^n,UM+Rxlp^HN,Q36&PU^)t=U8DUXkq' );
define( 'SECURE_AUTH_KEY',  'v5{ wv}XfP@}Z:zi=B/uGbMU=BIhV.$$eDee5f%@EO6BpM#>X(@.OuI6A w+{>>S' );
define( 'LOGGED_IN_KEY',    'G-fmVXkZoAT.>ERYD@+S%{Y[{uE.63pQLA=:NNx4gbiP8?&{KxPW=F1EF*[c.]Iz' );
define( 'NONCE_KEY',        '?Kc7[(wF9<g}<(HrVOXQ!.UX=5G!qW{NR6jAj>>MqRQGq-Yu:W./u+R`LgY2CEP=' );
define( 'AUTH_SALT',        '-k,TW..CsVXC=J>;6ADk.h?n2D{p_Y56~aIrW1.e*E#7 6saTJA*cTw)Em75F0|A' );
define( 'SECURE_AUTH_SALT', 'ayS,IJ;IigP}cbp<(z/n#`iXCn/;C>v, igkNQ.>@JI{<+9_}Zild6&Y5N)Nw4y|' );
define( 'LOGGED_IN_SALT',   'p^qaw1wih%zV1c%.V%$RsQImKub6+7{o2SfIX@#FLx2]#w yuhEuGk?es#.A^z=E' );
define( 'NONCE_SALT',       'LDv;hjc{Zs*czS]t[P,>32m2MJ-$pJsBmlIF9(V-di8CViIk-:kqCP%&OXmmVH&/' );

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
