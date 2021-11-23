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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'flexcim_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '%>tsf_Qiy%$K5I1v-S=|JN%c2mhOx9&nM/L1I*Wz>->yo#lop[-n$t;r[{VS.6{u' );
define( 'SECURE_AUTH_KEY',  '`x;?8ZaP4o1`t7{DAz=Z%dSvlsVuCC{rp>wH<C,7a9Cdn9S~f05B89{hK|yex/z<' );
define( 'LOGGED_IN_KEY',    'jSN_578y&oH9069`7Y5%TSRZthzfINXE/~Wy dFpG`$!tI.8YxXxz[NLoSv6`GY$' );
define( 'NONCE_KEY',        '&T{D^T8v}#F#R2#T%J[h;u^nDL~nFqy-J/NFkSw#.4$>,4.0aSofE/ui vr+]8KY' );
define( 'AUTH_SALT',        'es07JL&K4m]`&(? byDl]utE},#wiV*M?!TC1SDQf/?CwU[Dr}gYkksBH1.DzBvC' );
define( 'SECURE_AUTH_SALT', 'NWup%m9|(aS^ZN`^RI2PVyv-i|B{]z~-$_oR&R;Y6adIVLUkwm)xUs5+oFhQ[|}i' );
define( 'LOGGED_IN_SALT',   'Z.`Du_@De?y%P%GI:KT/Vf#|yCbBh8Ru]&Vq,!#fu:ThPwk1;<e2COH!`[+KoF&+' );
define( 'NONCE_SALT',       'X/pZM1~Imf(&~^VK]wC}|qlTBZ6U}3?.yZ(-17KEy&f;XiLBk x):,_I$L AY@?P' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */

// Disallow file edit
define( 'DISALLOW_FILE_EDIT', true );



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
