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
session_start();
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'chesterhamilton');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'eqRw5FpMY^P*;&?MeO@r-FpCSQ`1J7jxvY9PKb-2pi z#?{0-a:e<+[~u=7`&28G');
define('SECURE_AUTH_KEY',  ']gk._=*`d@Fs5S.m,cBCriq-p%A@2+W8-rw[Gi3D,W Ro:m$Pv!7Iq4sRG7*0dc|');
define('LOGGED_IN_KEY',    '4y>2.kJ!re%f{w;kzD=d`(~8GolJg=@_I!huIDGFr;cq,Fp+37s>_c|Z?.V;_)C6');
define('NONCE_KEY',        'z@eC.`^8.8paS+SDtpZCixhAzv>EP~A;KFdS6z=H#|fLp*R,<00_%Ielr|W. g)$');
define('AUTH_SALT',        '>cr(iD#Y_m?e5APTDH0D7knBGd#|t0Rw98+rjF&h.[k0D-]UxMwO^=.?p.70KkeL');
define('SECURE_AUTH_SALT', '1)[fmeGn0eMS|-]&mokJukF}73/ ]fVItD9_V4?4>rM_v%*wEX$Q9Zg$cefk89@7');
define('LOGGED_IN_SALT',   '+{d2,sUI26_1?Xl&jDNq @8bOY+ buwJPKtjtu&uk~#**+b+oBx*WK)+V;kESn}R');
define('NONCE_SALT',       'k?Xy)`NaS^<v[b+O|@7]`C|Mvl:K?5CZ}P+.)^[D+~cU_L2N+2PNG]rQF+#q<|{o');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ch_';

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
