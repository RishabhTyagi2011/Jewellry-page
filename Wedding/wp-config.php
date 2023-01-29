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
define( 'DB_NAME', 'wedding' );

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
define( 'AUTH_KEY',         '&x,o@[c7yFnD!g-,&U9yJk*~.4|TEZu^2g+L78c}TW:fbMM^3b`8sLlLQ=]O%e_-' );
define( 'SECURE_AUTH_KEY',  'w(rP;]q9-q%WOS|CXe>TO-;_p(D;:F3M}T9Go!.liz7<+yRJJ(5N#`-C}f7Esj2E' );
define( 'LOGGED_IN_KEY',    '-TrYJ?@$KIhnzeEUZ@IZ2 F$uCVmu%hNuC %)<?Sa[3VeB./+aiZJ|>4<mSnSJ76' );
define( 'NONCE_KEY',        'Hq#A!c)//,ZB^;B%L^y%93MTd]q]?;qt@AQYDLllj>Od)70X94(U{*Ki2!P[ICNp' );
define( 'AUTH_SALT',        '?%ohsIl6p4^=](@`e>ld+*x8leNB 3Y)M}E&~C|E>w!;^`;Lty fo$7+G$>&`^JB' );
define( 'SECURE_AUTH_SALT', 'RLi<:=-ak+`Q{C1l^e95Z;WW(D8C<^DIt~.jU&s:A]b@8k3hon8tvfp/RW>,Pw!y' );
define( 'LOGGED_IN_SALT',   'u.g[=nIk^P(#(mLiC$D)j,$)4:(%Ti7}?i5{emOe|*IxX(% 6Yt`^,!Pua3.TQy[' );
define( 'NONCE_SALT',       '9]xttD @E.Xe8x:$ x6;K%k+x wD:~bv|W#[FZT+3#xFp9BuRxzaPK24_BMus@{(' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
