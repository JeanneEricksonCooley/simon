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
define('DB_NAME', 'simon');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '$1{2VvXR9U;8{BVr2_d[GYwb=%1Q>}bI5BhMwE[W|WJ4I2[A]IUG8<X5}pD3U60n');
define('SECURE_AUTH_KEY',  '[.;|&TfqVVj{c75hB4vrxlyA-Nx9+$dRI?1*dD.4$juK_R^tv@I<[rgL=y5cJ6g@');
define('LOGGED_IN_KEY',    '43!],+!~GBm9[93E=oab3[4|zP)##s4(p8RW|w`.x-EK|B_X8r3$RUqCGoUDo;w%');
define('NONCE_KEY',        'S=l27v5m_W<(VS@;Jr3=,*2v~-N-GsKV1so>zD;vZ1m{u6HGe^2{W.4tVM3s7[>u');
define('AUTH_SALT',        ':8&Po{`#X0~kWw<zKmI]_TY/dzS:g%1ids~jLmNy:l@*:%gy{5:r998G.%uA7KV@');
define('SECURE_AUTH_SALT', 'W003,**]l}BN@-m+ gY9WvzK~kLFb;[7=5Tvd}bsZ0+=Evk4ov/`7$Z/t,^}QA-d');
define('LOGGED_IN_SALT',   '~7jB8ys vDFqcBM.4?CC/AJ[#+qHN ^|vN~iJK+gKa)Xx$+2&`sHZIIn=E2b%pV2');
define('NONCE_SALT',       'OWDt.q~L.yD$H6kb_E}!=973/ZYWzDrVs^0a2O,?q/oFlc=4b|lo.Nb<N2an~,Pb');

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
