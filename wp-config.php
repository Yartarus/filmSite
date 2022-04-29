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
define( 'DB_NAME', 'filmsite' );

/** Database username */
define( 'DB_USER', 'WPUser' );

/** Database password */
define( 'DB_PASSWORD', 'WPfs2022' );

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
define( 'AUTH_KEY',         'Io[b)JnQ$vuv$f{*z<hNy?_[N&{HQSr2UMhAg3S*Wg7Z^l@AKJKr6$rRxWK18t7_' );
define( 'SECURE_AUTH_KEY',  'CNfSX-6,U q[2dg;^ y5A?x;Z&D,y%I)[i>+Q|0LIt#-!jr3H:mNXZQG|(?5M Bg' );
define( 'LOGGED_IN_KEY',    'z85,y_*d{g%;t@zX7n`Lxjh} @y/piV:lu*d&*On1+{})|hY|G(0nIBN~O(Uou#u' );
define( 'NONCE_KEY',        'LA?}tplA$o`[g^:!y1VV3]m$:[!cC,t?USR&j uOM#|NC6>EgNC]m6{)v:ngm!QQ' );
define( 'AUTH_SALT',        'Q~qOdmWz+y.xCj<2w+aJlHpD4Pe]^>*O5K`:%rxoOcJ)NLyH- 0vI21_c]2-3&-u' );
define( 'SECURE_AUTH_SALT', '=jnp[dLLr?OR3mcC7AqguXE)AaB8P [[*EnV&8Wm<u2K9xCLi0B{Am9Q0`2{`0@>' );
define( 'LOGGED_IN_SALT',   '^*Mw:(GJp`jebHK?K%J.)3! sVX{F*Sfh(:foWWY~~z{UbBAtI.!YO+9fj?SMej0' );
define( 'NONCE_SALT',       ')Ihv!,ujT&,9^c,hMuCJGX%>s&]-*Bz#@iwPPY74=xjlHIQEnmlWswk>7@1U!0?u' );

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
