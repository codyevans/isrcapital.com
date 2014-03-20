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
define('DB_NAME', 'ISRC-News');

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
define('AUTH_KEY',         '?3tS`V;!REM;Zg|csVH@EA^+A+*R;r(*=MsC`a*|^<_oB%.EXpORG:1)O^y)Z;T`');
define('SECURE_AUTH_KEY',  ': xy-<4h6vbOIxPA3s *C{|/_b47l>7.V|LJ[CySm.&7(4qF3J+=#)VD^G~t,l!w');
define('LOGGED_IN_KEY',    'SCe($nzoM+qn>la,y7a-D+>jwc-;!a)U)>1VJGArvmzhQ+E[^AuXgksG-p@rWksB');
define('NONCE_KEY',        'O3HtAwmM<BWYowc99{rHp71q]I3r zs^c|oL4_B!KE-@Up+yk~!b!(ZnEXD)}Ti?');
define('AUTH_SALT',        'y1i79~S2sWuQ|?Py7|$*[|C|c1{o&O8/WI2HG^p{uF[DruEvgHp-MT+Pstg5g^Z_');
define('SECURE_AUTH_SALT', 'H>I#QD^vLz<`CZC@gRq7:0Z!1`>NAXT4Vv(<ALzSou9OQTzzIJ|{99%np1/!aWGM');
define('LOGGED_IN_SALT',   '`}Z-!e#kc]m(&[O+Cio/w|G|m|2Xa6q#yQVUu|+)FgF|laQ=]q&r#HR&B~FzphM0');
define('NONCE_SALT',       '+{ j-U}1]DxF)xT7tMd4Ft0bXBV)>08 =3` ` 7/-fDlGWK82Ea5^;K(N>ean@e:');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpISRC_';

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
