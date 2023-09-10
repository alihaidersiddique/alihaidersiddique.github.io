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
define( 'DB_NAME', 'alihaidersiddique.github.io' );

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
define( 'AUTH_KEY',         'hSSUYI7b0 a?,I.kyl,`~cRFG*9FzPYwBz+d.9%X_o].5<V7@;=Rlf{$vjk%Lx_r' );
define( 'SECURE_AUTH_KEY',  'MM~}t?12]4daIP1uy*pji$Eu=S&p~[k<No*llSduLbQ_7 MCZ<_pS*q@+t$<)NIj' );
define( 'LOGGED_IN_KEY',    'O- DcU3af,p~Sz,eF]YN:QWQBu9bzAkwtSf($j?&cFh-ZQKi<7>#]`&YgK!/E=0o' );
define( 'NONCE_KEY',        'BU`qXiQ09@7sQk#|Lu6VBq%oJyrZFuw~rBmxACIm`+MyT**&>zDu<t&sM#,4}/N2' );
define( 'AUTH_SALT',        '`(3Fl49VmN9y*f}OOz]pKgDwd+[*mVbk>#7*/om|qWbarO2%s+;XA<FJ5D:##JzA' );
define( 'SECURE_AUTH_SALT', '8XjeIYS*_xmgQ|$[:*3;I^I1@T iXf|7j`oeQ&5CpePWYg M/d0j[(S_c9p[t;Yt' );
define( 'LOGGED_IN_SALT',   'd;2&,PVR $~R`{aLy5[o}-STyzG=jUn `j(X7S8,RFq)&$!1^/}t6,op%#~c-`35' );
define( 'NONCE_SALT',       'xs)k_L*x{o*{%i~[3h8S9|O_Hse|:BL/{]j`-Qu3Hi/J/D_5[TT2&ckcGn `z`+K' );

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
