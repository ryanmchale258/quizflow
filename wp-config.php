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

define('WP_HOME','http://localhost:8888/quizflow');
define('WP_SITEURL','http://ocalhost:8888/quizflow');
 
// Include local configuration
if (file_exists(dirname(__FILE__) . '/local-config.php')) {
	include(dirname(__FILE__) . '/local-config.php');
}

// Global DB config
if (!defined('DB_NAME')) {
	define('DB_NAME', 'quizflow');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'root');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', 'root');
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
define('AUTH_KEY',         '<R4b}M9MTMrcAr!Kl1(-Gi2)x6K26w8k;lrc6LLM irPzmkt~]G^|*V2W8-0+ph$');
define('SECURE_AUTH_KEY',  '|36Pt2-Q3(5c^Zt?/J _u6> Dhim[oI44wL>OiqvhWI6%.fia-I1ha*M8q}N/nbM');
define('LOGGED_IN_KEY',    'k/7C4Lw^`|eON{9uh&P!G|S|{sCOx{DR] 2[}pmPjks+i ACGl_e3f)):g?[FQ`b');
define('NONCE_KEY',        '0-KkgOHhItNg1v2R:fh5J*Ly6_-rUh 7/h2AP3$GidL}R1{|U6ebwUmD{$kH%%vf');
define('AUTH_SALT',        'x:=-{,%l|T35Rj5uo-{ST;&=yJ  jM%t@:-Q(}L7K>-Q,VP8?,|7XYRi&+p$}$;T');
define('SECURE_AUTH_SALT', '{X5KLr9?C#-0n$lyw/Z,FD)S]A,gj:5g6XPS`K96E/W_qm4CNAX9D%)(hGjW)^U6');
define('LOGGED_IN_SALT',   'UJT?f_@_36ye4-1MI:-Y#V<ksO+,U8xbk`sm|;0B3SzIL(E+~s4j ;MM#f0 [*rT');
define('NONCE_SALT',       'do/Qw@{y(,t+O(Ad8#gs-&TmH#.n0INeg(Lpy$|Mez|:2$fMdGS6I^y{OGd2fXkR');

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
