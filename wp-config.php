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
define( 'DB_NAME', 'mywordpress' );

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
define( 'AUTH_KEY',         '%7In+=Lf6Xq;$&K{|gkD/|%uR`ZuY}H]^qr3:Y~)U;DL%:-56*L?v?X}G#uVx_0&' );
define( 'SECURE_AUTH_KEY',  '30:k}E8^z?t>kx3)nE,;a_QM:P-#Do)710AZ]9Zx<I}+eq#ipMSbp.X}ab={<i5s' );
define( 'LOGGED_IN_KEY',    'rETq(#ap,8*Kx`K4&}f9Q10CszP,A|iyO^IYjYM~c2H!{CG]M?V-B}=M0Mg 0*6=' );
define( 'NONCE_KEY',        '?OXfLq%=>oL3(I<,/r()DRFnM)Q{/ywDIwA30ZCNcB}u;@}]$#Rc_!Z}GWQ^HyAC' );
define( 'AUTH_SALT',        'NOx{.&j$9enHO:8Hi1_nYY3sP&i2L7o8$}conB~6l]/cXW{S]YXw9S!{cL*b7=:5' );
define( 'SECURE_AUTH_SALT', '.?*/qdRVnsYvah5t6rl)1c3g.,~zVx4(l8oAgJ4 h{D8up-#d4Q[S]-]zcf{A<i(' );
define( 'LOGGED_IN_SALT',   'E}U#-nG|gm+IHMu?SP0hI55x9TFzZQ{46o1ic4k)0%VY9@Li$%I<!c_O4l{#NTVh' );
define( 'NONCE_SALT',       'J)P8k&-ck/1CMQ)(5_9 UM]R>5P-e{uq8:I<.(W~Xb+d@>aTy/6-]f`m]9pRlEmu' );

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
