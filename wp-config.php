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
define( 'DB_NAME', 'churchdb' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'toor' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         '>;US3klE_%Z<:.jDwOhr89fzZ:f9qsYRkTTjZ_Bu?__KZc;u*hp-fShjf^+Vv[bL' );
define( 'SECURE_AUTH_KEY',  'bPN1<IC2OH4k$#xHyez5DuvPqel[zX%M`?Qt44K8WlfP%{Kz$lr;c!r [I&_2yQ2' );
define( 'LOGGED_IN_KEY',    ']&X8V*q#vAO*_-A<^u 7@ev0ZpSiz1jHJ&M%-{_I<F/Dm-q&*mLC_G(K=HrA)gGC' );
define( 'NONCE_KEY',        '[y,Wg(+c+CbB1%)|T-lUk;R+_.:b)m6HHX0_Hp5K*E6N)S@p,a2|?0eX,O][/e@s' );
define( 'AUTH_SALT',        'K.5E~7rk[T& F0vIVJ?:7,9;m;UspnS% Ld+ra@/j/wr%fFJ6M1&OC@+YeDT%s0;' );
define( 'SECURE_AUTH_SALT', '<<.VM;6N9=mYFzr:=w[De p-`d?p]GLQ20mfE-g3}LvH6w>bq%[&i,tI@v4 2V[.' );
define( 'LOGGED_IN_SALT',   'W|d,`Z?/S[.oF>pbieMRTOT1F{TsehZ&&_=|cxIznGUF]f<w4r_ qN8(I~%$X6e2' );
define( 'NONCE_SALT',       'Bb8>Gu-t2Gedjh*BQF*3X3q6s3@ ]vn&TX*0A!8EPI6G*AZp;*L! G@;Lfv,~]j;' );

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
