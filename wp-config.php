<?php
//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'adam_steele' );

/** Database username */
define( 'DB_USER', 'adam_steele_dbu' );

/** Database password */
define( 'DB_PASSWORD', 'Adam#DB@Steel#2022' );

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
define( 'AUTH_KEY',         'UYE$+/ajy$&$SmrMTwc1!SAfYYh/S0AuqFuEuzZU3T$-Q2S[>/(+>/tm;$%%jGa8' );
define( 'SECURE_AUTH_KEY',  's^U<l.hqc_N@#o@Hez4~3YZACe2uG)#kBwy+XonO24zy%U!WPnuXi{3beS6`X*at' );
define( 'LOGGED_IN_KEY',    '^r_rN.P}fR]Ot(D0vQ!V,GzD7R.i??*F:f@d%p]>#_8F{B+MOBz<5:7$/hc:PT)r' );
define( 'NONCE_KEY',        'EHmoKmAb*;eqi>OIMfSG}WUZ:fr1f?1]{)SJ@]`?~O6e{_zw^jxa*j)<)+T%RFb{' );
define( 'AUTH_SALT',        'l^2+h*`{~tcmGI22tnt7<@^y/Pz7Q7t>1Z[9]1UJ3q2u0qFNp}8<t{99e-]wA!;W' );
define( 'SECURE_AUTH_SALT', '#EG:Jmh|gQK5Q%c[8uI[Q;>Dt/@y6&y(&t[nY|@ED0YBKt!2gKgnn_jN?#?&wLx,' );
define( 'LOGGED_IN_SALT',   '@8K_zZcm22V=(+SarbE26;vv7~S&]2X<(}b?j?!{{8|v?| p,b#P0@=^fb}=LfLy' );
define( 'NONCE_SALT',       'jC},ev+`rukC=igu1^.K]y9;:aB8?sDYNs:nb>@!w*f`hh60*J| n%Rrn*OBQba2' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
