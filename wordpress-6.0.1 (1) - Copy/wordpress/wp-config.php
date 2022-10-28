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
define( 'DB_NAME', 'ship' );

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
define( 'AUTH_KEY',         '{PE4PL2INKF0F#d-bDH>#delv$vV8/WWgc8N;ybL-CILRMpXtKauLg=S%(YO{fjy' );
define( 'SECURE_AUTH_KEY',  'chpHIvNCL#eu9d_c8c@t=IMCUsU;OVCZh  BKvi5oWo5 Avf?_wjk!)aWf6gVO|z' );
define( 'LOGGED_IN_KEY',    'm7-g,vXM,anS9uctmGDd3ddI,gWSn:*Y?w.C{yQ NTBs7 3&r<jpZG<I]dh8QYKI' );
define( 'NONCE_KEY',        ',bi1(fVm>V>DADd$pNaW`BlC%$om81K!G$5n3Qi5bGJD2$>CX=K_&s;IqB<;ir^;' );
define( 'AUTH_SALT',        'aCxm~sjltX&$J_<KcTlIH4M|hV}Aqe<#`g98<P7Ek`J <5LkrgHJh{(cxfNE opP' );
define( 'SECURE_AUTH_SALT', '+#an@-,(Gtm47.Y1KUR2x[hQH%}[wLgfCwBFcW%a?YK^DMs!Bq&eYXAs0)4?*5(X' );
define( 'LOGGED_IN_SALT',   '/PKrzO8#q?iC/P06,ovp>13j9Vt`*!fcL .8;?B+g7(sQ*:4op)#RYGU&[L}oqWI' );
define( 'NONCE_SALT',       'Vpg)%Y:Abz!3uPX$^r<vJ-&<=972},_*5SHT/u`bUSR(jMcN%13Oqq:Kwb`D 59J' );

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
