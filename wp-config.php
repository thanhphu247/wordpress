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
define( 'DB_NAME', 'mytemplate' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '' );

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
define( 'AUTH_KEY',         '0Kd]Gsfyc;z+Y*ylN*BEKmh5k4DO?Hg-xyE+@`h[|S&+KddS~&FtOM5HXXx!OTfD' );
define( 'SECURE_AUTH_KEY',  'j2Ex>@N4M=5?!f)JpmllRT0j9gy6SyzvH,&Ybe[F7b~6][ }_)xQF:0kDZVLYF(I' );
define( 'LOGGED_IN_KEY',    '[U&w`I9HhN&$gVdqu *J3V~_&WW Wx^o,CIh:km`AVad#SnB(IHl1+^+})s^hBEx' );
define( 'NONCE_KEY',        '*Un&{L}SOos7r9v/TBnJWW(:lSA2h=m$U sT{d8_*O&{}b9hL0{h(L*)8y(y4sL9' );
define( 'AUTH_SALT',        'ut^Z%7RP-VpOyPzSaY#<WHu>S4a,Pdlk&p7CRs6N,;MEz#cW$g&eB5u-EsIRFJ/!' );
define( 'SECURE_AUTH_SALT', 'OL}Bt<XmCX/z[ANZ]zf/)3zZ9DJE5]!KnH[;zCYy$kJ5t|3H.Qild6.~Ps!w$W[b' );
define( 'LOGGED_IN_SALT',   'WI2]BZ~m!:V;;dk ((LNCM>[WZIM6H8V/d41UE&FRONO1OT0b)P2#hIhj-{`DdF$' );
define( 'NONCE_SALT',       'hQDzj^^ dA:med8iIbe@_FW>YVN),dteK*51-PriWcaUh6NhntakRZ>PF98P*%37' );

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
