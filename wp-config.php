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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'xILGsn}:rcAaN@psk:K EqlX=RtioL/1n&VQESBxp?Z010Ca?kc){*#D|(Kxrq{O');
define('SECURE_AUTH_KEY',  'A+Cl}2/,j?IsiR[a<=qnY]BuDCd)dPCKw2{6Z!a3^)gatKno-cTyatLnTP=/f!&G');
define('LOGGED_IN_KEY',    ':$#&2kKE U <JY?yZ?=6zD17XI-p+9{/Xz<W}!}zY>:3Ds!TQD<Q}!>wJ`Yi?,k[');
define('NONCE_KEY',        'DsGa|bW|mAn$QSW`3ep;/Jb5Z#,Wvo+8{uuV%>7/G0]A>exMl#&2s}%>k)ib5:f.');
define('AUTH_SALT',        '~-}GzJ?jzab.k._j08)cx#W2;O>Mk|O(tY.C~9Yc*$!6$zgHSC94H#r;DF.hQ38N');
define('SECURE_AUTH_SALT', '8d4*0j;=]9bjpL:uZ#XldHB8Ze}U?n$Ve3P3P1y}SUZF%2*)TYvo~2b$a;>)9kuF');
define('LOGGED_IN_SALT',   'gD`$bXj*oKu3 ,d,;-BvI6=H_2i{bQYPYCE%~.Dc$e+g%D8%wJIebT#ya`S,&Ku_');
define('NONCE_SALT',       '~G NA<<SE#^k=PSzcv|`r^^%][XzT8g?[()v/ICxw*?Ujc:nP6XbnNsL$eH&-I7s');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_1';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
