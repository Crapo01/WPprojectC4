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
define( 'DB_NAME', "dimsumdata" );

/** Database username */
define( 'DB_USER', "root" );

/** Database password */
define( 'DB_PASSWORD', "" );

/** Database hostname */
define( 'DB_HOST', "localhost" );

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
define( 'AUTH_KEY',         'ix2tptb1v1uxfdvxwrxwae24s9mkjsmh8e3kiz2z7rz63svrknt4otm15mucnbl3' );
define( 'SECURE_AUTH_KEY',  '2qybqeoqbodnzi2hk8efxmt22nwxhlcue9gdehiaeypps0rurniwugvn5jbonig2' );
define( 'LOGGED_IN_KEY',    'kiikwzoazjlfqjq7dt6poouy5482ni8g5cxwncv7esf9daviqncg4wb2e1o52rv0' );
define( 'NONCE_KEY',        'ngtwytnb82hohe9ea1tycrskw9esmgjfcbzxxuflsnd8fmc8guactbv70gnnflm8' );
define( 'AUTH_SALT',        '2sv9krn0vnmuxtfarrz9swvyfazpfsk4mlyff3mdhcrheydzodhliwhnomuecrod' );
define( 'SECURE_AUTH_SALT', 'ivzqdepu0e791xhnirodqqx4s1zsu21pddj4e4puw8tzs4xdk5a5ttv4o9bnnahu' );
define( 'LOGGED_IN_SALT',   'ksdmfvsidnkzsjkjk4d7i3imda329zlzi5num5syvqgkqjfp2ba0e0je9ozvqp5u' );
define( 'NONCE_SALT',       'exvdumna2vptefqb7qytaujouyelvlrkon18lwbayea0zdbnvtwijqgrl8blo0rz' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'prefluc_';

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
	define( 'ABSPATH', dirname(__FILE__) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

@ini_set( 'upload_max_filesize' , '512M' );
@ini_set( 'post_max_size', '512M');
@ini_set( 'memory_limit', '512M' );
@ini_set( 'max_execution_time', '300' );
@ini_set( 'max_input_time', '300' );