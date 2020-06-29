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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hazo' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '7r@SCgtr%Y<Z0~KQj(k_IUoS(EU2%@1zjhetIuc|_d]?+$_;ET_v{N}B ,=!<W4J' );
define( 'SECURE_AUTH_KEY',  '_^KXWn_=QGlkSP{t+44Y8xU.|[=u,N<NI-zr|/>(MPcNlc$3Ns/X9^p-UBc5Q#BQ' );
define( 'LOGGED_IN_KEY',    '5I7_ii:uy(la+54rgGk^OyE>%>mwN-!;2D87nhd.jiWG5V0eM/Le8tYv/w|y0$ww' );
define( 'NONCE_KEY',        '.%.L*Aun[58bcmaPh?qb(eICiE(XvbR9gj..%={DfOLHSW$t,+Q;pvO)yd;;9;O}' );
define( 'AUTH_SALT',        '<0dz>YLq{-LNV!nxI{ra?E4HLewd_5O5;Tg:`WS/D^(GK4s&z)@[._Tn`;pHbTF[' );
define( 'SECURE_AUTH_SALT', '2&#z5Eip~&7*6=h?zWY5NOk|eS.~9G;`u8=JEG,[p:@[I|G (RySWasIBo<c<La3' );
define( 'LOGGED_IN_SALT',   '|PtPV-1R;y6tXw0K(;iZUY:J-j-*AAY|`mhpDK8Hcp>x#RHYvdoLDP`_acED5to1' );
define( 'NONCE_SALT',       '/I]tepLF?^a:i:.3vv}u316*n)>$92t^ FC+vNfa>+JY:|P7WJjFGo#GxBTo?/[.' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_hazo';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
