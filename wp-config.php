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
define('DB_NAME', 'portfolio');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '(vrWu1L7hDhx2p]guI7,yH5TOvZslhGFYtOepB0$HkF-/x7,;V 7T$/`JKyj}&X:');
define('SECURE_AUTH_KEY',  'x%Ddy(.ic>,TR;U}RWN*[1Nu:=~%R|u?*uH._53N`79N[kl<`jI$P_8d1:i)E-&W');
define('LOGGED_IN_KEY',    '+`wc<_ET|t^o*}D_h0qQ9,a;QJy#]e|Ww]|olxw}lF)FX`;J{9@[.GPT0t]#4y9[');
define('NONCE_KEY',        'e9li<]9jg-N`-6<>a)k=BaO=Ta~OV@~o6U.{n0;o,h0Lxci*6}CQUF&v1Q :7`WP');
define('AUTH_SALT',        '/ dP#.?h`,Q?6Z(w16H`u=#J96xYa`1 1OQ(aN4A1*]%U_Of21{y~x &S}RyZ u.');
define('SECURE_AUTH_SALT', 'aFGONdwX Am;cl:[kTquW@Y~{CtUOL[r,^OP ]kv_s33X@(PUkkWA-ngnGl<EQ[D');
define('LOGGED_IN_SALT',   '.~j?SU^d:^BYHz?+^.S4*e<?Ec#f|k!>AmLfp)bkjkV{~3t7sjYGDkgT [#Yb7Q#');
define('NONCE_SALT',       'pP831p*K^6ueHp>b6^Lxt>k[d$tUeo95{npMzi)KrNNhY9X2us_Vxue(z&aHv)Y&');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'pf_';

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
