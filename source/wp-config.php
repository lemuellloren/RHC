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
define('DB_NAME', 'rhc');

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
define('AUTH_KEY',         'g;EV+G&@@- n5@NyU>K^2akeE{dFm+~:u5.6DmfeA$8-*}!d&kT$ejN/E;1; +[m');
define('SECURE_AUTH_KEY',  '23-A:lRZmZ>W4?>+2d22D#X3~H]v.v%8cpsxM|46|at&E,@TS~z+,hIE5eLk<(:1');
define('LOGGED_IN_KEY',    'EXFPQv0fa^18[G@D)n#7pk+-MRS8/dAuYW2<sEfUH=gWim[2)n_g&Rztl8E*yg(#');
define('NONCE_KEY',        'F5iKtkHW|28k{yb;=+Ss5L}~f%4sgOcoo_3cce3Eqh; !lmdx~b(*9|i0iC55*2-');
define('AUTH_SALT',        'SKuNX@),ayv~Eh-1p|CWY>)6<if+Xr5[-M5706L+xcGfE<($04-|PjGHnK2:(d!:');
define('SECURE_AUTH_SALT', 'vpYG#Qn?UQ&(0f_aR]i0!S $JP>Ux~?rMe`qu+|2iVws+>ad#0d>THcgXxXL`cC<');
define('LOGGED_IN_SALT',   ')[G74AD?7,]U+S9(Q5T//k6M~6~#s=KN_iK]{b-~;-cW_F_o(zAu$UZ#;Qqn=F~)');
define('NONCE_SALT',       'Oaks65+B^*7p}GF&FDe`CME5rwD31}sg2! i.!PZ[J42a9I2I3+9L}xWUNB/$d|!');

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
