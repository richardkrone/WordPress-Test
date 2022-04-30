<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'WP_database' );

/** Database username */
define( 'DB_USER', 'wp_user' );

/** Database password */
define( 'DB_PASSWORD', 't4utz2n3' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'L5oBu0ukYDI9=`#R-H(u0R4,2:qW0foth~gk$kwCU[Z[eb*2R/L#M3K^]WFYjS-9' );
define( 'SECURE_AUTH_KEY',  'jL_yc5Fko?<P2N}}|@6x<EanF!+|(74TCPP(70^1H=@R~ob*!.ao/G{Z)0;hJqFH' );
define( 'LOGGED_IN_KEY',    'de>ns[}. lcJ*{TtvRQv=JvVHKQSC7|`W=/-{) !i{WuWH,&$~yl?so{%gZQUNj3' );
define( 'NONCE_KEY',        'SG> (GAdZ:uhQ`[n:T}b#!wU,c*N5Q~rDSuye3|U.SfngZ~Eu1EU;Y7 %*b25bf;' );
define( 'AUTH_SALT',        '_D^bpV3&SJ<]^fgAl7`&f@GC*(B+>;cwuN16%6Or=%&S|I~S3s>N:=zh!fXi7~VH' );
define( 'SECURE_AUTH_SALT', '@KU>}VEW$:p79_Ga@p?M+0?CbH59Y~n}h8p5_C{{&%GIF~f8L-Ee.p|uh!Hgs WZ' );
define( 'LOGGED_IN_SALT',   ',:)?MIj6n|vRYpqPZT_j.<uNm}f&wJN=jE;6*a6i,)@+JK>Te4`k+7RuHgUkR}iX' );
define( 'NONCE_SALT',       'g9#1 dS*S, vZhv.`G?o8lKV78|;qwmRjp#.cJUPa|4o.)D0hWj2rWc[:R5W O^x' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
