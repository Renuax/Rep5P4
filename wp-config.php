<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'projekt4' );

/** MySQL database username */
define( 'DB_USER', 'Ren' );

/** MySQL database password */
define( 'DB_PASSWORD', 'vQmRMeCf' );

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
define( 'AUTH_KEY',         '[;2?6jeD*L%`Qj)RDLgW*W8&hj&.@fnzPUh0j@oy=drS6_Y@P(C#L`{54},K!z*v' );
define( 'SECURE_AUTH_KEY',  'k_eSrGvE+=pjX(R-Smcg L%Pg0 uCX#R.9YeU(F$p#wUAKwaRthvE:xWTnd|7ETW' );
define( 'LOGGED_IN_KEY',    '~*tE+uz Q~[]7o(Pu>nbb,XtR^P gKc`Iw,`2YgP2Rm#`]5U:ryQR@nOmt22~sd7' );
define( 'NONCE_KEY',        '3}^hlPD1>[ZSoR$GhSV)~RA9*FK66cFDia1@6n}HjW5pFkZH+zAzE[BAa7JBUeFb' );
define( 'AUTH_SALT',        'mX?M]<Cz[,pFEwI3]?1!UtqWf`UNZgQZ$p^iT6XlD}{cEfvCM/*O5Wu(Dow4_e:b' );
define( 'SECURE_AUTH_SALT', ',~=swy3<vc7SH9dZ2M.bAK`-N/Hht0KX6vW~./JJFH~C),?k50@lpl<y3@GYcez?' );
define( 'LOGGED_IN_SALT',   '-874W`)SE]=mX_><nv9eM6c{kr~ElDOB/1T)u|l{0ijHt<^uX~la>uGl.dc37&~l' );
define( 'NONCE_SALT',       'nm(i^qHJv5U:8bZ0 t^Uh|-COTGEzPo{2Pn3:j.-n&&uU+,`bQSs)3q(j:Nk~3)k' );

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
