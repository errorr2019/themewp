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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'themewp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1:3303' );

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
define( 'AUTH_KEY',         '`}7-MJO/(`_gmYUHnTLcIp](XnU7C1hZ2 |_{_*Z{u|nhKx@3QYQ,`Fz*,<vuJ<3' );
define( 'SECURE_AUTH_KEY',  'kf2QY:%~AGds?H;?TVA>7QUY=C{I.:VHpHn>7rCNV3A&Kp@T$hx_+sBGNOj|Dq 8' );
define( 'LOGGED_IN_KEY',    '=A n_}+CtDva_wObWT0KVyrkpcfd!|:A7C:SF:L6:(SsyPH87@K6KJu&AUW;S=]+' );
define( 'NONCE_KEY',        'gh,NoZo$wkzv0 X{Ijmye@uQRd;G.h[nq/uXwoDAz *zH03:&@y]ZOE15,XHlJm)' );
define( 'AUTH_SALT',        'r:fm]%NO&E%.#[/y>,cq,0j;3$~!DzxcBjGD}#Z+3I9s8}5WUbGrO>@;%9FBD^/0' );
define( 'SECURE_AUTH_SALT', '5#xO_sCk95`-u^rT7u=/R*A;cd8bXu%TcPs?d?<]uu%$,N+h-1/-TI_${#(_ze e' );
define( 'LOGGED_IN_SALT',   'xeq1*BoVCp_u,d}w|smk#qK<!| ckU<~y1}Ru7kGK{!W3)Y=5()BLl+XRrfk_}(Q' );
define( 'NONCE_SALT',       'ks]pnr^zeX}D.Mu;t{E@|RZlRc9h,eK|lg!{YPfg2,C{f1KzZ2{)!Fk4Ex?y!`O4' );

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
