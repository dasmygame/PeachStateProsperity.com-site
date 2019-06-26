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
define( 'DB_NAME', 'tsspqpih_wp964' );

/** MySQL database username */
define( 'DB_USER', 'tsspqpih_wp964' );

/** MySQL database password */
define( 'DB_PASSWORD', 'S5r]p!c4p3' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ayco1w72sgldrsgvsxebrpnq6kcc8vdp8rzqayjwcg1eqg5ch6dvfvewqt3udekh' );
define( 'SECURE_AUTH_KEY',  'v3c9b2ywjrnxknenl3niqjcbqv3i2yjmiifr9d1ipfk5rtebscwdzzhivemybmx9' );
define( 'LOGGED_IN_KEY',    'qnd6p6e2avq3yiyqa8vrdwkzy5cqo1qjkg8hqf9an4iyehd3lhsallyr0nfasvl5' );
define( 'NONCE_KEY',        'wehxywavsaehzneg6b1x1lpsfgoazojg5k1ankjpscr8pgeabel1djzjvhu3keyk' );
define( 'AUTH_SALT',        'koopfcisihy9wjrx0e16vuh8ylk8jkdczj7arjrdviz9nxtmglottcbvl1rnpohn' );
define( 'SECURE_AUTH_SALT', 'gukcb7r1txuvvlcg1p8arhwmgy1zblagxer3mc0kdy774ybm3xe5gzc2br0pilbs' );
define( 'LOGGED_IN_SALT',   '553h5crzh2ehxbdblwnhtqzld1qryjz6cv5vaijml9vm9gj8twh1wxuiebuszl3z' );
define( 'NONCE_SALT',       'mdjppero9ftz12ybowhajotpeigyu72dnnrrhvmgq1kddv9qb5ybktxranq2wl8k' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wphf_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
