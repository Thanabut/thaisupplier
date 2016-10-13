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
define('DB_NAME', 'thaisupplier_db');

/** MySQL database username */
define('DB_USER', 'ts_user');

/** MySQL database password */
define('DB_PASSWORD', '5ew8Po1ubE');

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
define('AUTH_KEY',         '@>j^LPKv/*1}Z4]#=XvkENe^2y.D u/lBfp1;M=NNsCpRNly<7ty`E-5(>*;;B1<');
define('SECURE_AUTH_KEY',  '-Wpqd%5)i.iUUF)`<(GcO73c6]PvZ]bzD2^PxAF/58I/YGHmA{)IiUbeTr88*n|X');
define('LOGGED_IN_KEY',    'l|7iY~7&@iQ(o<PMO`LO,^8o%aY`Y-E)f9,$Ru+~U3? V^MZ{H4U~&PiPWL4S8RO');
define('NONCE_KEY',        'uASMA%=A,HUyuZBCwixKISz0pCeUNiu.Pv^@r0|Av>0}{9!xgxu8F,g>DX; XY}v');
define('AUTH_SALT',        'u,]0L+HQvc&y#N0b< eZh=QzWA^2/0 lJ ^$UkYSK]i0VueL1sK /!e,32-^p,lY');
define('SECURE_AUTH_SALT', 'vLlVQN2>[ H=N~V^%xziZ|;F}>WT]m(M4 aR]U$3|3I|}OUn3+XGYfg51[O{]@*$');
define('LOGGED_IN_SALT',   '`*c#sw|($ k TgyQ>wKyysewDy>wwfdhIEeg~w0!1iDae|&o%Z>]DKw9fC:OG~V)');
define('NONCE_SALT',       '^XL1ZZ|N<}gfSEZt1&Y5Pic1^KAY$[*N5772Q|(rToQLSBdSzR-@I9W0U}(<Io-b');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
