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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cefa_web' );

/** Database username */
define( 'DB_USER', 'leandro' );

/** Database password */
define( 'DB_PASSWORD', 'L34ndr0b4r47' );

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
define( 'AUTH_KEY',         'fu2cb[#WVWb#n|,bV#r5w<CbIuwk$&)* V|.+-b`T/(l~nc9@_^>9~4:sZ<sT!u1' );
define( 'SECURE_AUTH_KEY',  'Hth!5&tL;AU!j/0&H#N1@r+!1I?oKS[%MOl6wxm3(xWrn(LC);iD.cT`g[UbamZE' );
define( 'LOGGED_IN_KEY',    '=E4C^n6j;|S*J;bhpo8e|9~urRB}aE)ku+IFjEY$#,@>4;HnE|:hRgvZz&a&cr0K' );
define( 'NONCE_KEY',        '/xf~>Iz[%gkF]lo1&=m9#DD6 QW*m-OVI?[xc[jv3.Q=+n>FI]f79l5597&.vq<7' );
define( 'AUTH_SALT',        'TsOA |-6T3!Et!c19{K{w>-o{,QG97s_#r N>JQX%>:%Xl3Nt{tJK)nFR[ tPz|`' );
define( 'SECURE_AUTH_SALT', 'GaLO&ROz,{7G{16a<0?B29,p.4zE.==D42y4fq*ysp)ICS)y.}0^(;IbuA$n^GV,' );
define( 'LOGGED_IN_SALT',   'fYPEb0$:bt|Lz&+]C$/:]Lw0@[u_/AOp66?(GQ?1V*C$<:{CQdpAe?8SA%_*xFqs' );
define( 'NONCE_SALT',       '{5/4H_-`bNX||eAmw-yhOBPnT3{e5`,8>SL/,Z[kd59!%sM<8c@,DGM9lBzgil:p' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'cw_';

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
