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
define( 'DB_NAME', 'roseaction' );

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
define( 'AUTH_KEY',         'E}eg68po<hdJS `QN]LV7#I{c0YxSaqp|ZGo{j!rxo^y?13yqI~4}Ctj::?7;vI&' );
define( 'SECURE_AUTH_KEY',  '!yr>&RL-*6)b{e^hX/_iw9PheP2v;3w8WG5;H/+z:RXn:W)q|yDL[O283U/R2?A:' );
define( 'LOGGED_IN_KEY',    'SnM{?.;_Jkx:] LKJUvsNWH[uHGDZReU%@tY>1&g</j%${]||Sj[$qDryUZKM7G/' );
define( 'NONCE_KEY',        'v%d<)DP,ndhZ^K^Os@N THuy0%J}ne-$a;}T{v9Zl[OBmS%x3`=.yecUmi4.`Liw' );
define( 'AUTH_SALT',        ']0`HtLcWXhCAwQPV!}F+k=ty$1c+4l-Mw9YRI9;#?Mq;Qc~>)by0&#F(w}G}|&RU' );
define( 'SECURE_AUTH_SALT', 'X?w+,x8jS5G.5mE<C_E RWSc]a(!d1NPW$Uxxd:0x@Ke[ItAK>/ADS6c]&<|_4x7' );
define( 'LOGGED_IN_SALT',   'z?/1QVQ{$UmG.~U&qkl[H9xoi!=>az&&1K6-,X$$nHmu=kx+))<t;X&s}SL;|;@{' );
define( 'NONCE_SALT',       'PE}E9H1gm{hstC?F=yHl}d1wv&:hTwb,lSBtUZorjcGWsX0<mJ%f5g@^[`fw|V8t' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
