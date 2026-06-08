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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'postgres' );

/** Database username */
define( 'DB_USER', 'postgres' );

/** Database password */
define( 'DB_PASSWORD', 'database-1-instance-1.c3g0omuqi6yn.eu-central-1.rds.amazonaws.com:5432/?Action=connect&DBUser=postgres&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=ASIAVGNFFJ2XZUOVTIX7%2F20260608%2Feu-central-1%2Frds-db%2Faws4_request&X-Amz-Date=20260608T071347Z&X-Amz-Expires=900&X-Amz-Security-Token=IQoJb3JpZ2luX2VjEOf%2F%2F%2F%2F%2F%2F%2F%2F%2F%2FwEaDGV1LWNlbnRyYWwtMSJHMEUCIHsfNCsaFgVE3msT4t87nnpnLwAN3wBZzIRDEvUyIokoAiEA2%2Fsc1opZJdQzV5FS2rFVZB9eRCX2NbUve4N1O0UxiCUq4QIIsP%2F%2F%2F%2F%2F%2F%2F%2F%2F%2FARAAGgwzNTczNjU1MzQzODMiDBqnS4Jxr2bhwr%2BxoCq1AhVoqgOBJE6mDCKLB86aPdTxcVFI9rztD7YAwc%2FszXWKkvy6KZefjsL5lf%2Bad4%2F%2BvjBZZ%2FindIjZNLXDRxey51ZKt%2ByfIBA4iH2y3l1qsIYlS09vWW%2BDwEYtbYa%2FdLmhuqY2%2FIAjzLKJ6vfVwXEPKYj%2BmT0ZFB0qQVYnYrxfccq%2Fs7W1oJTlb%2FtNk3G01%2BvvRjg76X1Kevi2t6cmQ2f8nVGRes2qUXFEZZ8c7g5KD2gpf0x9rBG8%2FOMqJ08G8GEJk%2FmTMp44N6g8NV%2Fhxt7RTwQjQS7pbPf4j6k79lunpYkiWPfFV44G%2Fmxl6fEVnPK0lpFBDtz0h7eGCyhmGN4WnsxwtvWcK44TfCSk5jN8w%2BIZ20IHkd2zH8WqJ4%2BZ4pXelQe%2BS7FV5WcsehY5%2BrEgU%2BFfKmVOqDDzw5nRBjqtAvVkPfk0UUPt2cAvKlr98wsbIvNLCIVEmxL78XnlHRpLvckOG8Q4pncAN0R7yrAoIckb2Iy2iY8wDUf78oWNueFqTwnG6Z9Se5BXFKy%2FFme3nKHGA1QeBXrkscF9zyGFs%2Fy9qyvRXbbZevCp2aeY2At9bYSAAw0MKOyrbbc2d9kJna6XXQuapIJ4nSVj4WBVLXePBdvgpA0%2BrAhbRf69JGUvjfO72tcsSxMA89EEySSJuu3vFC7bq79K5tI0LlgwVa%2B9kIg0EB7uOa%2BzBDzLWhNgLdRbHrwePlK04ATTLTZvhZUybNivWWsJKtP2yFI4SA2WxiaMWPHrhZ7wXbZcqLnrnPiJiJvw9k3n%2BQ4UPELtDIF1UKXWd3zUVwUvkgqs1miphI3Ambrso6Rw%2FYM%3D&X-Amz-Signature=b003f0f2e9b5e2ce2c1c5bf8645605ce80bbb2a3df962af8cf2ec5f491eded82&X-Amz-SignedHeaders=host' );

/** Database hostname */
define( 'DB_HOST', 'database-1-instance-1.c3g0omuqi6yn.eu-central-1.rds.amazonaws.com:5432' );

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
define( 'AUTH_KEY',         'put your unique phrase here' );
define( 'SECURE_AUTH_KEY',  'put your unique phrase here' );
define( 'LOGGED_IN_KEY',    'put your unique phrase here' );
define( 'NONCE_KEY',        'put your unique phrase here' );
define( 'AUTH_SALT',        'put your unique phrase here' );
define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
define( 'LOGGED_IN_SALT',   'put your unique phrase here' );
define( 'NONCE_SALT',       'put your unique phrase here' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
