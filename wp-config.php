<?php

define( 'ITSEC_ENCRYPTION_KEY', 'KzdjTmAle2dSblk0WT9OUjh9IU5zTnAlOl82WHMtcjpGOGxgbS5HODU1ek5VUV8xR1U3P01HUjlEKERnSFcuRQ==' );
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
define( 'DB_NAME', 'vainstitue' );
/** Database username */
define( 'DB_USER', 'kyleSAnNiec' );
/** Database password */
define( 'DB_PASSWORD', 'Contreras!989' );
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
define( 'AUTH_KEY',          'oPzPp3(7bIk-i&iFat/T/0!SBNC.LR1vCnfIo;$GL)kABHGVgv6I$}ve+4qB!NZ0' );
define( 'SECURE_AUTH_KEY',   '(dv9H0bcTKUI$%2@6-n?H~whN2xI;A(/L;H9cK3)d@c~c{< sHm^4@x5cXJ&R^C/' );
define( 'LOGGED_IN_KEY',     'nfJB4&jt%3a_U8Vd_RPL*l|`):qZp^CDOH%w`IQ{hNX3P3$-cl]%&eGmoPks|VsX' );
define( 'NONCE_KEY',         'zYKRAdi9{,P?vO}>R4Y.}pWR*ZIMH5=$Epd<}xv`Soajq C/aG<,{bGM8AxQ@T{K' );
define( 'AUTH_SALT',         '#h6 mr5jo7kQW`4J8tNs16WQa<Xz?reKj*)_p2/7Kn&Cn]r@{3>pV!gb[(LvB]w9' );
define( 'SECURE_AUTH_SALT',  'SvDevGtw+8;1gYgAFRb{) @ihlQ*.9?9+1V!%_OTJ@9b2EL#ka:!CO5fRBG:sXwP' );
define( 'LOGGED_IN_SALT',    '3$f`*E^=PVHL!iQ~CB<AacAkbW4kw%,{.HeC7|}s]Iat04kK9#5^L7h[Gz#pX%|D' );
define( 'NONCE_SALT',        '-D56=)i1l}0bPH]G>Psh|ejHiJm1)j&dijZ^enO0BdPD,NO)]K]I9%`9<~/$r6W5' );
define( 'WP_CACHE_KEY_SALT', 'i{aqn87HLV?UxJdY@an8596c]{1P%wcZ1_.zG!UyT`,w{reh5&K&I|q.H@5S)Z~f' );
/**#@-*/
/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';
/* Add any custom values between this line and the "stop editing" line. */
define( 'DISALLOW_FILE_EDIT', true );
define( 'FORCE_SSL_ADMIN', true );
define( 'WP_POST_REVISIONS', 5 );
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
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';