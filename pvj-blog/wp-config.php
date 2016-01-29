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
define('DB_NAME', '_pvj');

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
define('AUTH_KEY',         '^U^1Fq(yajj=Y-#+b8:=[)LtYhKB+vRQPS}Eaye|~(c>qq,[NkLRogM,:w`nLZ]S');
define('SECURE_AUTH_KEY',  '^1/Frx&]>MhfQ.V;(j0auwVGH:b+PbJ) XWk.CmJ@78c]N?&:V|(W;W9B})i}fA%');
define('LOGGED_IN_KEY',    'A#P1[d_IS_`aX=N|O$;QKmOLa4Vl1+Q!!} &-2qQc{(@e{Gmxce#HF W[z+o-3F2');
define('NONCE_KEY',        '.;,8j|N+sRkNH>#9v>bcB1-FO[j]:nI-P8Rb)G3P,7t+-?e3gC0@dLj&o,rK~+g}');
define('AUTH_SALT',        ']t-:~:0[k@;0[km^&g|,x+((m2,PTtZMB)Kpm^/KDG;RZ:d`N^nH6N|OIsrwy4X=');
define('SECURE_AUTH_SALT', '^s6g:S<Dp?Tu# K#tu+5.KrE^/e7QoC4_<p3$9~B|bUWc +6W~SL|y#6WFDo^L/`');
define('LOGGED_IN_SALT',   'kHu2e% 4CFUhm8mIKG46NJ>Zek`IMsbYt(KF(+GR`O0imC =Y-><+Qx.b^k-nWW+');
define('NONCE_SALT',       ':.@g8E5Mf+_;2`NbNAJ5%;r/n?u<=q+zO5C~Z? yAPo (gN%-4:{1jP>-E~EHnb|');

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
