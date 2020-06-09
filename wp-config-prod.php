<?php
define('WP_AUTO_UPDATE_CORE', 'minor');// This setting is required to make sure that WordPress updates can be properly managed in WordPress Toolkit. Remove this line if this WordPress website is not managed by WordPress Toolkit anymore.
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
define( 'DB_NAME', 'braaxedl' );

/** MySQL database username */
define( 'DB_USER', 'wp-admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Wt5v7#u3' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define('AUTH_KEY', '[ty3-fyqSl#s8QX7:Oox#bI9yK_302P_fs#1cE76jdLm:8v[BAl26:a08J9X4V#%');
define('SECURE_AUTH_KEY', 'uZ2(+1ZI)XKMnh[[p89!Eq9Y!m9wI9n]bs0A29/6fNI3O15i%20QGd*#S@Y0[]-D');
define('LOGGED_IN_KEY', '8W!d9~g|/W|#+!gaDcH81Q8#x56):1[)Z6Q~XF]6KT;]Y9K2|yN3WQeZTM81iX#3');
define('NONCE_KEY', 'a0#C_whZ*g8FhKmRRs3l8d(4N%Uq&*:MX&0Y~+0E21/!h2/WU)6-QBo8![r72S#f');
define('AUTH_SALT', 'W31p54k)WS46dmLlrE5:!5mn;22vb@8JrY5wp0AInx1v6G8dJ:s!FV/8dR~3LU;X');
define('SECURE_AUTH_SALT', '1OWfJ78h47a796c;&(4OW_eGkL]5&7!A-k:6]i0TIYJ|vV&-79N5q1@:82)@s1K:');
define('LOGGED_IN_SALT', '(0;z-VKB/u9MTSn2Fvo@M6emd3|ai40V8!/2d_WAY#s3/-8]i4(:9l_5n|%p+90u');
define('NONCE_SALT', '1[1o/IAa85Pj@7[2DH/9p*~m7vSt+7@K&To(3anc3WFZ]:-F~pG#jhk:r5L[id@+');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define('WP_ALLOW_MULTISITE', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
