<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */
 
// Include local configuration
if (file_exists(dirname(__FILE__) . '/local-config.php')) {
	include(dirname(__FILE__) . '/local-config.php');
}

// Global DB config
if (!defined('DB_NAME')) {
	define('DB_NAME', 'wp_genboxer');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'genadmin');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', '123abcd3');
}
if (!defined('DB_HOST')) {
	define('DB_HOST', 'localhost');
}

/** Database Charset to use in creating database tables. */
if (!defined('DB_CHARSET')) {
	define('DB_CHARSET', 'utf8');
}

/** The Database Collate type. Don't change this if in doubt. */
if (!defined('DB_COLLATE')) {
	define('DB_COLLATE', '');
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Oo)$|^oBM_I;k1@ywozBT37e(Z(Ll;d7;A R=~32S2Gc:UlI@+@o-:I8HlL_RPJ9');
define('SECURE_AUTH_KEY',  '?m7}Y<qS(nz)J41CT)Sr5V6(gEck6uF}W9C]hA-_wHC$zm%X$b5V/B^uMA^?ml8O');
define('LOGGED_IN_KEY',    'r@0O1-_}Eu@^+b.Se<$,CY8{zJ-q!.JVsn0>J%cs-%+LT(t+Eklx@YJkv~?,y4-$');
define('NONCE_KEY',        '%x<5c}*36V7%0Od-|s-?wKq-=uf-_aU`^6=q9Wb].]h)T5||6D<35ndS++|mJ~uZ');
define('AUTH_SALT',        'TAaB5;uG,IdU ZI8Il-z][-}1RA|3GRn|`-#CVBxZ4dgeqSJGO4M4XGi.8|U&&nV');
define('SECURE_AUTH_SALT', '%g-mmu,c63oJ]+~66]e-oC^`T2W !@X#<P`p|+Xf/@`{qFa#b#VotK;)<|-|0cI(');
define('LOGGED_IN_SALT',   '+O[=TGx>a06$Ob7*iHd|u%Dxd{4jK=nN~(fXlGNGxbC;+-odW}P&f(B)gdUkzf[z');
define('NONCE_SALT',       '6 uy+)Quk>h/b!TpZD!Zy7gR)(P5DHb5<%ArQzWs9wYtF4r),p-V5Y^f(Wz}^J(t');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
