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
define( 'DB_NAME', 'localocean_offline' );

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
define( 'AUTH_KEY',         'MfA76]rXoQy?pl4z<aka$R{$gfQx*cj)3,hD)X}.|fhj]-7d-zCcM8^%oL iY3Km' );
define( 'SECURE_AUTH_KEY',  'C{u|E!gK#@e<y!}:U0%wxG{MKU=h~(47?}GSa@PcQGpQ0CDsZ=WG4pG3uKLK>oQ3' );
define( 'LOGGED_IN_KEY',    ']th1{RW]&74PW7,C?s(]1q}_t$qCH^PUJiJ2d~//=GOCp0##esB%a}ZL*j{q`ghC' );
define( 'NONCE_KEY',        ']a(YNR_yA4Y&waZO}=3rH^L}|g&z;]f:cIi$dMxn2[v^ItFxZwtkb>VkY2OU*P)/' );
define( 'AUTH_SALT',        'U4PB!S&Ua#15N=[~1fwQv]fk+x(%)]qe>=2B;wxFU~C>8|.6<v2!Kh.E<aPcNzl<' );
define( 'SECURE_AUTH_SALT', 'CH`F~tGJZ!`~Am^]okSCM#C(TQhNwC[#lC+H!61BU.;j:<E8XjMu2<4I)I^rgm/c' );
define( 'LOGGED_IN_SALT',   'fO>dl#[sM#3|, wB`G,OaInYjY)Q;SY7f89yNQnKx CKWh|=b:{vnSW}Y0NZj(ji' );
define( 'NONCE_SALT',       'Z[NIPa$>WWTkdB<I7FlpK{On@Qr1prH`wGtDT@dLVw>rv[Hz*KgXzub5KLF=*;|E' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
