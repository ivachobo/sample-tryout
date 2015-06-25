<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'wp_gerontoloski');

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
define('AUTH_KEY',         'S)4ih02>`[>rICNd#:r<I+1**P0(xX4Nvi,wz|+x+e.{r_!TmE+6a;X=0+1*dd?,');
define('SECURE_AUTH_KEY',  'FZQtu]xT~d!)0=iFc?#w3ykV?]J/fIcc#Zv3O!a+O>=18{]eG=~{=8L;-:,b+9bx');
define('LOGGED_IN_KEY',    '>KA9~4*5:1?;ao1--%1&{DcF0RSmZRy!uv_:HGf/B*Fp|`3$L<~{bv(a6G[`s-?V');
define('NONCE_KEY',        'jGqfL-ZMezM1*bUt(rWXc@m{.k9qn_57{UOA2V_`3@o%$<4/4*#9^}K:}|9I,~T ');
define('AUTH_SALT',        'T=Pz@z-~}na9~~y_.cG(y<dwq`j+ -NbdEBSoqd:`p+<UpdFzE~6}u`LxavhNT+-');
define('SECURE_AUTH_SALT', 'Nh0)>hQ[}h4]O#R)tl1JDOK1ZVOt4/OZ?teVV7kaBNuA8*K#2-qMxGl$J_Ul{N/[');
define('LOGGED_IN_SALT',   'R-#WPI<MI47{S+}`gcn7[p`+>vj`q `&gA+E*$FxsaY{lnjRx2F%k-^|q{ww!moq');
define('NONCE_SALT',       '[4Fp1A +U99mzN+|n|9LMAPWgwJ?*99!Dg)5zLqr|#~y3+m]SgYlxH9#iF)0@]Ze');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
