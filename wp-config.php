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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp');

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
define('AUTH_KEY',         ';^g9yp9D0xkIj+N1h&%1|I9o.W<:`{[K];HoH 74X+Q]4+C=YIuX,9Ti^Ytn:!~~');
define('SECURE_AUTH_KEY',  'A_-tWQ (S$Fy+hq[%lPRQLf1t1UO6ZqR%+d+p[2*+Yu.(>qHK9vkV=m_?xY(:*~,');
define('LOGGED_IN_KEY',    '&Cxbp9g|VOWdGtuZ/mj^s0jvmE},azoZ93O}wco>^&_+-E8fX9*kuzk)*(hu$Y9B');
define('NONCE_KEY',        'B:KgoM;Mz :nl#RS[LNeFVQI3c4{47jJKhJk&-Os<|+=uLlEL*xZDIDu|[HkgyDb');
define('AUTH_SALT',        '+)}V<*_i`kEcgE;TIn$+f/VXFo>Gu2qB$([rZ[yhvrQ)|wD5hqXz,+=7T_>4;@p-');
define('SECURE_AUTH_SALT', '3>}~|<+.,_Or^I1d1Q]tZf<e-/CS+u;{w&~v[xpPnvSnV$=|r.:1[=:+Lh/M2+lg');
define('LOGGED_IN_SALT',   '=?2zbe{rD9Pq%-myC+C.`3Q+C=2i|s7.[ TkwQ85|:?+Nm|]mifT#%G}kG.$u {#');
define('NONCE_SALT',       '}a)tFwsVx$Ou_uV3%OShMN!H5elpV)1:Nl.HS.}QL_B}V|QU}&88B3AB]2P=?3:-');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wrp_';

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

