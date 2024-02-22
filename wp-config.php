<?php
define( 'WP_CACHE', true );

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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u820402488_yU1jf' );

/** Database username */
define( 'DB_USER', 'u820402488_wRudp' );

/** Database password */
define( 'DB_PASSWORD', 'PDa4d7mW7y' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '^|aR@Z`?m+xN=jw}IAG1KyQQ2I@CdIx);u1W,NR_[%wG./9*hMUcxhJU99 {MfUa' );
define( 'SECURE_AUTH_KEY',   'rf- #nCW+?2M]Ag=;GV-um,:T.A@yK 5${$xW~&PJmpVU8!D8G{l!%gYp|=]0Am%' );
define( 'LOGGED_IN_KEY',     'V xDgo$bvGB&{d.Aeru~!%p;0dX|vz_<nSXxmEu0h %!P,BNO6`%-s?6z!]i$_u`' );
define( 'NONCE_KEY',         'C0@BU:J*z<0uL2&gj*fky^AM``9DzSwcc!ncUA5a_?+!Z6+FHiwNXb_5vcPpW|3e' );
define( 'AUTH_SALT',         'ZDqak7y;gKKcHFxzZqCqsPPN|>9=f6/tnZpeGI>i<K JV~gSP2uKqSqx,34U6?|L' );
define( 'SECURE_AUTH_SALT',  'DPLtzkyg0JIID-YORHlu-F;%p *g)b!4HI#O-lNA.fL_l.D,m4+Lb?R,!g?JL{0k' );
define( 'LOGGED_IN_SALT',    'q![lzQko`Y/-^pm8 qW`-6E/P(b6jlXp[wseh}E:cZF{.s7+B>P1aDCj$.|boi90' );
define( 'NONCE_SALT',        '[(3L&s/@^LMb+RuJQqLEX>-B]vUPXI7S1(A]W^8s7*P2$yzH{d#f&zKN8TzInE;U' );
define( 'WP_CACHE_KEY_SALT', '4T{#xHa&A(3Jx230r3J/]v||Ry ?C8A`*#/-KT-6%#^{lBh;1DdwP<+9mV)r5;W.' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
