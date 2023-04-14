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
define( 'AUTH_KEY',         'ro;*aPRGy`Gx5u_iiZ%~*.h?!`Im(hkmK/lU6nxlA>ke$<q<?Y$$VN}rM(U|hj>s' );
define( 'SECURE_AUTH_KEY',  '3Sr,~k2-H[K!&eM,-l9D}a:d)`hy~]kN[n$2N_QDCx<}_/CNRUI]gOj?zt2K;eP6' );
define( 'LOGGED_IN_KEY',    'B+7]sr,3Q(et6$WoEBD**UrADSm{iH%HTx{AiUD}kJJyl[1FE:-]%d12b5 ~htK.' );
define( 'NONCE_KEY',        '*2P17o1|IqOEfN<l_$nP=a0cM#+ZOSvm*rnw{m>DyOM`@JR8]hE-me+3d-ry_JSt' );
define( 'AUTH_SALT',        '6Op44.Mwn7Y?+77IGsCte[U|?TZM#1R>--9#.XfZQ]{I+g-;|QaIiq;lK.MhF3oo' );
define( 'SECURE_AUTH_SALT', 'nQ$XHb-HB(R7xE=][uP]G$3-m0?`*pa7]C#$L%W/ol)$^.@W)U8A*A-JiC$Q!Hq>' );
define( 'LOGGED_IN_SALT',   't$L<q#1iLgj5TgeEYDHD1Y^%fJxBZVXBz[9&O5py+@A5,3pFSq-rJA*DXC=3LGN7' );
define( 'NONCE_SALT',       'LdXoMH6^Q.4MDSZeq }5c(5XvErAi|^f7}po}M$$*U^l&~h(U=-ceL]tuTFG<G2+' );

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
