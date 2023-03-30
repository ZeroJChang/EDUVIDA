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
define( 'DB_NAME', 'PROYECTOGIZEDUVIDA_db' );

/** Database username */
define( 'DB_USER', 'nsh' );

/** Database password */
define( 'DB_PASSWORD', 'eduvida2023' );

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
define( 'AUTH_KEY',         'X2X|_,U5f^suZqgVi^:|,@DR dbzG&M:C3HTfa]NH<AOGC6d,UJ^5*8yWDankIE1' );
define( 'SECURE_AUTH_KEY',  'fTkOQr;c5@MXd,fcw_81nz)%SxOtVT;DJ~[neF~5G:KW(OUE>N/q6 DKXnVS%^uI' );
define( 'LOGGED_IN_KEY',    '>2,cm.ssb>|MJRIVXv5iOl3)BIn<!rOh+Z~+e=x8S~cG;`SdVxd/_vc>Yhc>v;nO' );
define( 'NONCE_KEY',        '@Gc3uEHvFEX.{iGg~P$tTr(5X{%%y`Q`r5vj=ofsH9,`(|F4E2U8ea+N7But{CYs' );
define( 'AUTH_SALT',        '4~;gHySX>l![{SsZS$V&02@@I1B.h $_8fC/1npX-0Mk.l;AvRjo:#MRL|vkN:tZ' );
define( 'SECURE_AUTH_SALT', '>bT(I`N`!;U0/?Olr[W;V.`4lE+4sbKu4nF.hR@K6b2 Uw?OT;0t&V_M0|hiKHj*' );
define( 'LOGGED_IN_SALT',   'PbDzQ]NV2BqUC6_b;Q,;$w{c7ntfrq!<cjI=OfH4/ Jap;pvzb)m3Y<M,mKtQoy!' );
define( 'NONCE_SALT',       '6Vz;>zS0Erf49l?$)Mi{UxLtr~YEu(nXzeGr*Gg-lppO9vC6-YthIoa_hiEVi}<@' );

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
