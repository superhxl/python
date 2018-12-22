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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'superhxl');

/** MySQL database password */
define('DB_PASSWORD', 'dingfei344599');

/** MySQL hostname */
define('DB_HOST', '144.34.255.220');

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
define('AUTH_KEY',         '}7^2tT}fp&bSP3#J}0:ZyJ.VUM})OY$DLQVt-&>}BwQ%H}/a/AUbQC h8;6~7e0G');
define('SECURE_AUTH_KEY',  'v!zxXvQbj<@r[KrwD?_^6m<V7C1Uskr=B:rL0]{`+eD+yoxQPnJcz|X}X9:-uO%U');
define('LOGGED_IN_KEY',    'mR7_g3F)&Bzv~:TmA3p#-sF8n$^;cuTmL;]Uz-_.e uosoDp7$@2qY#NJex*n3Ce');
define('NONCE_KEY',        '2<TDin]ES~LsVqxasp-37w^_|a@m7%zf_4S=6Pewd3JlFsMV=tf^):G+V0L,yERc');
define('AUTH_SALT',        '{~D}Uyb9)F~i(G$4df1;6x~r? if. n;$`sI/y;t2-*o+8kr?eC[Ocm%a2gr6ByU');
define('SECURE_AUTH_SALT', 'Yr_fcf}9eLxO-Q0,E3zNU*G@CGEiCM8u+-p6~Qt$R#TQtJSjU4nboJ>d&u|8Z.(9');
define('LOGGED_IN_SALT',   'PD*pO47biHOy5_vZ5 K-p=nnM%6%>ZH-%p.MNt&.-Bn7ECJCGuI56QCSdzvy!`|`');
define('NONCE_SALT',       '}Ehb(2C]C_ORhsFr]1amjCSJ%ZSetgxc@d7l<]THceb|PS)9U1|2.q|#6T4JIjyG');

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
