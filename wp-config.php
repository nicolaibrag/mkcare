<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mkcare' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Bgy$0tlptMyp~8[5S8V4^~wx:URH/WARiV@#C5sT]N:Ew*!@&4$fP;x)1t8arp([' );
define( 'SECURE_AUTH_KEY',  'ai96u6Q}(?7C@,&&ahY@6U=X]x-lv,o&SH1eG_[zYw=G}9VUkBq+Ldr8:bTa%`Ox' );
define( 'LOGGED_IN_KEY',    'SMi%D?jzL/PQWLCS`DNIr7 qkzp&gS:fs}S&,#D!?cy0B:aF(8q,6VB(^LgJy6L=' );
define( 'NONCE_KEY',        'ub7`8g@ETw%2`5PpL$18;xHK^3%FD`zko*OM-9x[xwOl3u&-=%VklB?q*QuY4TGS' );
define( 'AUTH_SALT',        'fc~lc`>ndq%slsHih4KWu:Z}4)l{A2nW@XC564+;WRdeO$jL ]c=;Kv}bE0~tyTQ' );
define( 'SECURE_AUTH_SALT', 'lYH1-sc,#EeZ>~ah)l],:0F}O$L7]0{*D_wgNXY2{Bg#fw/y:sk7G;zaz>qy* JX' );
define( 'LOGGED_IN_SALT',   'r(d/0OU-`aX)E;N7d$8t+CFV?M.1V(A=o#g]Uo24]v*q<4/09$QOx;`_J3%gVr%u' );
define( 'NONCE_SALT',       '!NUM8V($WJ)Jz=dxABX,P2SrLXK^ [ eXkCyNPSZ*Q^;Oyp%<fn;PcM6>g)eIX$!' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_87867';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
