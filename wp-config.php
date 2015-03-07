<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'ogm');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'Mt>A_mKe]^8N~-4?3h)++G<I*XhC#F1[FuT|f{QVfM=|wX*00XQO|YEml~9+7+{B');
define('SECURE_AUTH_KEY',  '4|VYsl(4s15vuEMjM*+Ag-!^Wzv;g[JX i$h2G(4${:~1i1h0D^9$L;NJ7_O~1|g');
define('LOGGED_IN_KEY',    'yyW&Wg7g|`D9]t>d*R9G]QG51]:oACjpX(;3&#|?+(pw,l){ZA6nd;_XCMI/q+Zy');
define('NONCE_KEY',        'ya2r,J-A~Xp0!?-CM58WK`wu!JMNh+Uy.=**NjPKS.A|;,~%M$H9tekYg3LGw2tg');
define('AUTH_SALT',        'Ig{@i;.Ry5AjU6#&K-e{kIj_9Q$}hC]A&S(CCQTH]on$X3!|x0sm].l#h6H*M0nq');
define('SECURE_AUTH_SALT', 'f=x#Uw3XmsKo:pQ|fa!<2bRlX|7hp>bOTCmE?%W?_N5h-htoT[5#C~JycJ/XfrD ');
define('LOGGED_IN_SALT',   'K| Jht,&kUWo0HLJ<ztZcKw:Wx 9OuVWuyk,:+f/O;[q0|=`~N>lN*{1H#o6$7kS');
define('NONCE_SALT',       '[c9oKxI0V#hJC_}T[dd,u-`Y&?R`:.+-F:HW~a:P -Y#j4l(8MihL*Fof=/CHn_b');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ogm_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
