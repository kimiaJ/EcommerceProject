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
define( 'DB_NAME', 'ecommerceproject' );

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
define( 'AUTH_KEY',         'C4c3uFBmp+E$Xq>GoZ9An^:epJr8eqrAPM|<MF In.57![1f0a#^t/8)o7{OFTlw' );
define( 'SECURE_AUTH_KEY',  'QOnoH:mX,pQ<KZmsU?W0CQtrZ]f_l4d-w[vj]q(`eYUF{*esU&]!]ouv`/^x)Oxz' );
define( 'LOGGED_IN_KEY',    '+(w3;{AZ[0EfLCVJ#g[;H2`:,>R=M_WMt,C[5P{yQq>h6a3[bACWO. ke-seDk!#' );
define( 'NONCE_KEY',        'B%N@JG25)YO=[+[c,R!&1Q-rM8#GbTp{SPzciat^5uno<g7U} (udER{{4>PJ1Sj' );
define( 'AUTH_SALT',        'Ni0)<RUZQ,y2GrvXZ/Vf8z=trK%P}F>7Sh<=F<HX4jXylo5H~1$)T[(RB{h;u#qX' );
define( 'SECURE_AUTH_SALT', '7M{iS%)fuG{&-y?>c15PM_p~djS<ygB 8o?y 9H?dXH$#tHu<ZZM%HH)d1%l*}-g' );
define( 'LOGGED_IN_SALT',   '/#G9rfsAv<- :ug|VZ%%U.oJee_<C9k$,OaMTaR]Nd0C3_98dhN?s/p|*K.G8Ai,' );
define( 'NONCE_SALT',       ':Jx{yy4MQnd,r9kqV5MOVbAxJO_ivK_m5/%[rTbt5[e%:*G?l]M`4,+Ngf%yDHn9' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'sdof_';

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
