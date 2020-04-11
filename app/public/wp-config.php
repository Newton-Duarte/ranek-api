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
define('AUTH_KEY',         'KX0GDHyouGIne6Uo7w9BBvgYkOeYUajoSKN5hVErEEp5xGGjcxQf33NVHYim1BPm3KvjpgA17m691klL00pskA==');
define('SECURE_AUTH_KEY',  'ZZ5e06lTchZ6qvKqT+JyrFWx+mMp3lQWmXHa2YT01LS6F1idUmR5dMmcDW9cb8KAmGzCXVa0rVA6ftafkrNAAg==');
define('LOGGED_IN_KEY',    'sxMZVTCVjX5mw9U7NVwQ++HUXCHIYTHAflWVB+igmU5rRawskRROtxVT50kNAPeYG4ZIu1IT0DWMCp89SQ5Sfw==');
define('NONCE_KEY',        'r3oybG24Zy00gUMU4N0TkSurDc2FT7TbXeafoxWjtCouAlJ64whnNPYcuAl0Kqy9HNaX31rIXrc4gNVR6g8rzg==');
define('AUTH_SALT',        'am46Lw214V5Spq16PW+FExOeKexlN+qV1wQnCF5mW6o5JkFgRh+ROfaxfJq1MAfwCTlcj0e4cjjf2Qbns6+cBw==');
define('SECURE_AUTH_SALT', 'ISd86/T4tOd72V1OKljs8OsOw6VED3FP/oCnvB7KLKe51tWae+I6C3IkCvcHpyzyhChWDwSyhl2rEGYwYim4DA==');
define('LOGGED_IN_SALT',   'Djvr05brMRx3eksaYzMhPGb5DIqbmVj0VRTMTgyptfo97rKvje7EDOWFVynevym3xBMhTFx7JVZc+yE0fMBDow==');
define('NONCE_SALT',       'HRJ7wRrb0LSLfKGfsGJ9p9wYeMwctcEqTHRnpJd3pFxJKQKulJSe4OG70hudsvHIWFUpay7+LSV2yESu2YxUAA==');
define('JWT_AUTH_SECRET_KEY', 'ourlittlesecret');
define('JWT_AUTH_CORS_ENABLE', true);
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
