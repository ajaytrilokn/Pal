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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'pal_db' );

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
define( 'AUTH_KEY',         '3g^8.+gP81d*m6=UDL)-o8EfQ{ztn~f]I.>Vpn?S8c*/cr>[zD<>=Wbnv7p%&`MW' );
define( 'SECURE_AUTH_KEY',  '`ym 9JX8)-J,x?0^vbw4duS_`.fuSVF,cH x!w5m*Q0J}T]l8j rlpL<pVb.+.i:' );
define( 'LOGGED_IN_KEY',    'TmS-f0vP(](zlqPpLL<x#LXvmZSLr@SVDHAw[`vmrjF|UvXRTb#F|o{;F6_[ss!A' );
define( 'NONCE_KEY',        'I=uR2~z|imo2xuzZ3ENCHhUn6W;nE`*81_%YU[mgum`@]9}%:WT6;T*9.4{}(0O/' );
define( 'AUTH_SALT',        ';aB<Lr#uj3^m>7rX:R[9-#kr|m|$$V}fakLwL!)oo7r!oK0)BIpzcL(Fv4RuhJzZ' );
define( 'SECURE_AUTH_SALT', 'y^+oWg__Fm22mi26o:Jb@G~J5`:u:uH1?dZD7PY;so2S/klF(+S-Efb$P43wg|vM' );
define( 'LOGGED_IN_SALT',   'yk*j4Pv-0M$_#mc]tVC3ljw6#(S g1^kb(,[ {%6{_JCZ<H{nlorMP(Zk=VpXPOB' );
define( 'NONCE_SALT',       ')gHH#2`E+] Lh#(7rQb7vkP5}q2pkrFwB>/ XwF0d7-_z4n.#+Trk4#IKI6KD Z}' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
