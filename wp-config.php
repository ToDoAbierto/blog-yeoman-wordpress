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
	define('DB_NAME', 'wordpressbd');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'todomj');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', 'pr0be0tr0');
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
define('AUTH_KEY',         '~/Tg3I+mf9yJ5;~LvrbQ1}lnU;!hofA-^u,lDA-H%HQd9~!Rg45]deu<|^|NQohV');
define('SECURE_AUTH_KEY',  '31T~g0x+LDc`]>FkqsvpI}{Zk4RlM_oqY/%@Vtq*]++-BhoQVBFi=wyocLd=x4FJ');
define('LOGGED_IN_KEY',    'dW~*Bn_z~ 3/)q_2ih!EOhLb8uk|HZ|y3Vq;<& k];OY3WC+9TfaP*Hq.8~xG$qK');
define('NONCE_KEY',        'zmG%sz.&9Pq@zCX_]aH&g~a)0&-$WEvHRS5wzXi!/a%+)JpJ5Cipk%Uq,?.|C`ns');
define('AUTH_SALT',        '+vz%uYE/Q1oBnUl<P|2.4H_%.K;ZwLLvEoTPsPT9wJO|vS!{61dXOs~dX*}J(qY%');
define('SECURE_AUTH_SALT', 'M12,Odm-(2<^(!obH7!um&us6[/?>g`5-|Qe2b&|(=krA0JI1i{2RAtfx&;l>!|;');
define('LOGGED_IN_SALT',   's3T%?o|~|>x4SuRroFQ|M.8avz}Y+F.~m@[_|z:cxgQIr~o|};Vk*_.,90uT|(KA');
define('NONCE_SALT',       '(3:#KV++alu79,.g<r>7+,j1.s6#M4gfu2Q~G+LO9kBL9jZ P`-<[M1%K>bt|<V$');

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
 * Set custom paths
 *
 * These are required because wordpress is installed in a subdirectory.
 */
if (!defined('WP_SITEURL')) {
	define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . '/wordpress');
}
if (!defined('WP_HOME')) {
	define('WP_HOME',    'http://' . $_SERVER['SERVER_NAME'] . '');
}
if (!defined('WP_CONTENT_DIR')) {
	define('WP_CONTENT_DIR', dirname(__FILE__) . '/content');
}
if (!defined('WP_CONTENT_URL')) {
	define('WP_CONTENT_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/content');
}


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
