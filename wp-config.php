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
define( 'DB_NAME', 'monsite' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ']Z wIX8){x<0Wd$&gR{=6$i~rM1-N%h2U6d0pit2 m{++OxliVYI_?Lb oGjqy8_' );
define( 'SECURE_AUTH_KEY',  'yIWgAVWAici)gJ,i*;yVw!0q+yG2S=:[EB-DPevBR@@ME)V4B)Tk((.SYM9#4S(_' );
define( 'LOGGED_IN_KEY',    'i}y_~)WNR.6x/!D#K%YL`wa)0J4=;Wj5I_BeVt+<rCF>F[>iC89>z25L.Lyp|c@+' );
define( 'NONCE_KEY',        'P&$wG&dYI2Uc?||A3%?(K@]93ys?0!*AP3mL`V|_->J>(uJQBZR{!Z-W(fi,7j,O' );
define( 'AUTH_SALT',        'A!I&UyN=N`;^3%74;Cg;Z)~oY0]{3L`a4_r[*,d:PlneUjd@6|bb6SHTx:[1jfe$' );
define( 'SECURE_AUTH_SALT', 'xzg.K0d0Zc8sjfS^}s>=0KD|kv)<@Y]OGRO5i1[AzEPMI;~pX6#r^Q:_Q_@pgDVS' );
define( 'LOGGED_IN_SALT',   ':A(y8BNQ}RhR<7~X[+M8>2X~}%[?|5){~G=8)Koc:D+[W4|-v}tcw-[Y+5A!vY8O' );
define( 'NONCE_SALT',       'XbrWlJ<xHz*]nISLicKe|9-PubsY0Eu#76VhoCBsS7%g8-T*=oLPs9ykGF8.(=[C' );

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
