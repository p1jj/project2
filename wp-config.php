<?php
define( 'WP_CACHE', true );

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
define( 'DB_NAME', 'oxygctdj_wp175' );

/** Database username */
define( 'DB_USER', 'oxygctdj_wp175' );

/** Database password */
define( 'DB_PASSWORD', 'fp]1@xOc082]S(6[' );

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
define( 'AUTH_KEY',         'fegqwpqbrsz3z2pnfhdss0ndaw3qjmdlcd6l3lcjtjzi7njm6jiekigbndkutxig' );
define( 'SECURE_AUTH_KEY',  'uacgmexmea5byt99sntf9thi7vd2hybmmqguhzyw2cistekqhtaztvjzjkmiypgs' );
define( 'LOGGED_IN_KEY',    'm3uhsd21k7yevtjmyd2lpcessrr9ubkabvpwdmxetgphaa265evu3ij1u34lxs7c' );
define( 'NONCE_KEY',        'fsmtcqezlu1btqg35ppa5ihap2tkbdbxmptfxgtksrgz3s93gpu4q0gz1uttkfsi' );
define( 'AUTH_SALT',        '09uxwluxd53ah4hhojebteucd4rb8ndeurxflyg4e3nknge7wfehucimhpyyebim' );
define( 'SECURE_AUTH_SALT', '4decag1icnyg7jlgyyqkx5rancm1zibqkigymwhopsrxdtzksbkcezmuglhwzqtt' );
define( 'LOGGED_IN_SALT',   'b7favkdfuqdsegppwbzo4n90qewfnwktljadosgv00qd0wzo1xb8krg9hvl8leo0' );
define( 'NONCE_SALT',       'mijkgh4my4cru5ggwvujakpoupsq29x6hn66hfsud3zcbyacj3n4bfvxvlgzphme' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpy7_';

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
