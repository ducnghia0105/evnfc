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

 * @link https://wordpress.org/support/article/editing-wp-config-php/

 *

 * @package WordPress

 */


// ** MySQL settings - You can get this info from your web host ** //

/** The name of the database for WordPress */

define( 'DB_NAME', "evnfc_ddbb" );


/** MySQL database username */

define( 'DB_USER', "evnfc_ddbb" );


/** MySQL database password */

define( 'DB_PASSWORD', "4nSqjI1DS" );


/** MySQL hostname */

define( 'DB_HOST', "localhost" );


/** Database Charset to use in creating database tables. */

define( 'DB_CHARSET', 'utf8mb4' );


/** The Database Collate type. Don't change this if in doubt. */

define( 'DB_COLLATE', '' );


/**#@+

 * Authentication Unique Keys and Salts.

 *

 * Change these to different unique phrases!

 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}

 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.

 *

 * @since 2.6.0

 */

define( 'AUTH_KEY',         '-2Y`Nb&k)d}KcdJ`ste=O?/{NT8%7>cSk@h7HGdFBHlYMimAshdh`;iwGue^;M+m' );

define( 'SECURE_AUTH_KEY',  'L-2@Zkok(@!v5]r+AU)2?m&9XWcU+k`+V0 _/vA?+C-4VHW)v3E#LjI43BA6a3t>' );

define( 'LOGGED_IN_KEY',    'O9l]T(1KuBJBXx^Y] =$$N~+X6LF!dWh#g/:V?V<=`}f}3?-+AHhc1_imMtbgvg;' );

define( 'NONCE_KEY',        ' EN@cx2$=X*oyaE.:H`{W*V([jPUkS@V&Py7`!v2UYop~Gn!%l9Ioejo.$ w$ve&' );

define( 'AUTH_SALT',        'a7V*sbDqhBQ4lW$sOZcv)UUT>2nYoyoQ!{7C#cb!:KCq0j#9Mlx[AVn+&+0JxeCZ' );

define( 'SECURE_AUTH_SALT', 'H&~{zD!hE2X8J+>#g{w)4LxBXdt=V/<~?G!K00#pXS_M2YX$v<UZ!=eY]sOVZj>-' );

define( 'LOGGED_IN_SALT',   '1Q^y]nd|<$>lrCdP!8M41TGEeAKv_*_#@|kQX/u/3kxqY{54EnZNp^&s![Re1`3:' );

define( 'NONCE_SALT',       '?r4`nRSa~2K|P=^MHa)Hlq]H6/C8?n1j M32L;3&u<?,sQMu[ 4VAP<.X|4r}Lij' );


/**#@-*/


/**

 * WordPress Database Table prefix.

 *

 * You can have multiple installations in one database if you give each

 * a unique prefix. Only numbers, letters, and underscores please!

 */

$table_prefix = 'evnn_';


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


/* That's all, stop editing! Happy publishing. */


/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', __DIR__ . '/' );

}


/** Sets up WordPress vars and included files. */

require_once ABSPATH . 'wp-settings.php';

