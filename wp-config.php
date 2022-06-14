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
define( 'DB_NAME', 'simple' );

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
define( 'AUTH_KEY',         '6A;3|V=&Rxq,N9%0}wf$c-]FDugd,TG!IJ-*%o;UWZm2i*im/9wl.FBc5^v220%y' );
define( 'SECURE_AUTH_KEY',  'r9Jf~:SOS1_jN:B11`<(Qiig4,.3%e%*1/2YHL6xRSB#r jz-s6cDoI~d_5V5,wJ' );
define( 'LOGGED_IN_KEY',    ' ]F~K1Sc`Sz*OC&}lB9LzFF`_4r$,7<I9Z/1T(pu(-XA[1tUT>VDw..)R+^wBwdW' );
define( 'NONCE_KEY',        '9Kj}R4;_0NaHulA.3sAJSEX#)vF;k(3O_O]2r(2>Qr]b9#MQBl%GUA3Lxonx{/!p' );
define( 'AUTH_SALT',        'mKN=9D#Trp`E,vq5~=!*,4XCD]mr_}f[/1gF?x5n3 4Bdf68=ld&:X-DcYgsB@*P' );
define( 'SECURE_AUTH_SALT', '>< pK3|oKW2f#]d*|~@SCYD:F^(O0KvLg0%~f(`6`5nO.d-*WeUi<.<.1Ew39~Mg' );
define( 'LOGGED_IN_SALT',   '{QjiEb3BB7dBB8/]`Xe_{2{@55Wdu]o0Nr:vb7p@J(4V3+poBig@~gKlfB*f=j4.' );
define( 'NONCE_SALT',       'Aj2vyWY0/GMjaAK)WDp?0$$YD+E5Ox>T<%nVqaXl]-i8i2_sS5{YHat*Twrs_EY.' );

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
