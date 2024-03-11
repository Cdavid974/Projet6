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
define( 'DB_NAME', 'Projet6' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'L0M/VOF^RV:aN=;NF!UP&C<mJimr>.0m&U,!E>V 5dVwhqHq-!~!D{G/1-X+d.n8' );
define( 'SECURE_AUTH_KEY',  'H`gUicgo%M?m[@lDSKe-hO^g?2P,zy_KnzrI7]kXe<Yh_IC-8l2J2UxF[b#.cBBO' );
define( 'LOGGED_IN_KEY',    ')tmZjkTW%##R0U1qP4F?de_4tp|vxDGz.WjI=7m]Z3r>?X&qjc-]y(%paPN|cD;q' );
define( 'NONCE_KEY',        'QCmou@0H4Syy5B_`q|O,@+$G3i:hB/yvN]I0Irt1-4#qJm4kx`s*now7qE^<Xz<+' );
define( 'AUTH_SALT',        'O]%{U/5()XA-MrfdYI{O./Do(.uh7V%UtSiB1D$!;~}Uwk8f.?WJAxX;IOB8#(R^' );
define( 'SECURE_AUTH_SALT', 'XJfyu3*{0A5*TmD t;aU{>d^|*/=kPH^<Y36D(fH>Q.B4FR/TRvK[}h>PL%f+lj<' );
define( 'LOGGED_IN_SALT',   'LcdI( SHI&]{YvX2;-9HZ$pIW}vBJi~ehX6<AhN!7v}ssx}<R4d.[aq@QV+(E&lL' );
define( 'NONCE_SALT',       'eQZbR2lNu3>kh0nm,E$t;!9wId [N.Oe@NV],g A4dx:i~|-$|_5~UW2wv2]`U_/' );

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
