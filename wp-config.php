<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_site' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'Ylu~.Y`lwho}kPPh=?tdaiU-WA#-*i?d=tHp`t<XM@RJq,RSg@79%K}[4,=AgPlf' );
define( 'SECURE_AUTH_KEY',  'e4@tRC`lo!X`j.$+eG.B&bw?1~=%$m;L>p=W<WjF+:*%EK&BvRx_Fn5@2J$sp0o[' );
define( 'LOGGED_IN_KEY',    'R*Nu1PyWbS:0{fw^{f$zl=6;t#QhlTlm|0]lM0LE~ S8&3}aE{M-N8_{;^PXw0v/' );
define( 'NONCE_KEY',        'd%J0DgZ,n`-LuG<aS_(pC05-@P0}*:YsR3<.0Tk%m8LP;Hj,lhBN2b-7@*4*4l``' );
define( 'AUTH_SALT',        '_Xp_bnbCuCM0fi0}qXU}p:/CkHV=wy/=4]7R%lvGc}Bwrb=ApAHDQ&{gnLHw0I6;' );
define( 'SECURE_AUTH_SALT', '37]DTyDcb]5^%o7SBqKj79_+F#kj?f*}6Y+Bw!LVsQx9hz-]#KVO4m]75XdUSQ-e' );
define( 'LOGGED_IN_SALT',   'EoeN%tk(5l86EUMX.+Rg+|C03n#nl-zd9&437.ue2]@Bvu}/.f,kiCM{y#Wlmj:{' );
define( 'NONCE_SALT',       'M<KFFtPgeP.Ce<oW|I=lU`0K>`d.QF(rD&mKwg4d/d^fE2%J64E+,a38AC$VT^C{' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
