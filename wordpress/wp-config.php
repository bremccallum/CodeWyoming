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
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '?UKPG9lf*l}vcvYrHEBK4[L RsyWA[g n*4AxkK@H#NMT16Fw^OHq,`3gy%CTp-e');
define('SECURE_AUTH_KEY',  '%bM%b@|5Lyq5L)t0WH-i#M3T8L-HV{J-/Msy(ZH&_>M$yH;xfL~YTShsk0q`ci/,');
define('LOGGED_IN_KEY',    '8e87l??xDd !h>eA-r3e]=c-I]94Pm%reLu=.0{$@:?ux}J|4RL!l3+Y(Y:ta;]i');
define('NONCE_KEY',        'E_EYZ@BUuTZLL8O<!J*YZVJOO%[~>{m~SJ*pO6xhw%~PZiBfdQfbQTMnTWy+e5yD');
define('AUTH_SALT',        '#&@M/f`sD>S+N6?c^.BkugLZOYlpHOHX[BD)wY}%b6L` `>|<V$L*`TOZymBA|2B');
define('SECURE_AUTH_SALT', 'tb9lbS{l+qvt7sZJh6Hj)1SS6>xL!Go>Zf+bu8eM)39mefv/KA]--T|J~DD^p~l-');
define('LOGGED_IN_SALT',   '%8Z4#<+k]8AV|D.Q7f5`l+gj0g$Vu4Ukf._ZtDD:C$s}!NzIA@s4U6A=H|$2CQxd');
define('NONCE_SALT',       '`p^:hva{[Qa c3jnp-@~ zAbwz34_W(H3,XUP^7B%c`v/o5{pr6YXoZ-b7-h@Cvp');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
