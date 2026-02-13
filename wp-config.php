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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

/** Database hostname */
define( 'DB_HOST', 'database' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'n!K[u0)@0/ZhHPB|HK2PS$yS4nwj(E49m#:;i3^v>^Mn4ou?>lmvN7c@z/3ejEoB' );
define( 'SECURE_AUTH_KEY',   '|66;34(<vfgYN5niJ{w[D~bm#)N[oud1T<45@W;3D !a&%c^|?oO(6en;fp6;LU)' );
define( 'LOGGED_IN_KEY',     'ENv[+)fHIAT$@^O4jtvNTcNK40wu3{X{]XS]~[UL)y}yGCXN-Ye%+0++rFSNbtV?' );
define( 'NONCE_KEY',         '2+IR(+u~{9$9P7Z3i3kgZNh,Li{lSS7pun7#K=)xpIS*X.[Qn:&a6/V*V-<ao&Vq' );
define( 'AUTH_SALT',         'PkdPu`JddxLlWcu=0hMIHP6^(#*<M<o;y, |CRd[HJe/|*X20w7MJMa|QES_y;)q' );
define( 'SECURE_AUTH_SALT',  'JXm)}Pqjeo}@)CT0-*_w7Rr96-t>J<`&NZ`S*-!MP8UG>(%n{20E=[{`*D9;Yz3J' );
define( 'LOGGED_IN_SALT',    'sQ:44FtUufiQnc7.g_x>:l;LH^1mDV8x>4Kk];e>G>eCxwg^p>%MgkQ1ZyD27[A ' );
define( 'NONCE_SALT',        'kdHo4)~[iN)-+p1E~CBXoI;p;yyTwe,N+`.uOVEZ$5g0akLwy:+$oR}bXi++w HY' );
define( 'WP_CACHE_KEY_SALT', 'skn8[dWFN#:NN$9V1k;wMJG3 ]!8;1-,R[>**}ZEFt%S{Y/=a=F*@L v&f~<0eYU' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
