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
define('DB_NAME', 'acupunct_311014');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'human01');

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
define('AUTH_KEY',         'JA};VK`@e1Q;G#bNYk R98S)_HY{909N?qKS#9XArPCVqqy?WOCyI&R{#`kC_ggc');
define('SECURE_AUTH_KEY',  '+QSODTnc+/IwU5Sf~:%*Z1+zfE9?Y!jEa$Y~8t@JOl9ix?HyF_;V%S>-_>}VL$)c');
define('LOGGED_IN_KEY',    'Bbgf4xs-o?J!n@en-lSa$3ji=mFAe7UNod-`]l8!?>nD#cHBv y6^A%I|X4+}A`i');
define('NONCE_KEY',        'jF`lMs}m$+MCh-8f|ej+X NEOZYR+ot98?~Y((~EN8G#VkBqz0PM1(g3p3DjF#_J');
define('AUTH_SALT',        '>*S;=Mop$/sv-|r3V/;!&)M (0|;eF75 ?T.90Zu2jHmT&b8TKI`^9xKol.M:3Al');
define('SECURE_AUTH_SALT', 'u*S @jE[$8Vl!n|-n83/j(FVh;+X6_OUUJC):QB7(*J4},^TO+57G|MbXKN==)X6');
define('LOGGED_IN_SALT',   'Q~O>@~?C[Pa2<r-WG|b]9 hc,zh4b ]C4?nyLE4Mzv$:8+mYb|c/.bz(cy<yeaIJ');
define('NONCE_SALT',       'XI?#It5i-Ch4@s&zFdd]^ee]?WlfKS8Y6[Z.s5/JC:KFSBVQ-8I}Y{eq#-4G3}Q4');

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
//define('WP_HOME', 'http://acupunctureandbeautycentre.com.au');
//define('WP_SITEURL', 'http://acupunctureandbeautycentre.com.au');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
define('WP_MEMORY_LIMIT', '64M');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
