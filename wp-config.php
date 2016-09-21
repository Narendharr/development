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
define('DB_NAME', 'ltm_16599609_ndesigns');

/** MySQL database username */
define('DB_USER', 'ltm_16599609');

/** MySQL database password */
define('DB_PASSWORD', 'incredible');

/** MySQL hostname */
define('DB_HOST', 'sql104.ultimatefreehost.in');

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
define('AUTH_KEY',         '>oaY&e>^5&E%hlv[-N@G#co%Mzjl5.{TSF,9#=u/ X{EdU$IxyHnAW[+!5|JzvUy');
define('SECURE_AUTH_KEY',  'IE-?hq;P=>;zXOoUzS </;_BEAkXrry_C{1WYh3&:G2B`G(D5r;N9Q LM/`l6Qnx');
define('LOGGED_IN_KEY',    'fgl2H7*n*AA}joX@Cwt|Y<%u?Tc.%2l[w*&ISZ8Tmx.pQ_ q/4)G@qDRAO&rUcf/');
define('NONCE_KEY',        ':Fl;V*:QK,t*S>#K>7%@MU/ee2mXRGQ)o? *b#<|o^FsO_v<L?+,GTx>u]nAAjqn');
define('AUTH_SALT',        'wzb0eq{l{^J%eLI0FD|hItHHiN_I+$4M?6DyabX5cFB0qV$B#.Cm!`/(lKPF8]-9');
define('SECURE_AUTH_SALT', 'j7vGc/qmI4_3N}YY>yV[LU,JL7J{}/K}%L>irT2MHVK]V.K3_^X:gg:IJzWHs#:q');
define('LOGGED_IN_SALT',   '/Y/~PDQ*C[_BuJR4Ta.[5eu]ntAZp9$tL=YC*_IzG;6=Vg9ChqIt:SeIm8=k)W;O');
define('NONCE_SALT',       '+A)51jdl/:geaKqDv0G[,ydMGncr,Ak=Im~v{vg+w`L jvPdEhr(Y$ZWE$[k^]1K');

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
