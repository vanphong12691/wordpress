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
define('DB_NAME', 'chongtham');

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
define('AUTH_KEY',         'yto# }!EM@Q6iFFq-hVno9Ug{Vu{~;$bIy|/}i%+@*02uNfhMm+zJLl%&Ejp~u!s');
define('SECURE_AUTH_KEY',  '_Y}cU2Qg)(:&tBsr`k+vp2T80kMViLub-:9^#MVMoRnC.kyXW^htZ&${IR9@DlS]');
define('LOGGED_IN_KEY',    '`K,->y&C>y5`K}p@fg*mRc]08N4Sa9(WjZ1Cx F?H;nG&JRE*b!&W`VJ0RGfq.V{');
define('NONCE_KEY',        '+yF9G2HAo~U+z}GGNi7#I9>f*lJ?3K2;P,y2G?28a|qL$KhA=0d#0`W8/^R>Y^v5');
define('AUTH_SALT',        '8[%Q1$KPjWFL-}mXd,<+d!oWSy;Wc-MiJW~Dtm57/~[LIt44QBm1x8q6p?;Pdh|h');
define('SECURE_AUTH_SALT', 'O2~78;>9A:aSlh=m}.as81n1P+$5cAcrqZn(*)B(bO&gxJF}><P#|$5;jYI=X8uN');
define('LOGGED_IN_SALT',   '0#1.%A9%x7F|Ua]f+93.)J]PTQ5~&C7@ i69014;+gRopqcG~quX5fTsYv&9K;#-');
define('NONCE_SALT',       ',SgU*;qlRg>h[{1r6#/gzj6#T8e`fVE8l@:=T+/+yREyV>M(3K3.5a#&x*sz9[tJ');

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
