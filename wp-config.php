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
define('DB_NAME', 'template_hierarchy_wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '2d?e>oy:6,I1');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '2,kX &:v:(vO6yzU%nC8Du,C<u%xrP/3Mk1hEl&77BYE>v#mZ}U$mwatM@Ol-MuF');
define('SECURE_AUTH_KEY',  'N2-ZCRR;J=hZlo}v9ex$Q&xS_E[HGhQ%+PiN,Uyx{lVeU?ja==P7/QoY!0I.&%k1');
define('LOGGED_IN_KEY',    '&e~; ={fih<1jbW-.,XqHzqGBpW{;0J^<Ixr(cdCN4spbS8W;uN=%=.!e]1<sJD<');
define('NONCE_KEY',        '4}8UJ?jjQnP0KzZrZG_Bg0+`rkVGM!?)9/IH8bp[!56T%#+9$?-c a<6n,FxM;G7');
define('AUTH_SALT',        ':eAxs(v95ZLJf!oh0XSf3s,Jy)PKhc^Lkju8<L9H(Drk_5*d%fN&BSbGR5h3IJmY');
define('SECURE_AUTH_SALT', '[mRxj_AC&0EIdt{%Gt{,b9~dSxZi/uted9IxC4L# R4MIR, l*=t}[WgRB6q+cW2');
define('LOGGED_IN_SALT',   '9912%!EfZjA f]Cu.WBQay uG9Mx!5rS wZl6! J>X-@w(IP]m/.1,DLVOBz~$$@');
define('NONCE_SALT',       ']*Uld5?E8E:kmw[LWy:KUsTjbSWTFvIE-D:mZ8*I6t6=8$6i^~h6VW|UpD|.n#+!');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
