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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define('AUTH_KEY',         'DOY0bCVYwo0WwXIA3YdiNeEM181p5logiVEswfGfG0ulA0r4rC2scIZNJLu6hRb2UEnnzeRYFja8mPr1QG3GYQ==');
define('SECURE_AUTH_KEY',  'dYEdJOGMOd/d9Y9b4JL7134djOKFT/lAWkvM5lEak7mG/WTqMevvsFM/DdzpyzowdARlWBN4TFwRy5i854Jwqg==');
define('LOGGED_IN_KEY',    'sudDgFp/knP5MkO3NwdrFh7wdzLz/1ZglvsLl/vN7LbfB0UK2MR0bLKxdmgiIN6WHxZoKJXNusFOmIugvHo1YA==');
define('NONCE_KEY',        'ZDIJr77Em4yJE9JBNGBIEgkQRz9Ctu8HPpwnBwre0biEW3LypZSEGUJl8EyjKeqREPrzR/gy7X6M/TVuAwzeQg==');
define('AUTH_SALT',        'wjazxht6+AfUJJZubJlEcqrJQ7aYTqjutMa5R0FDiZruJAZ6mEY6UuAGOZNNXPtbYtzBMGKNDj7KL3WLE/FzYQ==');
define('SECURE_AUTH_SALT', 'GWmSg4cp+BIqLl7Tknpa6jLNwrD8PbBres7ALFOxo0+ZdWpUR3d/aA0O8E16eiTtOiLjlQbeaEgWRb8Fno1wOA==');
define('LOGGED_IN_SALT',   'A1nXSCJwniQhrTKQNhK1PitZZssMCObWOSZqdA+bBZIGhnC1nd1+SEm+c+RzzAerjtwfGD6UOeVa7JCklMTmxQ==');
define('NONCE_SALT',       'W8IwAjywh97xrzA6ipAtZZOoSYJ/szqPzOVlh2QDlaGGWIrkT0z1bRQOCx/90qnTtLDdpxqZahdzd7irV2E02w==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https' ) {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if ( ! empty( $_SERVER['SERVER_SOFTWARE'] ) && strpos( $_SERVER['SERVER_SOFTWARE'], 'Flywheel/' ) !== false ) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
