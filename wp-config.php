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
define('DB_NAME', 'PhotoSite');

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
define('AUTH_KEY',         'y j1uRI3Tbe#X@w-@~]ZZ<C3<r&qv4.xP9.AVXL}@hB6!K?O $d},8(N~/eUN/Q}');
define('SECURE_AUTH_KEY',  '%M~<KNp{o`m312}8#pmHQ<+Fh45H;?+Z-zSqgM&}pxPugg-=PesJrm^%,~hZvY*8');
define('LOGGED_IN_KEY',    'b:2rwuNva6vwDI([6t4`d4#Oh@P[&Z}^bP9,gja]rl9>uyHg_Ne2Kz=>rN/Ie~BP');
define('NONCE_KEY',        '_^T][`S)2vHUa+c}V#21(l<?A:<SE2=]~CA-9RWw1fI]g=-z61bqy*oHJ 9^?ug:');
define('AUTH_SALT',        'Vo`ie9U(j94[6cKtO<X4[Snih$+00_sh?jxdsY2;._X=Pju:Pe{u_<*79NoIDEkB');
define('SECURE_AUTH_SALT', 'RauduE!N09axMWW:d*?agmyaXa6<;f3c%uk:Q{T+ot>=)wK/b#;&TWdXyL;[Vro_');
define('LOGGED_IN_SALT',   'RMsyT>|D7*U}1P=NS=J%W^x-[VCT$0F7W=xZDV=Mo91I~)Uf>[5C~{ibRXY4L7DO');
define('NONCE_SALT',       '~R^Q}Lm!eTh{]rc5DW:;;_Z6q!s$!Ej/<dfsa8avW.44n>B.!EVV^>X~k+]elBBU');

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
