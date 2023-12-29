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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'yd12??*T}qxz(ulNb_LWGtu(e@EQuKX_m=3mekgdEx$$3mK]q#pk#Z7jABG;]};}' );
define( 'SECURE_AUTH_KEY',   'g$L!iV[${b5m },a4Sspty5W1KZbWO 89tJmgdp&q.LdROih5v)*MJsH-f~zRc:+' );
define( 'LOGGED_IN_KEY',     '&GPx>m_y-|0E:osG%hM]rn!b,Ye/[>=UpueWjE3!g#f&bL/bRy_<4DzVWySf}tMX' );
define( 'NONCE_KEY',         't=y;l~zW`#S;rV#xk-~dZ,9zo>mH-Bq%S:hMO1Rsn0C[*9G^+9Xr8]FaKbir:g-[' );
define( 'AUTH_SALT',         'gThmhw,$EPEGf&Zzgt.YJE3%b,2T&TZ}Fx5ic]q1&j6/ZnBnHM q_ D2,5]k5K2,' );
define( 'SECURE_AUTH_SALT',  'SkWw~GqgXU]~PYgS &@1@A85QfM> buXK3Y3a=EW^Ob=TzUm%/}?T;Lu`.#v3[v{' );
define( 'LOGGED_IN_SALT',    'FA~esK?^[3a?4^f;B[@r<PFFZ92+rm.dr*(4%tW,u$+@))2[NR I8q]FSM1|u+)`' );
define( 'NONCE_SALT',        '$1WR|zrp8RX[OKUM(Zo0N!%yz.GwQCLRqYH %(-sl]GKlA9Pe2Rs1saJr_F;V32d' );
define( 'WP_CACHE_KEY_SALT', ' G*zS}q.``xvcK8Id_w|R_B]`6t9~Xcd40^ij{X`4ke)?y)~wnNs[%+L)W|QnQz;' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
