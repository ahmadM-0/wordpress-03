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
define( 'DB_NAME', 'wordpress-03' );

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
define( 'AUTH_KEY',         '[wkZ s.aZK ?fHDV0yuPNm|WJW;zy@+TZ_w|x?7E|_;x1--gN%P^`KQ;g|@>{JI0' );
define( 'SECURE_AUTH_KEY',  'aD[>$Dalw nWy~^D{u1]3h?sV`R:8.}w>(FuEhiQ_[b;6(8i-s-gFOsumLm#Z7:&' );
define( 'LOGGED_IN_KEY',    '%-;*._?cplosU><F@{lhj*3f&B[em&4DWPpAU@RP;7}U#+dcZ-F+AJM%eqDDVL-^' );
define( 'NONCE_KEY',        '%Ym6i#4P6v}^jRWk`~`XwCj=9P|nrg|yv4zVGik3LY/j*Ma0].:gQ-.~HZ{`}mA`' );
define( 'AUTH_SALT',        'w]s8b$Sa_0Fm0C_=JK:E-&xNw#2~d,&ryJF?hLAHx!+?V]?6YEA70,H.KVu?re4X' );
define( 'SECURE_AUTH_SALT', 'Y.pGRYBN~U,>B v{Y)n}T|E/N)?l{A)uYtf&M4*mw,M^EI08aPi^7(o-CkXx:jef' );
define( 'LOGGED_IN_SALT',   'ukjScq#F|e?}yG^+i)=k9X,e6(te^dXN)EZHvJ`l|egSfEzBHC?W;,kW*&DHwODG' );
define( 'NONCE_SALT',       'txan0NWH5i0 !&PY?D*Nk&=hiw+dywfFsDPD!4VFN!B{o8CwRt?d;aLJCc=>q6(Z' );

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
