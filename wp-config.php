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
define( 'DB_NAME', 'portfolio_db' );

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
define( 'AUTH_KEY',         '%?f{]vy_T@GKWq_!M;e}1>[$QsR+>)^L)1/UfO4!^LQW<cG=je}~BKTML(T6z)0x' );
define( 'SECURE_AUTH_KEY',  'yfsT_jhh|h4?X9RUCGzdv8PW~h`Mx`sQ_ddi5W_vOpTT-n/!dD.<7 |Cbb?Ld.vj' );
define( 'LOGGED_IN_KEY',    'O.>IDRt5O*gL5ZTxhp*>(Jzt(aYZv)yCKw5&]DaRf8x-#lhhqL}j2`SrzY[ZOQV=' );
define( 'NONCE_KEY',        '>e[`COkLdRz&LxKhm>w%!d>c9ehR%UzZ#8J&/A@pHQ9hU_y}wLVS,lv0J0sbq3M&' );
define( 'AUTH_SALT',        'zNwgE7bR4i6Jz[eG4*C4 E|o>C=?w%#8J)8H9!]kp_1TnjqyQewZ/Yeco7?Nq=e6' );
define( 'SECURE_AUTH_SALT', '|dE.*~QVd=8L=kY~-[+gAs=YI<bJ2A5{yr~6l}+^[-pTk#KKU!Vh|u&T4Ty}&P93' );
define( 'LOGGED_IN_SALT',   'MHJ}N6H5(r3NaP2`hXBc:PkgRFYrR1<>^/!SKLN2LLS6igA)nh]Y&G)~Owv}+V&2' );
define( 'NONCE_SALT',       '2#lo80)DURC-wNlf1T|~Pr&7_lPp+`<UP<cjor{CGidw{nq1+#i+!cWUV& !bJSz' );

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
