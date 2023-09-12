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
define( 'DB_NAME', 'word10' );

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
define( 'AUTH_KEY',         'YVMHgNvi?T8WF9RgS]U9($Bb(mjkkNIR,c3}EL[r9FK$7}4vmhO7)qKTeWhU+0&N' );
define( 'SECURE_AUTH_KEY',  '3w!Co*n3L*K3l,rB->pO:kjj&RtWQ<0`VU(2n!>^47QTbGdqx7#eLwykMs&ToDk*' );
define( 'LOGGED_IN_KEY',    ']9E+<v^WEBI~c_Q;TPM&&N*wd6h4t99$ERE=7M@olJ5U&?Di/-d f{i7Yi ~BmEK' );
define( 'NONCE_KEY',        '$?ug^S`+D6)Y9#%-Cdf85nOw>o6~jvKB7b7@G{(L@w-_B~RY&2N7QabO,HX(<S9s' );
define( 'AUTH_SALT',        '.:3W8bK-d-Aos-lT~F#]Kzk_]0yOt.V!#KT6TSg;4/HqZb2gG]V/%|CnUJ5Bj6ak' );
define( 'SECURE_AUTH_SALT', '$*km=,>1:BTQzGZg7>I%$T@p*R.,Y$Jn$*sW,9L6HuZM {f~Wdkp*8JB(JSz#vdE' );
define( 'LOGGED_IN_SALT',   'Uo%~ip<G@[2NjpKA2SD@{YvEG@+RR!.BcTZtpkw}*bHdA<3u=$vm S!ceQ<RqD+6' );
define( 'NONCE_SALT',       '2}v^RiwYOkna]9q.;F?<aC#}u0T?}44.8)x|iflOJF#h<KMs$d<(B.h1XyNR-u6q' );

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
