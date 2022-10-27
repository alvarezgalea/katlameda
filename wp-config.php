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
define( 'DB_NAME', 'katlameda' );

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
define( 'AUTH_KEY',         '{3 Ox`&0?db@;TqO$qr/_N4Zm:a4E1>mC.>8g|6Ds0lU)4Eb_&F(Xf<}BXs7 ;^U' );
define( 'SECURE_AUTH_KEY',  'lWG^0V6k4y(<cd!}zL]_^hn?.LT=+CkD1^u]d_`i5_wvC+mHfWoys2ZDcF]k2H~b' );
define( 'LOGGED_IN_KEY',    'PTuL$N$] ux{c4jIt){NPK`G,IpPDf}),TjOEQ&J$]a</myqKf5=^UK/%G?-(|tI' );
define( 'NONCE_KEY',        'x_W%nGNkl):HxI1#yqY6fgqorRU})=?|C]S=--04B5P&jcH>Ey8tpy-L^G^PEXD}' );
define( 'AUTH_SALT',        'mVPFAdJD!Fa{=r:$^=]hxl-e(OI| iSUdhU-,g,MN;lMh4}1-h=45{{B?:Rk^l:U' );
define( 'SECURE_AUTH_SALT', 'vk9JS5,=x:hyPT58.9x#8rCY7Q:ql]mH6LEGIY#fa0f.CEw3YpoE)1v1I9+ss(QW' );
define( 'LOGGED_IN_SALT',   '}pIxP=u^K=-FN +A/0}u|/+1:Inz8*Gy0a,n@p0SOo]R]5yIq>WEwD>wYj?4>YWL' );
define( 'NONCE_SALT',       '(|x(Wc$B8_ ^5@>IOV6A~UM %?:<fVyn7.1FC86)D1x.RMMaxgdmLF`kU~uWX`H_' );

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
