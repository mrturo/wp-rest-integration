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
define( 'DB_NAME', 'wp_apirest_php' );

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
define('AUTH_KEY',         'XXu2PbN9aA8=P1)y^ZF19b{tbz1SApdrQS++bw610nw+#<r$5cq`1&sKgB5{[UHx');
define('SECURE_AUTH_KEY',  'Y`ua*Pi,Nh{]x(BqgN^,i,I($oLM1Ik9mB,7N{0-U=eOGZP1/(|[vy|gO3jy9A%8');
define('LOGGED_IN_KEY',    'O7Un296bC,n%@(w~(z=^N?yR#{B-;(.s;+B/+3cF%1D[,k%2QdaV|q6W((W=bS)#');
define('NONCE_KEY',        'TJ-zinDOE7R2YOpSA5C-;)Zl?H]OKIzg9=}:|$BL794>qRi3}_+|>.K@kfu=AYL.');
define('AUTH_SALT',        'U9DU6<GXVG?-W2|_k*NN,>.cK1`fL-K|LjKZ_CZ49Z6gFOD.sk38om$ Hfd?-@ ?');
define('SECURE_AUTH_SALT', '$bnBHA7LL[G`#S{4u5wY;7-S.+`]ni>RL[PoJmFMaX8o:UP G-*p#Qb|rm)y%>*C');
define('LOGGED_IN_SALT',   '&fd.(dN 6P@eY,.z(Xx(te5U+t*+Z9AV]YiB+.rJwKU]dKowE&r) 5<e$#S.`jtB');
define('NONCE_SALT',       'wN>e#Nf7KXo)#}?WZhe#nVAS5JZVX)43e^=zR-GRNQ4G:K.Hy|z +cT&k*Mz@Gb7');

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
