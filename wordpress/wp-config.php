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
define( 'DB_NAME', 'test_wp' );

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
define( 'AUTH_KEY',         'VNI/6!,?VJ!-^BJNdM(,A=/YDJ+ -~H3~^Bel?nj,T/|Rt|%H 6ck`ff3QY8Oq:`' );
define( 'SECURE_AUTH_KEY',  'JU_R$n_*H?g!OML_ jBb<Am W>a2 @=!_2la=MxE*KxHvO52P_2.MTB!l wE?4Yo' );
define( 'LOGGED_IN_KEY',    'Y~QfRhR[w74D1j4J}%(s5sMCrm?qKt]Gl&Vy+7>@[(,?e9Y+zK5b{m[P o3_PT/X' );
define( 'NONCE_KEY',        '*.[~=bi>w$)|M2}ZXe.[s$hJmXIf@|Z_/!kp0A/rUnP5Yw@Tj{8bmJQ2=S6{4iJP' );
define( 'AUTH_SALT',        'n|zV<C4Y0.U[,m!hLGdp0_J`SKT]J%Q?iwLy{uAECn9~sFRpy:s:8^F~1s>~qnPp' );
define( 'SECURE_AUTH_SALT', 'M8>BZ2J+&?/)+W5G%A_I 6bZe_)xu$v%6`P`Zw{G@gbA>N .H24+v`_zx?4z%)1R' );
define( 'LOGGED_IN_SALT',   'csGgo(YM`,N/7F(wW<FxO`=/DG<k~{8j3Rao:v4k@ @_@O>0NYR JtBk&iwzL.Vw' );
define( 'NONCE_SALT',       'eSJ64t1?R!fekOYR]8x#O|>CI,_ <{[mVD=Ku*(dDT`qhIaAYi`AZ>@u)1!k/z1y' );

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
