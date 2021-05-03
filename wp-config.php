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
define( 'DB_NAME', 'astro' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '. 9]8ad8|$`]ch(zvc3.=akrg1Js>C^Z4pa>0Kh;nS ^_pod$QWln.lV%N3xq&6J' );
define( 'SECURE_AUTH_KEY',  '39cIGC.{d8m Eac]Ez!^7_Tok,UW{7CL&cOc:;TUZ}:%6na7TIhwPwV~`wl.+zQ]' );
define( 'LOGGED_IN_KEY',    'uo/Dwdbp;Nd%NY5(,&bC>slc-AMiQdZcr+)Jpto LJ>vJ}a>@@U^WKM#9-.PDXg;' );
define( 'NONCE_KEY',        'whbGrdFiVFmfKy}|J^G?i2/2-KV0nc+r|CN?~LbX}#ys2$YBG)&&Z=SHX9(h.daa' );
define( 'AUTH_SALT',        'jX$X{Bs34vn-Y&{~PBO$7_$MEkd$$ht|,]/$UNc8s~Aeh=9j|aL.wy/Tu4N]|=K|' );
define( 'SECURE_AUTH_SALT', '>)jyhIsK-h%PtJLs{asWo~/T35NP6uzcA-X.Q(RkP@+L>&9rlx+y+?]@A 7. r?G' );
define( 'LOGGED_IN_SALT',   '=O9=:NW+804#]Vwi:J ;ti`N3g<*W68Y9l4U<G4.X?4mCQxA>^5eXIAc[#7`_+o[' );
define( 'NONCE_SALT',       'v[?Vha(0n6(hU?FVaR$+!!yh@d3sh3VPs|Hj+xt-X.jBA?GRu)R B#jVUL{]?77B' );

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
