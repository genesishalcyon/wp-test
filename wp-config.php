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
define( 'DB_NAME', 'genesiscont_wp' );

/** Database username */
define( 'DB_USER', 'genesiscont_user_wp' );

/** Database password */
define( 'DB_PASSWORD', 'apmSZqX[a&{E' );

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
define( 'AUTH_KEY',         'UbOe<O)i}rJKjpOWbxuEmtxVu?e%0Jtgjlh$A2MM/A?q^j?=Z[=S17;}ocWxYTzf' );
define( 'SECURE_AUTH_KEY',  'vd=&}pG$3<^-??KKfE$f#C[*l`k%qZT/1%+j].Jx[QrJNwBzBDy*G^%_!-Gv/?(2' );
define( 'LOGGED_IN_KEY',    'GUu-{,%tFVG/$de^SC>[Re(`nwh]f`.I~ZB)awNibc#&ujvC9SEzMR-=f|(U=W2Q' );
define( 'NONCE_KEY',        'P7vG|MCSSX)Tv*B8M4ksVsBx_TD)cJm}b3X(/4s[$P(YWsOg2BXIV-Gl/oovogdm' );
define( 'AUTH_SALT',        'q3q3s,f|x5PuLEljD)?GU7?[+BvKTC M*awyJ<x!M]BXAK[D+AtH#g(_PN{ 5[)2' );
define( 'SECURE_AUTH_SALT', 'Ju;ww:0Q2$ZL(:.e)|l;&.x/$7[rmZ3D|iw9]78=Fx@(qV zY+:?#X#MF6}WSK.c' );
define( 'LOGGED_IN_SALT',   'zQ>yN)d?vyqJpYbpVXoU=cIkP$5wf?Y.kv*0S{PW=xj9,k!DOC^@ LKa4`moL^^2' );
define( 'NONCE_SALT',       'Y$c.)E-gXA%p{&9}@M{GvprB+%LVc5[xL:;n6F&voWs`>*a4nULBeqj)C2`=.Q7%' );

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
