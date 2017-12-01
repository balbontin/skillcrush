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
define('DB_NAME', 'skillcrush_db');

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
define('AUTH_KEY',         '3%lxz?9Uvahd4I,+H$0xsgw=V=J1)O&+oeS~2fhr6W,BEw#Ax4##evFSR-jIpYFo');
define('SECURE_AUTH_KEY',  'x*FYA&C@(%pKLq+1lYgR8[H#,USDJOq6ZjGr/wL7RXlj4u:gK%q,0In)rX~2)j:W');
define('LOGGED_IN_KEY',    'p%E`b:D]q?fkP}x*+nK=*@43=Ft+1*;c>&eJ*1)R_s!J88>H?T9=dNd561_Q>Vk}');
define('NONCE_KEY',        'iuh*m@[pZ?gP(Wt+41ZIzIILk,YM8ZcwDp2=Ly#YvmN:;XHc!eUo8192`#Xx|WpW');
define('AUTH_SALT',        '665?N3O0cP<S)NAe>^x9fF KZnCl?1jymIlv1[_}pb/vsx UT@pW<VrR^LxA[gbW');
define('SECURE_AUTH_SALT', '%TJD677.H5dh);5fH7csngGQ|=?5P,m-&dcWPw+KG)NiyF6o$MGD3U@MH`2R8[&L');
define('LOGGED_IN_SALT',   'oL)-Q-YD4Y$jn!Tm iO%,i6E*bBOG~KPw+-?lcBS{KgrZnme5[S,%LvMUcl4.+n#');
define('NONCE_SALT',       'R=krd=]~Q}:D?nV@NB*h/gh6L0?Pn6oecK0Y?D3WkWdcY;N;DR`+qk .-qXvZ%Z^');

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
