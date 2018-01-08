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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress_test');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'TI!vExlY]~,C&Fv%`b0zy59O4x08~D=?Jd=AKa1OLk4$F;SWkEn5%6|vU}dIP@o{');
define('SECURE_AUTH_KEY',  '3%E_qjg6;6 2A53IS!js<dY{dWkaIQprN`tD5*.f>H7=P)$Uxkm%=mQ+,?6%GtT!');
define('LOGGED_IN_KEY',    '0J=nh^Ys#},ne6c_RzqV3?FQaU7r|oH/t9B+#>/|{aQ<J<r+ufCOgyTjjlhbEY!6');
define('NONCE_KEY',        '1XufLy@?rs2yxRpUI4fhk?3./*~a0)]jSjMvfp+Fd<I9v0Vb[|Mx~dl6=x08VLUJ');
define('AUTH_SALT',        '_}E#e/HR,rFU|F)3D|ga9$z>2{No8HL)U^jY,2+5 rlQ8(<<h*!fR}Wh|t|Ue?jb');
define('SECURE_AUTH_SALT', ';/)QP!CLoXndZ6y1bfKaO@J1-NaqAOj.`-GjB}RUgmK;u(d#N}Ux6@^7ojxW[la_');
define('LOGGED_IN_SALT',   '2P)aw56,<goK)AI%s~2orw3-NyN7GjCurlbo?Le{t}r1aLD=5}X,`sRc6i{a7SqN');
define('NONCE_SALT',       '`N%m9z{RaATPW.kX8vyd DhrOzUFx>QcWB`Z)~B=gm][By^%gfZKx?cc,?VrJ1Z(');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
