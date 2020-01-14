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
define( 'DB_NAME', 'newsite' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '=+Lzvl-.40eN*Ab_H,2i^)5D-r  &LR]!3GBcnrkl&I`% jCb|X-*1(]`r[Hnp|K' );
define( 'SECURE_AUTH_KEY',  'Kg~w!(1-nHq)3;oXD=Zph`IQpC#q3>EA Rx}%y[ _/d~bJ>.F/C^or.=ZqS,X{6E' );
define( 'LOGGED_IN_KEY',    '>Ol.fD^m<I=yFWy_Co5o6Ly~NX8?fgzAuw5/`S<tDb^HFr>GBvfAv;I&z:wqtNMY' );
define( 'NONCE_KEY',        'hSIM=+SaK;~z3aug^c@%`sO6fZiJXBXEE{j8AYz%?-Q49gW^?z;2X{w>2gz,Jg/^' );
define( 'AUTH_SALT',        '72{{{p$NKcYX:>y38b--p7l$`p^HkJ@d%7PvP;+J.WynPxe_!uzJLc#o`Iz_V <d' );
define( 'SECURE_AUTH_SALT', '<xL&cB&_*{Zn)[-I;9?`Z`Wfs0jZa~81wN;.CoNPWQ~35ru&nH>-@/9AKf!.Zb],' );
define( 'LOGGED_IN_SALT',   '/)tO/I10J5O,oMsrc;cATvNE |DM _dzMpW3UjOqMkeWn-Qw~_{-`1YXWn!e!{s~' );
define( 'NONCE_SALT',       'kx=zTw={yBe]U`,sMRDvViue1FBF7lH*`:h+(TUsuk9lPTfkYvF&QH9fjj+1[&dk' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'my_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
