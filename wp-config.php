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
define('DB_NAME', 'iziproject');

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
define('AUTH_KEY',         'lAI*}6&Ncp/mvww*Dokm/8%>o&] 9>s6{t0k`JN%P<.@6dtsGB6L]AEE@T6Ca+5~');
define('SECURE_AUTH_KEY',  '{4[mEld!g3t)o/~W/,Q]w+z5A#CFq&,7s=ev{Hqhcx2DHQGPJBHVJXxI%o([y.5)');
define('LOGGED_IN_KEY',    '#bVLxTfu0)]s2{!B:T7.s?TTZX9z<G{0|@,3! gJyhmwL?rB)V{wj3M`bPI]!P}S');
define('NONCE_KEY',        'rU+2=zyOW$#p/jww5UcZT/48jA3:Rz|CpHI34hGy=3V@=%sH]j-g.`?a*wZfcqav');
define('AUTH_SALT',        ']u/ZHT@><Ss/pTmX|n(6q6aI* L@t9{IQee{vt4[{j^l@Xj]*n-NUG,pQ^#<#=vC');
define('SECURE_AUTH_SALT', '*kJ]/<{.abM{M0krdA-tPYl)Vvt-uSs&kEu;?*`Gt4s]&`#aW@}{g7$?JAZ%Z=rT');
define('LOGGED_IN_SALT',   ',p<n+Qlx2BS@f%=|Z(2m]$H8d1o6Q7vc>p*FQuSYT`r;Pz4fyJ>[b/NJ$Y9QX3yS');
define('NONCE_SALT',       '2x%,qyn3bD_S#_85<z72c~-QG+-R|o`f_9!LpU4<?aerXpqLk!St-oa^P*DE%gXp');

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
