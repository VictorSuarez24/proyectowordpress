<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'proyectowp' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

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
define( 'AUTH_KEY',         '(lf{OB/Z_ FhQ7nn0H(3o=9s4[]:H8 w!krnKmgUP%d=-&1>h^>XC`Dr7o*R`,i$' );
define( 'SECURE_AUTH_KEY',  'U=`nhEJb+5&;*gj|32;e *];j@Yy=Lzh*9zrJ+9TJj23[%*nZ5odgzQ?JCkx:M?c' );
define( 'LOGGED_IN_KEY',    ')z_g2%H.AQMqm}u_gdQhnqt<&=LSW;GX/9?oP(`Y4@{:QN7mXT^zy44nEjyBlHTD' );
define( 'NONCE_KEY',        '{~/7<<w9+jl]__[?m[kpN=4mdv2g[N+5jHj/j[HYyWEW$PuhnW3Z4>p`m&@0*2YI' );
define( 'AUTH_SALT',        'pyJ8v;@HPn<u92Nr34EgSrB3tH^sGm)O~[LM8zqmVi[&rdQOGj!Nvj;g#qVVP_h6' );
define( 'SECURE_AUTH_SALT', '1^qTK&{m[8GfqFIM;C8]m>tM;r]d}6RP+`hKC| CK2h0a ve,y.K5Yyx1/&jZ=`,' );
define( 'LOGGED_IN_SALT',   'P-Dz4%b>8oz1RCR`$Uayb+.hf<7L{ye^bqqPh^%1r}?yq*8$dH%: DLAH!pJ=}l;' );
define( 'NONCE_SALT',       '@dd(,-Yo[[8Qf$5Qs&%Od/IP cVrLsk@ULa*_a|%l*PcM7C6>bnJ+2}pdB%E66$A' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
