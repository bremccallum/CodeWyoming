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
define('AUTH_KEY',         '&p=e1Wr?5N}+~G1o9b4NR-2e,yb+Qgh}S$?C6]2R*($pSujf6>K|`L@,[)Ezz)lW');
define('SECURE_AUTH_KEY',  '#E)vL=IE%N{Y7PDJ6Z_Oj_3I ]{.E`+)s6iw?rBz*%6Xz:SJ+hUd6I+.eVI#v&IR');
define('LOGGED_IN_KEY',    'HzAKS;p3UoJ+ITC*R4DW<nv[paOk|*/mYKy41U[3qsyx(^?[-okxvl!iV-`f+Ot-');
define('NONCE_KEY',        'a]Ak||/ZwhN?$/%B_0{s^*tBqJQ@#hx+ox12w,;)st:+*fVf[lAB^QE&TbdnhJ--');
define('AUTH_SALT',        'yimzWe-/^DZ+_n-+W/Gb2)&QpX?qUExV~;^=c8V||z4Dk|eN|6SD?1boYYuy@P{j');
define('SECURE_AUTH_SALT', '2}UE*c.7R^Y;|:nJ8=4Bl|<~D`V;pm6 2F!MlT~->Lq_-4&l^)6P$0Q1=L)dth$-');
define('LOGGED_IN_SALT',   'Rso]9bT7;WV[Y8|Ep^|YyNJ@HO!?G65>EGf*+|DSAkMq;d*F&_n>WG<5xHp({oFs');
define('NONCE_SALT',       'MMf5SgEQWKsztI:5Q(:q5!91`.*gH~VIl3.zzGx%`_-KE=S}j.{N:U#M~6?[rh{|');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
