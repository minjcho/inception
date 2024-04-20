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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wpuser' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

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
define( 'AUTH_KEY',          'eYVo:zD_}[zQ9F@2Sr.E;&tcr:;+p8I?:x~>NOHRLt_`ptO$?):7)=7#CtlUu=JV' );
define( 'SECURE_AUTH_KEY',   '7q=,-dDHqG-nM(lD#FS[xXxX^[+:`eo,#>9EB0=/e7=nce)O}!7T.Yyn]_$Rj9]_' );
define( 'LOGGED_IN_KEY',     '!.U2[2[MF-EYF[FLX`3O~}GDpN+MB-DL_JL2Ebo+[`}iC!GegL 6)JE`_cH}j8}g' );
define( 'NONCE_KEY',         'P>8-4uvH<*m.Y)tbKs6eq1(qo)A/N#zY|M7s,?<QHuI 4((gt<S8}>~mB,4Q~]wc' );
define( 'AUTH_SALT',         ' i/8%jr#}Vhrc4j}`,?d>(HfdGll8te:B{Du-}Zr bM(U&fK_ZZ2jmP7CFCMs`q{' );
define( 'SECURE_AUTH_SALT',  'g*&du>Jmv?y%|kzj!S zTD@B]aioC&<@L4&+nOb[TfHmG[b,H,%x]10>1tC60=ck' );
define( 'LOGGED_IN_SALT',    'mqtU!b,x=}ZFxpRqS$Wm3*nU1?~x`ZpjkXBViW7C[Ie$XL,O_!acg,B_)!};6&(x' );
define( 'NONCE_SALT',        'AAn_<nYG<#G0S=@:Zk#FTcM4)>H75`0^WB;`I$)j,4qFx``za)okIRzU{(yFh|Sl' );
define( 'WP_CACHE_KEY_SALT', '@/Jtr.Z:CWixtt4a~=RaZ%Ep`E@efV<c_LX#SC0rgh/P@KcMz~5/@*LUK>m~vhp7' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
