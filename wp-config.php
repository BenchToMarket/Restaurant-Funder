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
/* define('DB_NAME', 'wp_restaurant_funder'); */
define('DB_NAME', 'wp_restaurant_funder_2');
define( 'AUTOMATIC_UPDATER_DISABLED', true );

/** MySQL database username */
define('DB_USER', 'eglobal');

/** MySQL database password */
define('DB_PASSWORD', 'phoenixM68$');

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
define('AUTH_KEY',         'Y}^)?I^;/^9v4gQ;,6~:mL(m1tvLn1$B?an>Qg.2Z*R]xT^Xov]J^D-<u]Ge13NX');
define('SECURE_AUTH_KEY',  'KXOzZN2n>}jQ5g;`~KStB;x)6^W)>m#;BGAb.rDOq`/lwwPI1R[C:iuyAuc.y>!g');
define('LOGGED_IN_KEY',    'Ks(M.U-DSMoaK7i4xm`Pp%?~V#G^||4g4stJw-i=} Wk6>Y$Ct:c[5O$]gul@WtX');
define('NONCE_KEY',        'hg,eYVMD  }mM]LyW7{f/dR#K27O%N3a}%ZT;vJLXl6*pDiv[emjSKaS0_e-ie}R');
define('AUTH_SALT',        'y;=R0h.:?8?l)#mqqQk8nvM{G7.Bi8!0&^S|N?Z-#]|QKIe4vDJfy1qyN05%]!WW');
define('SECURE_AUTH_SALT', '?-Qj]/Xd74lQz>1m}iIV+MEW78tCp~*Eor%PYd D_FGdGtSe6@eA<VP-uqYwhcp$');
define('LOGGED_IN_SALT',   'e10WgF_;D}S5r(!}mA,mwdV=N##TAPsBye)P|d^ScnEu=]H.wA92cC*+YACb|qS#');
define('NONCE_SALT',       'z#K&A,Zb`aVM!0uxsl#Z`#%3:4aC@(<w{Jx&l0tRm-pSP/z~k%#ybKO-=-=5YwRN');

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
