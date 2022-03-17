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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'lhaw1027hp9h6_yamatomiocal' );

/** MySQL database username */
define( 'DB_USER', 'rhaw1027hp9h6oot' );

/** MySQL database password */
define( 'DB_PASSWORD', 'sHejVEFA' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'kAn9(N_<<EACPR9_T+hUoR+wl2`u`n=Fc,]6HjZ#QgSL~F|yDLnNL )l | Qc!W+');
define('SECURE_AUTH_KEY',  '5KteX1?H31E7uvw)};gk^I=+F;@;l^(?K%p:$)-+_dW.sAY6psooLJSBh&bkXc-k');
define('LOGGED_IN_KEY',    'o`/M0!u7}usx!vQ0#MudEao. &?B+eVE!<(yupz*z@Z!a-1C-LCR$e)oqGzRd){!');
define('NONCE_KEY',        '%.*Q(1P_Iy@.es jfHiT?JIL|0rPC+lOyh3w5fI*gkWHJxi$w*hzsO&fYL<bf/@3');
define('AUTH_SALT',        '{LO;w)>A`jp{vwJ&+y+cK!)A)-.l0]AdI0Ek6CnknNI`nm;li.c@f%cW3tY-no]V');
define('SECURE_AUTH_SALT', '1W%x/$L&QXA.~S/#Yi:zS_J]F]}uVc!yJYGtZ{4J_2F404Jg^TVBf!EXwZihDLM/');
define('LOGGED_IN_SALT',   '>Y{&k&(geC/XHdIxnv:L<KKOLTI1Q-T=a2HmVISn0XzF]%$0?9 +})HeSj<*>ZJB');
define('NONCE_SALT',       'YbO!@Gc[X}{N|Uur-}#=4w!FVR)w%^+c+yC.K~+h##:b1W{Ev!{O-`x)lPc^O_>:');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'yamatomi_';

define( 'WP_DEBUG', false );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
