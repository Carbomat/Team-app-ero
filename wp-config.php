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
define( 'DB_NAME', 'Webcup' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'WoYiWcItcD9WFztLuVLfZFAldMR9Jg4Z4PZCZiIWEppu1ee2bitkSzwlFppl2ofw' );
define( 'SECURE_AUTH_KEY',  'BWkEFLodz0IiHMv7LUyAMFaSPgnAtVs3lB0EX6c4X9ZPiluE4kQA28auZ1oWwhr9' );
define( 'LOGGED_IN_KEY',    'p7s7DSkhvXFzU6dASVoWC4QiV6OqX7QwtgPLfvuVbdvKjP64CqH2ySd5FWDcuEbM' );
define( 'NONCE_KEY',        '512H5k5PKsxJZiP2UR5MlaVDwtoiaiaX7rrff8ssfE6eAwdatVOFaBKcq28V69g6' );
define( 'AUTH_SALT',        'vc4jfGSm3nMQYZK2BZgHq6xMCDsbd3xJhiF0MhqRsrmiBPi9NPSoL1xwaLVHOPnc' );
define( 'SECURE_AUTH_SALT', '07CUH9DUhSD23clsDVWx0cB9d234qeRaVthDNTnowRVNSwrgEjZ3nJ6EVQqrpktv' );
define( 'LOGGED_IN_SALT',   'l8ZHVBI2rybjd8VvjM1Fm0G3DJTLlRxWATlUvtDYDmm1eetqsf8LvDkNQhsBF78u' );
define( 'NONCE_SALT',       'GP17U1ZVzufDS09DFGyt1rxCeuCU31UxwhXgRO22P65l1eV2XBf5lX44QIp1kC5I' );

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
