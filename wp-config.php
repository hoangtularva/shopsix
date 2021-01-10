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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'shopsix_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',         '#0%vW.Gnu@HNGQ}~n;h&-_w0&[Yt}iA^TH4=z{YE%u{TMoU2&V0F?waf1Jm3VxwT' );
define( 'SECURE_AUTH_KEY',  'rNsTK_.Z^Qi]_.WrM~D(TSj3:kUn=g{a~lw,ZbRTIoaL.#=EItq=;aNiK6IG{`aX' );
define( 'LOGGED_IN_KEY',    'u{}S7EGNPOGm-tgRsvDg<GR)D2>VdAZYyW}~qosos,@o-3ya=g)Sue+YZSAA{j_,' );
define( 'NONCE_KEY',        'cO_<h06k6B]rU&4]vXBUIh0M86.j5;<?V[xy7QZECyP[Bm`w9nM9l@)4UF;OSy+`' );
define( 'AUTH_SALT',        'j0`~G6,<EjrMFx.[|2;D^KofWg<Zc*=c9uO %kdGqG?fPfGQ;m:H`=-urYpW@l]h' );
define( 'SECURE_AUTH_SALT', '9r4qf(XJ0(@pHI+|*]h]D?n?o@oU^(bIbioG^sXfIH+Rm19u_L-[D.LwQKOxFN<N' );
define( 'LOGGED_IN_SALT',   'PF8`D5b !z0}rw@^!^u*s> CF;3ZwKp@P:$wnFNk42Q.Vb@dOt$r(6q{M}HX(C7)' );
define( 'NONCE_SALT',       '=1rk]nC!}EXakE<f$x}`GXaa^m8!VI4%o&2*,O$%12)U6532!l*kI (1`--Vq6MD' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
