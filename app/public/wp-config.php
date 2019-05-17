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
define('AUTH_KEY',         'PT7KIx+5SgCq+hrgfDp19BUVcYxnA1bHYiZ9H2mY4ljGqIG5oZryIrFntZF/wAajfVAKaWsNy2SOr5Yh36EWmw==');
define('SECURE_AUTH_KEY',  'dvapuXtewULJFTvQ6AjyKo6Le85LYG6CPWUZosXNDj+dHHMxqZd+IChW0FdSPEFhgfmy+PassUw6YuKo3xBJtw==');
define('LOGGED_IN_KEY',    'TpCkfRPAB07hVuFMnla2SyuKnP8tmHPLy72PC4FUOYzdT+ZuYfuUu6o126TNlZFhcC/pXSm0H/GmX6E7BuJ6Sw==');
define('NONCE_KEY',        'Pp4lPsZx+4GzoJEuA4wQhrVhHg5m47WIs8tU4Z9im0Q/PXED8xokfmj3N8N+HcEdfV1We98fPLng3RxEywwzdg==');
define('AUTH_SALT',        'TeQcOK6uFG33Dj46wkIG7t5h1X190ExFqgchUZtKra7PMJgGhxFzWtQ6BfynIwbr+P1mHAlHYZWSOhG+SDjl5Q==');
define('SECURE_AUTH_SALT', 'iqH4ZhYD4tP7hlpK9NzeKT/IFx4jqSrniepPA7fb75/qUGMbawYfMDuXrR4X1nxVQGCZaS2cXtfgVlgwDRT6aw==');
define('LOGGED_IN_SALT',   'fwj8rcWzvtEoklwP05Ti7rWIJCgUGq1fz1IjifWVnWae7vKrSC6hnwRDu2yxZMUikT6aI9351N5vtrCMAS6u9g==');
define('NONCE_SALT',       'VH81POxwn/8lZq3XGjyAQWGVMcDqybNsqBCKRDMbB46a5fmlgjpNFsQAQjhXS1rxJbL8nXw4n/03Fwhsuy+lOQ==');

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
