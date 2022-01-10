<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'wordpress_tablas' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '%R>d.9m4PEuu}0=-*]$ mwG!@3$ WXc!gx&_lt?X+((ux>yl 5Ie:s^o`3ucec,p' );
define( 'SECURE_AUTH_KEY',  'VXNU!G::N.{uM%3kj5%EH>4e2~m_n2_pM!)]R}OEO|{hjy:I,*48zp:+]+AM{BJx' );
define( 'LOGGED_IN_KEY',    'lW]w;43ZG9xupEzvpJ)9>}(=xZj:c+d/.dH[YWL|{6D0&-M.$]-Q<:O@ nq5:[i7' );
define( 'NONCE_KEY',        'i^(- ~HY/Z{bmMiTZb0!0e5nM8q|`<:er6huL0^J|l,x^T9Agb&#DrZ:pp7B ?(/' );
define( 'AUTH_SALT',        '/(uILOH {ZIu@InyH-K}4BCL;msKJHP;EZq-E(:t?}ZlqQeO;wOD7RN:-Z~t^C*.' );
define( 'SECURE_AUTH_SALT', 'pMo/NIX)PaB*Uxzr*g8/ )_v%#u;Zd,,!-[_DK}??6JDdlJ;E}66jquoiTLx*d9E' );
define( 'LOGGED_IN_SALT',   'C36n<I /VI?>Q$qO?M:&Azx)89m%F}Lsvnqo%r?:g`<_0`AFmP`=57lf0_aVko|K' );
define( 'NONCE_SALT',       'YaHTiR7FJc;9OFFpd.`80lTP$K*/Z=;pi6+Dk?9Xp[BC6{Pf8nj1?~^LT<?/`Zgg' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
