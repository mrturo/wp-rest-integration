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
define( 'DB_NAME', 'wp_restint_js' );

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
define('AUTH_KEY',         '{A=m:vscNQCpFT`!IR(V8viXBvDwe|/jM3XYay^)R{(u`~L#@TRO 0^Sa8U~(?NZ');
define('SECURE_AUTH_KEY',  ']tTi#|h{U(,vyqVmV(R9[zYA vr?6TcSZnhF5]|_ZjM;<+Zx29Q4j-x3#[&|v&y3');
define('LOGGED_IN_KEY',    '/gPN,$YaaiYdW>L9?S+l@qZ]>nC_=*u88Md0,/V$p;5CD>`tw|;R??x%`RC8J>(~');
define('NONCE_KEY',        ',XkB+F1]_qkm(ojMBg+H*Hf0FDJ(qN7k-T?cBN*dxW|~|h)CaL.CAg|-Ttfil[7N');
define('AUTH_SALT',        'U]Ube+;E:C)VU[;Pf@iRCI#-a-1@Cu}.zJl+2K?5g$^^{M&Pidg{$xkcz}nevn~e');
define('SECURE_AUTH_SALT', 'M`r{=WuL;QsV+{j`_8+{bDX]}&9gAWNu=4.b67/N?t?9G$|^1zg)I|7Ur+(LUm {');
define('LOGGED_IN_SALT',   'u(?<)Q=kS%3rQ*PJHfp<ie/f6-5q%jDTsk@r(Ce@:lR+yts||]OzYvc+Hll/<@&:');
define('NONCE_SALT',       'U5D{}Pm%EjFx;=$ +6YCkV,O<S~ll,$<iL>ts&)i4hfR*M^N`$K0dC]*?47|;w@)');

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
