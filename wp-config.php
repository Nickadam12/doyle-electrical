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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'doyle' );

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
define( 'AUTH_KEY',         'I2[UK1].[Pwi~G2Dzn .UjR`i(zi :m<U}TK(`$PQKThRE|8w!9I=hsQAM9(W/}q' );
define( 'SECURE_AUTH_KEY',  'liT %o.XBvU/P;r+=UXWJF>x5s-DD3]Qt%X#HbW86ic5!|@MM:IuVehR5i`l?d)b' );
define( 'LOGGED_IN_KEY',    'S^.(=6DJ;@iz-v0a& 5^xD^0DRg(w=1]4~T*F& N6Dxp,&R=@(UH_+]78=lZbxWU' );
define( 'NONCE_KEY',        '0gCr,2L$eQYVh$-e8Kgoh(zs(5)~^C3aUM]L LlFETdgL,?:PY~X5Fp~ut.]zn/R' );
define( 'AUTH_SALT',        '1>x:mv/:C0z$h8EB|-9]0jPkr]R2ZACUykQr%O~$kOryo,gmq?4r.jB.(.YL[W8y' );
define( 'SECURE_AUTH_SALT', 'NHlp[vFut?[b=;&?&`6pf[kHA`*9xkEs$5YhBquR[gnNX#GMH.7EK-9|-S[bMeoC' );
define( 'LOGGED_IN_SALT',   'K[y%>)|y+y,GBeq,g[{je>uHjT~<8YVXpnH,3beOpY=*![?nBLs<M[`5}S~:~])X' );
define( 'NONCE_SALT',       'I%;Iq3h<fpda<%6HbQ`FfG]Tf%=D&_rlbUxDW,|E6J5O%coi=Pj)S,p)Lgbg9RaP' );
define('WPCF7_AUTOP', false );
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
