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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'cHIQ2%I]iTc+5`#v 3*OY_M$p ={hWC`X)SO^Ekj/MtyTIuwUv6j0(ae0;^lEGiB' );
define( 'SECURE_AUTH_KEY',   '.]KH[e(2OA)^RQ6;u^NB~y[3D5+iuVNT{B=gD,7aV((U&5o!]ek3~DU/)QcK#5#2' );
define( 'LOGGED_IN_KEY',     'ne7Ke$]d4v|WM[I)9Orm_5wWau?,!#I&Yn2$n7|!>4RFL0l=Ie NmL5@OqHeC,FT' );
define( 'NONCE_KEY',         'O8p;W:82*DX#B]^Rh0(C;rJDU>h|M~32m5R-1q{Gm+i.!8x:UZ&Y.Zs<<sxrJfeC' );
define( 'AUTH_SALT',         'm=xO}jBAnJRwq]Y~`0,ccG_(P[V@7SP@_jDvteK4GLd5+07!Rb8y`jn8?#Fm$Mo[' );
define( 'SECURE_AUTH_SALT',  'gp</8jJch>1V:J@#zFq546(#gT2>/UDgP-l@#xRX_% gqEG[`%SKnY .a|D H}W)' );
define( 'LOGGED_IN_SALT',    'Ol%^JNI#~ndOuN,U&V1tz`Dd,J2I9z%#*e:4vc.wn`G!8?n%DacEAUbK,5KrIdtQ' );
define( 'NONCE_SALT',        'l4Q<UN9@|o_X{zR1{kPDi^GaBhxc<FPgL+fWMW,aBr7)B3+_?eVBawX2WP5+gd+h' );
define( 'WP_CACHE_KEY_SALT', '/((k;rZdw[`:]x2!Fw#wNz/<cal)T(3nfK~3o&oai@cU(?*=57:)RA(b|kbp1wDx' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );

/* FOR CLOUDFLARED LIVE HOSTING */

if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
    $_SERVER['HTTPS'] = 'on';
}
define('FORCE_SSL_ADMIN', false);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
