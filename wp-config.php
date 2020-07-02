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
 * * MySQL settings majapahit_tech!!23
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
define( 'DB_NAME', 'manual_wordpress' );

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
define( 'AUTH_KEY',         'fQP^y`whzc$E6g|0_y{(%Ugt,vng/-n0GW,U7_96xl%%XWPItk1Bx58}P},6#;{Q' );
define( 'SECURE_AUTH_KEY',  '&/` $_~>#vmgF{3e/z{Gz-u%7Hbz{]]eb-lK?-|/PN^JNb2H|~$l&5}Vjdc$Rv@[' );
define( 'LOGGED_IN_KEY',    'gCP[xx4V]e/%Q_U78UbS.rRG95o.K{>M7{jbwsY7Vv,&=(Hk)I*Xt%fgDcU^q`VQ' );
define( 'NONCE_KEY',        '!Nzz0F77Af=fl+a9OTX./6nc2&)]-Q)Bu mP{nDHbMhaM|~qN~?tS`5`W6$LcyKj' );
define( 'AUTH_SALT',        'BG1=K#KldV5|fjjH0i:.R1[W,m-x4w01EmK+(c~^Y|S:8hR~2PaMS?)Ma!LcCV8d' );
define( 'SECURE_AUTH_SALT', 'x:3$>&oS{}c!su}08#Z!2EVXe?N=?w=pKH2ds?ckb4QDmC/1j22pzgD#ic42Ptsf' );
define( 'LOGGED_IN_SALT',   '+yXycZR&fPJ%twl6|D<SW60nBj-O~XK%nU:IB#W?}LjSoLIC{Nnn@@XMw3xZfHLg' );
define( 'NONCE_SALT',       '>k9IDn=&EVhg<DPs45SBIPHZAeO0=,l56|h1hvtU&~{axHzLfd7j<6Zf;-KNq1>{' );

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
define( 'FS_METHOD', 'direct' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
