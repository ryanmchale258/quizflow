<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

define('WP_HOME','http://localhost/quizflow');
define('WP_SITEURL','http://localhost/quizflow');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'quizflow');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '`F94p8l &d<u_}M&kedg<BqUsDh*/jh*h cExK={EeHL@vA^.d{]kR>oIJ/OaXQD');
define('SECURE_AUTH_KEY',  'bWQyc^{!u4y.,_Hb7i!kphSGn{9jr/N}?VVmWwvX-Pu;;w=]PkYZ[.G0`eq9un<C');
define('LOGGED_IN_KEY',    'F~P_[xcPy9nyn1G$irdt~z<ZWv0L%Z4zWW~=k336)^b3/5;T-dS%=;}V<zE~+{87');
define('NONCE_KEY',        'vV&j4gkmcurIScD%|B% 1(K@CX;kXg{usi>Y}@~-{<j:N3cJR+wdNP#8j&8;+O<W');
define('AUTH_SALT',        'TM7-P{_D2hI,r`>|@49J9VNiu9Lk.[I9bY-l5u@rlR{`V{?h8e+ c$i#)KrOF7k6');
define('SECURE_AUTH_SALT', 'LoLJow7$Vhw7:0Evm)]z^P<6=7+lBqo!N e:S%v(H;:1GN4;7qY~i1w$*d7~L+D~');
define('LOGGED_IN_SALT',   'ite0iuL+)rr%m2r3mCpjW;/-vmM!o;+>s5Ulb%<pYiYl1,p@jc(Nz+Bm|ZHRU52V');
define('NONCE_SALT',       '?7@o;KhP%I<w_^]Z,V<IqHg6y:-$Q+|Gug~=8(|Ax#y[5?E<?Kup@QB-ZwuFOnOa');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
