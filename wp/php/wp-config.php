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
define( 'DB_NAME', 'wp_restint_php' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'b%I& lH/&ZC:uY(-p`J;Tg|!?-K-Gq.etq-%~A}D-lym8/lISWTO3&n|iKDy_t|s');
define('SECURE_AUTH_KEY',  'J=Qbvwsyf~8#kgXhKVRetKJq$$^-&VY{:laAGAS3xt#+wa5z-mk{Q66Y@]f0{gBu');
define('LOGGED_IN_KEY',    '`o=<O|3+nxzNXw0Aa0|xp4AZyv9iT18?cZCmoU[/?yc5 -Z~YP9>U~^7&O`C@>4Z');
define('NONCE_KEY',        'P]|!;]wx8rd/^r% /X KJ)Ct<Q]/-xQ|VgL1k6NoVcST!Ef1W;-qmgjs@k|-_-:g');
define('AUTH_SALT',        'L@sx&k(Muo5p2F]@TKge&WA,u`U=Y@|k]k+m^}A$TKM*+:Lk<K`l|Eif@UOFJVy>');
define('SECURE_AUTH_SALT', 'A{j%8%YXN-5z;BVa (ZbX-s=+pr0BWPNXmm$k%CcTu|kn<]t@||Jvx$ 4Tj#+x@6');
define('LOGGED_IN_SALT',   ' wnhiJ+bI~Zx@387w_Vuj m9FNzQ7Phb%^+`z0+~?3R=Xt0N]oSYY-;)gTCdu9{G');
define('NONCE_SALT',       'D*iE(z/|3ZMwt4L,lJ$k 17PW7KX|(Ov$./RP+oEJeJ,Gv4hBgLw>/T(ss^G=DZV');

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
