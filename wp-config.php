<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', '09duncan');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '0I$iMqZO{^j;vrPn0Tpx|Fc5oO%<zRQXcd~=nhs1[|4hvRXG.CvLL-3S^4Ntg9In');
define('SECURE_AUTH_KEY',  '}qZ(7aVvrDh30,UVe8p^M:xcaF:Cyi6V b1|F,K19PWUk~!K:XqE=iKQ?jZ]y9vG');
define('LOGGED_IN_KEY',    ']QyZ+q!Q3>-1S6XI(0Q{L)`*Q,6Wk@!cPK!Y-9Eq@jp&HB:J*]0!u]Bg|Q[>6x}>');
define('NONCE_KEY',        'jsq``2pTE~RQX.D,^{<=5-{&{(:emw.c5m4M]SvnZ[OZaxlp]atZ8=?iAx)6(_}!');
define('AUTH_SALT',        '$]RkrI-S<_FD)a82B%ncP8a#N!WLBFyOkX8X`$+A&,q`.us+cbb)hx~tPG:*bO$8');
define('SECURE_AUTH_SALT', 'euG!JQ,YV9v<y8efc+:QX B@{&E:xgvQ3AC`iXufE^82QT[;bpdZHds8fvw*`2IZ');
define('LOGGED_IN_SALT',   '<<|*s9W@I0{A`Jy&9J}</E!TL*3]l~{o?L{)Y_?BFMs(5+JtD5.0S`lJ||~[!_2u');
define('NONCE_SALT',       'jKf1!7?67r=`8e]dt;fJ6AK11xfbpUqVK6Bt11yj?ig*)->PH)`EuM+_:S5%MJzP');

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
