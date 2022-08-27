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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'meezan' );

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
define( 'AUTH_KEY',         '8!T *F>=6!OxE$K&s,&WSas&^WU$mn79;q#sY-@@X2p(vy?bsv_:*Me$.*]pXMK5' );
define( 'SECURE_AUTH_KEY',  'Q`b BnEC,5f?7d_HiRs7a(0NSI$FXC06%hk}!u5u$h?wq0KOh8k4fu5Jn1:`<21Z' );
define( 'LOGGED_IN_KEY',    'm0*<vwRkQBLW=bN7 +f^SU}>_FnJQaxCT?TcY?osA!dDwD(FcEsuDFO%izF!&LZ?' );
define( 'NONCE_KEY',        'xJHg;g?,Y?p&F=SEkE*&l`Lc}Md%:>:,Lfnr#&+kb9Rma3{CW?D+7%2xhem.>F8O' );
define( 'AUTH_SALT',        '3XL{q,L@`,#xBQ&aBuUIY-G3>BP<*F}wzN CvWaJTWL-aG-Bz3,jXqQaniSE.zBt' );
define( 'SECURE_AUTH_SALT', 'laCCB<UN4Q8]a!Xc,QLByj.PXPs5k{gJdO35^9|6>|-B+-b<yrP-A0ZKfPU`[JS?' );
define( 'LOGGED_IN_SALT',   'CXCIAQDE_Yq(9YKDI~5{qky5Gh&=[md>W=5s0]BWK{de*N@Y`9(RV&7v!zi@?^dY' );
define( 'NONCE_SALT',       'a=Tus0+hr^dN40(5G]2zlzYKRA;_Kj5q9/{^A*l!M=%Uef`.Y G:{01xe$^xL=U#' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
