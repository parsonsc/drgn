<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/home/cluster-sites/5/d/drgndrink.com/public_html/wp-content/plugins/wp-super-cache/' );
define('DB_NAME', 'a-wor-v2x-u-189281');

/** MySQL database username */
define('DB_USER', 'a-wor-v2x-u-189281');

/** MySQL database password */
define('DB_PASSWORD', 'sd2KTJjb!');

/** MySQL hostname */
define('DB_HOST', 'mysql5.clusterdb.net');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Rre0foGrpFJN+foyXzymE^o(G9gZy3KOS0(A504ee_wm_6f1!U6wGE49z_vXuII_');
define('SECURE_AUTH_KEY',  'syWK^l+xHzs8tN29^u=1/(DXIlu)H)^NOJb7-99dXK(veFei_2U(JSQDu-CAGDCP');
define('LOGGED_IN_KEY',    'KGE0BGz)//leClGXCxA8(E8cQ^(GO33/(JUHSnlainBff5B=)J-#hcoSG(TmVVRm');
define('NONCE_KEY',        'p+svjj2CrKuPb7f9sYhVGAWMZMzh=tOhyWkYw)3pZgG+dQ=7mQ!Dz0=v1jypo7Wk');
define('AUTH_SALT',        'MgkWxB8zwMGmo)tUKC_PgdcLVsOY(z/dvm0(MTN1ze8WyvO35czRK_sD(4hW_AE3');
define('SECURE_AUTH_SALT', 'r3Ts/jltf5SqLavQ9rMj-)iBzDs2n15AeS0)QjmokEJwGcsu^A3FjkKwLZYUILo4');
define('LOGGED_IN_SALT',   'EhWaog7zz-ZeY5lLUw0ixR2#LRMG2_OZ_I_1IODVw(4emXbUfhJix#jAkJslGHzr');
define('NONCE_SALT',       't#UnZ)CRMTMQpD6+cNZa1ef#KZS2(X43^2IJnXR-x-o3=p0BDNtOpE)X!XRLxX-M');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/**
 *  Change this to true to run multiple blogs on this installation.
 *  Then login as admin and go to Tools -> Network
 */
define('WP_ALLOW_MULTISITE', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/* Destination directory for file streaming */
define('WP_TEMP_DIR', ABSPATH . 'wp-content/');

