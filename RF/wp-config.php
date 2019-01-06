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
define('DB_NAME', 'eglobal68_wp1');

/** MySQL database username */
define('DB_USER', 'eglobal68_wp1');

/** MySQL database password */
define('DB_PASSWORD', 'X)sNHhp1ek93)@9');

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
define('AUTH_KEY',         'y4eOxjgzPr6ccPL86MCV2sbVcFNKlmvJNIpxrBpJcwoTwVdcspSA4w7DYwzjkpKN');
define('SECURE_AUTH_KEY',  'Eakv245gLy3mIgE7s6SElHgeSiwWWSt14nYvqVEWMjNFxstNAI2PN8sRtepMirzc');
define('LOGGED_IN_KEY',    'ZEvRubJjQHAZbC5qvYbmmOMT5eBnvo537wMzao0WOUqgAl6bEXvZ8eGNhuzhIHsg');
define('NONCE_KEY',        'LQ4VN9gnCpTHIKsUpKsRfzLSW0VSZeKoMyUxU2OI0kaqzKDp1uI3NorIsk9WTK02');
define('AUTH_SALT',        'i6gwQJtZRvkQRbrYgpmh9FLqluXZITzl3EhxzBjtVDKpRh35LZRU1CV24DJCA5tN');
define('SECURE_AUTH_SALT', 'dgZDjRyuxbmm1nHiw77gL95tfIKpgsA9DBzIuJnFUnxsefmeGjbDjFTCTpgrL8mf');
define('LOGGED_IN_SALT',   'uslJCua4PpTJ3KittjFozi2Pt47SMegIi9qDZ8mJN3oYnnmCFfeXgTeBDBj3jVGe');
define('NONCE_SALT',       'yKxPtC4n9CtaAVi6kwSUySVc0oMSLUti8R6n7ZJl9xXMywciAm33IXLz3ZWyn3rf');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


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
