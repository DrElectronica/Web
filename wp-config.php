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
define( 'DB_NAME', 'mysql' );

/** Database username */
define( 'DB_USER', 'fabri' );

/** Database password */
define( 'DB_PASSWORD', 'Naufrago341' );

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
define( 'AUTH_KEY',         'K!GLN[$0(lI i=wpHkmZVFcG~pm#Zz7jU>gKze_ja|g7%wLJ+o,r=y;ZVKI5vLWG' );
define( 'SECURE_AUTH_KEY',  'F+}ZM:L]Vk}?$E<P(VjlSpSW<Pi~-H({{gKRO-qo9XT4/Zk2ho-t-RW/yRS7E#&V' );
define( 'LOGGED_IN_KEY',    'k 9PPgf^sH-<l-BZg]d%CIBDp6?x:xTXf(|lOY1t9A(U/_hrHVl4o<FSy^Bs?zy;' );
define( 'NONCE_KEY',        'e(f9n*b3`TI~1Yz69Vcc|]oedV;k!/a)S%!CqR/#%vlO:IXn&,HB uuE]]DG*Bp?' );
define( 'AUTH_SALT',        'SdrTX9wiMQ+9{q6=29nm`W}X LY}xHXSjtSPV4F:ccTSBoyGzL)-Yy~I3BiG+geV' );
define( 'SECURE_AUTH_SALT', 'SWOzH^vnMyYH5wu!F]$!t`NjYtb^9|zYE{prTv)oYP86P_6qwDiiWa}m}*6!(Mah' );
define( 'LOGGED_IN_SALT',   '#S04|t&{Urk^}#IP:%!0ZXf#ce|F:!B*CfI anFoliwEBHb-QS=Yt.6J:ty$rL(q' );
define( 'NONCE_SALT',       '7f(Z:{7picWLG#jSrGv>[7?bBGk3MnATAb,b>0Biq+m%jG!l=<oe6h+p5:u%3C3q' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
