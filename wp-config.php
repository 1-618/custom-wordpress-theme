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
define( 'DB_NAME', 'custom-theme' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'msx$%!q~hP%q=Xql.h9u,SIUuersKlMz:KaGY^q7w Qv%=T[]RR.~ZM310sRGh$[' );
define( 'SECURE_AUTH_KEY',  'W*yS@<86}R[so2OSw2M`$`20Pr9*z5|Anmx1nc(EV$I#!saMjXtuI619aq=U<^-h' );
define( 'LOGGED_IN_KEY',    'X^s0Nwsj&k+qb_p#=U`ZqoehBS(|l+B]2r_cBmBeE#d`cNLi/>1,ck;#3o^fzsa8' );
define( 'NONCE_KEY',        ',tCI&[[ee7{F}4-,b02OH!`6 ,x37U!:0XZ+J.&{a|R `eK.:Wh{%-M],eCA#gYy' );
define( 'AUTH_SALT',        'T2Am3Xq[:`kE8-B|NF%>4_Tv-`4v7nbbWI8eBrHQ|k^SWiM=UnpT9JgFFmanv`Zl' );
define( 'SECURE_AUTH_SALT', 'C]J(^1S0`Gjl *Z@c-O/|6`yY7H|+){]!d9x+s$a@Ro2U0NWD=hO-3ee`G@a]hfD' );
define( 'LOGGED_IN_SALT',   '(H:9Uf41bS^3vnfYrNbX6[`Gz;<Eht-y]M78Y:2zi#=u@yn.q(fx0t!TgWn|]CiV' );
define( 'NONCE_SALT',       'x]Nels`H@HP[TC-tQ}oM5 nZ(cFv,`[ag2N}EmMvpg~&;b<,^N{p^rc X!0ncAs<' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
