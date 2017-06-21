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
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'yf.yP>lo]o<N`-bt`wKgL|*7FAj8EyJ@UFvnl0(5Gb(1itVnFcrYoQ5C/&x~BoVm');
define('SECURE_AUTH_KEY',  '$1viiA{ZF +U^(G^TGEK5&!HywGjj4wzO4OhH!ht%4^uf8u?I=t`F%HJ7vQ;Tqa|');
define('LOGGED_IN_KEY',    't82C2jf_n!}fiteli|S_p0yg/*i#.*v-r->a1Q3^c%Y*P+fI e5kY0#X<$4frZ7,');
define('NONCE_KEY',        'n`Ibex^M<C(lM_NHW-+5VHafFH@-/rea2QB$o[c+f)4bJ|xXW(g!-GauSa22I@ix');
define('AUTH_SALT',        'e;QydGwiR6CtoWgM$eUI/94/9Lc7LCkC6!;OrXCSy]X6:WK1P7/A{Zl)rq<+&xVO');
define('SECURE_AUTH_SALT', '?(Gz)+sM`EA*G_.jL{9/hnpYAko,H~iBCa8^5IadNm~AbkP {R8uEPE:{G:4W$w{');
define('LOGGED_IN_SALT',   '!SJ9lL Ic)4le](95/;Az7}%j>-iw 1Xms=Vk.(}b_TI[3g9|!k.&]=FShf0h?6 ');
define('NONCE_SALT',       'x^Uf{zotAM`1I #JkL2Et+LwDhVBHG;~f4jF;PO:_ZU<<hLUma]pe_8fGl(*r*BL');

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
