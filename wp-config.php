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
define( 'DB_NAME', 'tutor_db' );

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
define( 'AUTH_KEY',         '5;xJ<Rse1[5Nxm7k^~GC B+xs2`!(15)NEJj2%yCi[H (ayzu&tUZR]zqo.c+7h]' );
define( 'SECURE_AUTH_KEY',  'QZM/Z2vF~AjY&XA+<X(:]W5!Xf8I?/ N08|CKD1*9e:p%9&Izx13Qm:S  -KE>M%' );
define( 'LOGGED_IN_KEY',    'W26xb:(>%wa#tnMWVD?%no1Rr%|%5_IPx5_i]g~W>hfCNoy6B?ME%5&8s^L,?.e*' );
define( 'NONCE_KEY',        '^? 4jE~,7HL j~6,Jk<Gjcq]7/4[r5:F$KtUz<,XT1E]I=2}MD>is6XK!tbnxEs~' );
define( 'AUTH_SALT',        '??W}q*:BF&|owjSB3o{fpk)&n%D_oT{gw=>t@-$WX{j-K8(%lC$Gy/52i^LB;R*Y' );
define( 'SECURE_AUTH_SALT', 'co6Al@:_j` 2P? .eBNoTOj?hl<=5iCl)~k,ya}!Itxfok,$)M+n{U,Q6alB@q-(' );
define( 'LOGGED_IN_SALT',   '1%!OH}hdf:lC=&~HY*XfRtY[cl1TSQbWgsAoBa6@3R;>J^Q@S?7bm52yMd~*j$_Q' );
define( 'NONCE_SALT',       'EAT7nVPzfG+p,MWDPcn.c*1eEa2q}v@s^t&EcMa9 @0v9&QI5[oFA[Qu]4g>~k.]' );

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
