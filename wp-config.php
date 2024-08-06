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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'qtq8>rnp8?&KkL0s(X40zQXJeBGnA q;PEzSLk|Q)X;RL(~4eC$r$i*u|qP,U`Fo' );
define( 'SECURE_AUTH_KEY',  '=ZY`6aCHeT`VwM`kp%DccHs ZN!WfJo*:EMSm.u8]pq8*4cY@,^P&]0+5eky7MP(' );
define( 'LOGGED_IN_KEY',    'jEdx?,vP1[%aF0.E>;nIxaUhQ.mI> }AXYxE)JdZQ;~!W39Z}t%Xqjg~z$%QV7]V' );
define( 'NONCE_KEY',        '#9X,+3sIF,Uk&SSUB3ba&o0Ifrizs-t<>ohEBc!E97xMo]9BqSOpRcrqXCVXwK-*' );
define( 'AUTH_SALT',        'uV{i7wcCe]{w_?Cd=m<v=9o<2E)f;KZoP_`^Itk||CZR4= 6u8*,BxlbTfQ@n6@K' );
define( 'SECURE_AUTH_SALT', 'a]xN|,zEpYw@?AgGMyW&EQq[v=TbZn1^t)(9WJ+Sq6o^^(LpEWqwIz/5+}B7vqFG' );
define( 'LOGGED_IN_SALT',   'aRYu9fZP#V)O9wdG>O7o!j64qV#b]A>Wo]%d?JML,wwjEO/p3}V!Kku^4RL{_nNU' );
define( 'NONCE_SALT',       '?}v0@5#u60 kO/|B>mo(T5f/Xul0^!AZ--;-=?k}M5/V!*>>3,gRZ/%`aZcWxUIH' );

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
