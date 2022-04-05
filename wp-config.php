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
define( 'DB_NAME', 'purplebugdb' );

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
define( 'AUTH_KEY',         'B](]Qw*AsB|K{`o;7hMyf%U0>3L:Za,(W8oP:dBXmIlg&(xCnv6<mAN+Ewi$9;-D' );
define( 'SECURE_AUTH_KEY',  't6dO7TB6?66LO*!EZ$?c#H1W?c~pTCm (`giUjVcK1Nopx:ND)|p.6U-n)=;xQXI' );
define( 'LOGGED_IN_KEY',    'JBb1Bjmmt>WUQwAso<qw!YJ~u2m[+5%1.;(Jix/!m~T>nFAt[1[!Dy&mA p>U4ut' );
define( 'NONCE_KEY',        '0_]rV(E$+Syk<a:fW2uT@U)n+fwF-zlJ)ftA,v+K(z*+V~#84JEdrn?<bFFS)aT1' );
define( 'AUTH_SALT',        '<;+sC,E*}zO*;G(D(E}QE1O%bZ:>Pk%k>5N}D|$V)e4;>ui3[4ez,NSVThy`Y{(m' );
define( 'SECURE_AUTH_SALT', '&1*c*TK{fWKa14G?kG?zhr)RY;r]l9~0XR{dGgD&p4lCP{?wG3;6hx?o*mVvIueH' );
define( 'LOGGED_IN_SALT',   'mw%@^mUc+pX ~x0<|]|*~VwSaAr|+->c@tboI9Y+JDSI~^20/q~d] yUKOR@{_|z' );
define( 'NONCE_SALT',       'mJ=`U!eI(MeLRi5y#LPm,Ga;qCU+E8^9e$/}6 c7@/+g!0Vo3I5XJLu{]Q^ysIf$' );

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
