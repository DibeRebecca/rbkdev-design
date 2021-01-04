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
define( 'DB_NAME', 'heroku_131bb9b32e9f7b1' );

/** MySQL database username */
define( 'DB_USER', 'be3405ea7df4f8' );

/** MySQL database password */
define( 'DB_PASSWORD', '4c8e903a' );

/** MySQL hostname */
define( 'DB_HOST', 'us-cdbr-east-02.cleardb.com' );

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
define( 'AUTH_KEY',         '@[cH?Fmgi9HHJ<:KSzqFU&`2>IjfWs@yrMf1+[1o{!9Xyf?8h?7&Oc,o+l1Qkr>Q' );
define( 'SECURE_AUTH_KEY',  'Q/C+N`4nevGfqve]`JS;P;B4KXPxG%h;*cm#^wrG4PQR*<;r2E_gzZb=-.cg&HNu' );
define( 'LOGGED_IN_KEY',    'vLS/IC/LTD>YhQu$bZZ[2^f[KUo~1j 8XQiQ0trp5 G;eEz2@`D4y,~o9|9hf7:1' );
define( 'NONCE_KEY',        'Tk-.=*xI~*+9ux=zlY,P}BD|6c;Urx(NJhwm+b;52A^)MlYgBNO;ZUr;X^WgTDT&' );
define( 'AUTH_SALT',        '3!9,b5(6+-(nz<XNvHg@TTy#y`S|QU/4-@<KKlCvY}S2wKB`YG=ND@S]dxJx0s1I' );
define( 'SECURE_AUTH_SALT', 'D^Wn{7=@]gIAdt,0]I9HPfemVDQ7<uGFj5PV]%Q~~>ns9+ZM1=]OEEJSH0gG@k_v' );
define( 'LOGGED_IN_SALT',   'b/NnK.-c[)){I1]RbfK(sA(s=d[O=PU:hW]mW<A:+]u~~FN( 8@.]33J<Dmt0q[K' );
define( 'NONCE_SALT',       'Eh-)-K05]~N!:Qdt}K( KDi$3bC8&?K6WZHmA(!@e(f$_O14 o+_3<XSK,H&+`z+' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
