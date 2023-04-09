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
define( 'AUTH_KEY',         'NK7f&Jv/UF)|Z^<?=iRX>2q]a4>-qzwDpm4.oGzl&WG;b$C)z[=Ppc$X:2y3Eq7e' );
define( 'SECURE_AUTH_KEY',  'ld4795PlAgYOAIQ6ZGmZCqW0Y+i%AbRg3I #OfNjE# (;A;V;[w&iO3vBdu0@Q7h' );
define( 'LOGGED_IN_KEY',    '%]IUa0GL2%t@8jsnB%(k.2*tVpUY`WGQL)[$T]hB#LARJMrrGD~n9d(}Fx+7~O}|' );
define( 'NONCE_KEY',        'ah#S7B&=*.VQdxX;HsU5m5A!_I5QR3zgB(!/A,C.6R?oZo)XPS~#0BoNG#yhI^?P' );
define( 'AUTH_SALT',        'x}3LRl(>}W7ku`saLfSQNt-1_X;W7I*rKGJ:]$O&uXoNYFpQY?s`RG5-aK-~eW+(' );
define( 'SECURE_AUTH_SALT', '(`z6S)vB6!#~lJPz*+EH)q.tTa>Z[3bmC(}99>}]bu[Ti^P4h:2@awp~jC5(_VdV' );
define( 'LOGGED_IN_SALT',   '$Sv]$4{(DS8i5IeqCO6.Ev-}CL?/1T`&qn)~SQCXnL9N0p0-V:jw5ZR6P8x;6UX9' );
define( 'NONCE_SALT',       'S.%8fdilq%@(f`RQuBeUcf#K7`j?4KY Pxssk|Qo#drKK)$81x7oOLgp+ZfwmDT|' );

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
