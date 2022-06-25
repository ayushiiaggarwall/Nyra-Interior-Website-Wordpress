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
define( 'DB_NAME', 'NyraGermany' );

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
define( 'AUTH_KEY',         'K_Z^wSXpY3N^.vk;8~/}&*AlaqO(58D(EQV?nV/_pxOvR_MJ?0#p*.PY-|fbFYQ1' );
define( 'SECURE_AUTH_KEY',  '*pH^s;tQPaNlOhcEta;gkC;ZjJ1IK>W]]Vq^w#@/#O$gT_R_<9,@iq1Uyz.AIMAW' );
define( 'LOGGED_IN_KEY',    'TGXk^(7 PsD~!]9$4o%<!x)yMhl-~^@1nSx&hrjZQ=p;ZMGh<`YmG(?|#65tTV[a' );
define( 'NONCE_KEY',        'XZ$i$6xS5]cjK]Zct@%I)+`.N1kkQizRVgYt0tkex=s *M ;`ydO_?PBYX}%g>3X' );
define( 'AUTH_SALT',        '7Nogx-C@lvK(Gy-fSRI~;@-A[PC)Ku.WqcJK-(Wg~|t:!z!Q ?i^31;L!XbHL@O{' );
define( 'SECURE_AUTH_SALT', 'JT-fU>+$)VXC`eF,:aLnk%WoVA*0&M1@*Ha:TL&CX_Dbjx4wtiZc.3^<lrh0h$>-' );
define( 'LOGGED_IN_SALT',   '4saHa DD,4%e%,@V!7TD0=a}7]ioie$]Ri-/|a`yB0Z!{H6XSJ+Fj3qF:-B^6p2q' );
define( 'NONCE_SALT',       'cqrwmT`28LzJm(3J;aJ3P]B]N|[0_1B-b1Z>B8,$.pDp]R`G=HTK]PkN$:yx~u*}' );

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
