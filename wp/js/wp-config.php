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
define( 'DB_NAME', 'wp_apirest_js' );

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
define('AUTH_KEY',         'f:5s&.tglvA+|3O|4+<b_?a{N+/aCy,l4--9Vuw&F}gGnp^~rv&b?Qn{Ac2Y#`@6');
define('SECURE_AUTH_KEY',  'Ot--k=#UG&>c%/L$|WK3I;$/)5R~uiOvGcO[gl=*rHbp:QFfd5GK}b^Tvw?2?!UN');
define('LOGGED_IN_KEY',    '=a<u%0[w0pkCYh!R.XWSCdY>g%U|gdE$kBuhs3hKmg;cu/***/% cd`$EE!+flC<');
define('NONCE_KEY',        'i3S`4C9@xYyt[b?/vI-_N0exal.RC6m<efYd+KH88&gOX*Zn_d$-EEO=??2wM,&;');
define('AUTH_SALT',        'MoxQHzIXUb=s_r4oW;I|B2eR30J+=h!2c@Ezwam|=,DhNF;+m#E/Z)8N*=yfJp`h');
define('SECURE_AUTH_SALT', 'ObU+].-00wwFdpoxZb~oy|zd95oy+RskA1cC|vJNRXI3hNx?q-[:9%?T<iXm8895');
define('LOGGED_IN_SALT',   ',d,0,;2-0GKw~RaVT*SSW&Txhm}hOdPw&Z-|4NHZ|r;qT/njVaE9+{t=E@aP+TJJ');
define('NONCE_SALT',       ':fP9Fx3=JU>|wn,7%I2-Vj&<=6#(G+(i?)++@P_GIW&(Bm!D+>X:fo?;BAb:+b(T');

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
