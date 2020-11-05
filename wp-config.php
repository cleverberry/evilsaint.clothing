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
define( 'DB_NAME', 'evil_WP' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'a7M(CeAYALSTja@' );

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
define('AUTH_KEY',         'lAJpS8&y<s]@Qz/~5i9RA<7q:(+~`JF/7Z;9YMh&G4hj4h[g+z]l<4*le52zIkc;');
define('SECURE_AUTH_KEY',  'T{`)!UjJ8 JCG}G#*XW7-S+k=HHu<Ue[SyNXu&H`A` Za8Wws8Y%o@|EK+WVf4|n');
define('LOGGED_IN_KEY',    'm`>,Kn+tnJw~rv-mo;,xDLf<:>0}Kt@qsDvc-9$e=%Rj3<=D|h497)i,W-dq5bx,');
define('NONCE_KEY',        '9vIbQWg}[qzI|>Fon;vD UuS[Y<hNkz%Ul+#r5;N;$frd<9x[W+GsF|,t*;#sWh+');
define('AUTH_SALT',        'C+Il$otG 16307f<|Z2dxFyw~XCnc~~H0g.ASA$]q%7*7unx6%;/e&CZIX3{yo>+');
define('SECURE_AUTH_SALT', 'P]p#wjZ}My|6,w<k`ENn2ZOyO^fvgqU^ &?HyTS>^YD-jIBL6 T(*2XMRId#^<]#');
define('LOGGED_IN_SALT',   '5;<`@M/A3PP-aH(oTY[7v2 -+k|hUvtifp%{b<WH,[,dlo?|o/^86+>@`F:~a|7D');
define('NONCE_SALT',       '|j7@hl10[81!3_.TOBw#q8@|9H@(l20$/O<oM8/l)iD*#<g4-x:`<1fC!Zmza)dA');
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
