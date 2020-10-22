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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'fullstory' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'E6sC)_:WgY1|^d}cU IEk*w7.FxE?l=F(ENp5T%5IjxJ>E25r7O;$L.W;.1pb;Q^' );
define( 'SECURE_AUTH_KEY',  '*Y-fifkM&w=EwIR^lR%Yl#`Gz-zAq{ZZ+HyEpB)?/gw,a+ZW_aq,6u~_{$B^,:tM' );
define( 'LOGGED_IN_KEY',    '[962P[nWD[CbvLTbx_=d.mCY=I@IpJQ!mSb/M-*[u|[BM=kMjKp.$+1c/a/jBlUl' );
define( 'NONCE_KEY',        '~h(WK 7HqZ8q$U~@MLq!ls)cl$M0O3C&&h1i9fg}7jk*>o7/?!B.DW27h9U:#.<_' );
define( 'AUTH_SALT',        'Y1!W!DY7W,]`eAFH>Rx EnllA6,9k?&ef6$v>[!*jUTV,0(^+n7p@&~(ea^INO5-' );
define( 'SECURE_AUTH_SALT', '-`If=6|xytb|=0+.M]5bO5jo>? <UpH{(TtkWSOVvn@pzU:AL,@KLoIPG^s_}sy ' );
define( 'LOGGED_IN_SALT',   'M$K88swcTL8U.Oi=0k~J!U?=Y>a|7)2,UOog Y</(=gp//P+l}YMTzstrH;Nfqy-' );
define( 'NONCE_SALT',       '8V^,:ns!?+qb$=&4jWl.^yj_jTsb(]i8FKRbS+N/)?OZ$_N$;HCat5w,d+k{RI>T' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
