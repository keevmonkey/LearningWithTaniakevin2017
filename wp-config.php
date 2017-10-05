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
define('DB_NAME', 'startwordpress');

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
define('AUTH_KEY',         '9 3{u&|HgMq|+`OP@@xrlJz)2VJn.DV}yj0(2dk<%`!`<9M`GiorUM|wmti+b,T}');
define('SECURE_AUTH_KEY',  '<KJd Dg@6,4dLt[OAnD0W*&^{N+E]!V48Kh)z>d?s<3-0[m(qmtL;K+[}_pA,Cmg');
define('LOGGED_IN_KEY',    'hp3`!w`z@/a@TQNjn7MR?ar>Kg/1t/10{VQ|Qp-J9}-+atYn[O7+F+pUc.87&Jrd');
define('NONCE_KEY',        '&MIoa|2fcjD{@_eyeL8rPi=`#QfX e9 6|_8xa,Pe2z!I+d#?|~k9dzn&qOS[+qj');
define('AUTH_SALT',        '+GkvzLHyxVYcNZR+GII-/iv{JGw8+5v5*M^!d6$@,isBe$yKrECR[BWJ6T`]/V7.');
define('SECURE_AUTH_SALT', ' gk6;lpsl>8&SOwR/wWTquuHx*t+ucgK+=6!d{:a~@?9R]_hW+@ubay>@%I{@.r}');
define('LOGGED_IN_SALT',   '6^Xp2MR{R`-nv5M4wJj4[4cHV;x3TVFe(~mvFc`63r^?HX8jV+A`7-fkMraj7A*B');
define('NONCE_SALT',       'r8{N%}R[kz[xT|]+v0.s)d-r$F,A;4 NkK)97LK|V|9e>osG8kDu6>?eR }tR#o>');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mt2017_';

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
