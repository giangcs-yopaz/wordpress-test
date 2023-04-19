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
define( 'DB_NAME', 'wordpress_test' );

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
define( 'AUTH_KEY',         '8m2m@hy|vzZr9(ES2T{78BAgdMU{<}.D8Q8*Bs!,}=x%n2TDFG@Jz~)>%k5@/XYZ' );
define( 'SECURE_AUTH_KEY',  '-2zX:y f{[_k8h^ejCGts#1f;dWpaDs>nFLv*SmyDBrQRJt}VF1 iKf!0GWtY. o' );
define( 'LOGGED_IN_KEY',    'DB/@~F;~E%16[V|Wyo_G{[@li;(,9Tw~j(b2)TzXh-p%yN=.sn}evxHw##I@Q=oY' );
define( 'NONCE_KEY',        '`@cLS`7A5eDU:m81J0cy?-{m0IO`2?L^]q,uYuDiW)+`?*N&U3zHzgXH$;NF)6Qe' );
define( 'AUTH_SALT',        'V0B]trvUFPJEl.-.&VWf1|y(b*ktmYD{L)+tte]vKOT%!U JcW94hb1`vPp_nhSZ' );
define( 'SECURE_AUTH_SALT', 'j_WyV5PrQk<i ~o*>F|B?9Il; gPB4CqQsHmWysX+=Vx[<4?o&88L I6g;;vB3+2' );
define( 'LOGGED_IN_SALT',   'FSaYWr5ZTQk)a+Li%+Q!z;nP2t%+y&^{ckb6~$y$+>zPxEJ}:)L,oAjD|gxh_:xo' );
define( 'NONCE_SALT',       '&U3xWpFs (os{8vSh- Km5{/ORhIm#aHhq%9}o:]6x_6;VN&o_$q5G) xWqq5| p' );

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

