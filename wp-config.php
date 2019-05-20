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
define( 'DB_NAME', 'db_hallam' );

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
define( 'AUTH_KEY',         'pd&42sm;w{wbZnJDH|Es/d{[Az#9`O&8fJ/OOg[c_QU.@gC]B#5$(UvS^}UKL$ r' );
define( 'SECURE_AUTH_KEY',  '8f8%V}6Op/^kP5Qo6-@}^[8$wL`Pk9}lCCnT-~UU~Sf=Kt8d&dW];(Y!n.?-==p-' );
define( 'LOGGED_IN_KEY',    'G Yh&C<p%0ZCr*06pIh,l#,?puAjmN;$^h|d-[PX1M}kz`ry^U#sZrX<HyY;Kv:t' );
define( 'NONCE_KEY',        '*AG.ty8G&u}kk^yXjW<{QH:vJ@1hlq&1@AQu2*c }2#]kaz_c`6gNri?jF`#Ei0m' );
define( 'AUTH_SALT',        '|$s[4( qE|F*c#4%,{8%xxm-km22H7wh.!RxkL.!ESJl8T3M<],5zqvu$|Qy~xE`' );
define( 'SECURE_AUTH_SALT', 'c6nrH/0 [rKl[W3u*(Y|7>v#%&V^<Y|rw+uNX#IF|ggR05N]L`t:X3U7md+>P?:;' );
define( 'LOGGED_IN_SALT',   '1vV:OFxn6SF/6)i1T-lh*ELP{AHO<;I1~;Sdc7${.z$$=.s0M>l6`x2>Z,*B&{GL' );
define( 'NONCE_SALT',       'p4$N38&MzO;9V$UQLKovFc(RaXVbl~P}?RO_vHTKV*y3db!nY >6h)u&RWa&N`h:' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'hm_';

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
