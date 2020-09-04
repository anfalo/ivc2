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
define( 'DB_NAME', 'ivc2' );

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
define( 'AUTH_KEY',         '%|BLht?&~`|u+h(leptOL+.U`/GGZ5(HdaA iH2VXMUV7@yf<P3,e?q!.wJYF$/n' );
define( 'SECURE_AUTH_KEY',  'QEsQk2:t)@5qGK@8{;hT^-g$wgH)zm:(T*)Hc YB.w5m/ZZ&8D7_=5Rj`Z2)pw=E' );
define( 'LOGGED_IN_KEY',    '4>c?ZvR}Mw&mQum0d>pOLGN~wD+3}mL=0q?:TtK.4X&ORF/|j|cX-~njC^a`fN8}' );
define( 'NONCE_KEY',        'h9nk2Cy50Oo@9,Od8qMErkY@gd71J1Yye]#T]Wu&Fkz^lAZjm~%iMj!~.#EUnS9_' );
define( 'AUTH_SALT',        'a19WSQ1^&icony`9]o15odu@$qa<?7&s5Jy0K`*K9^=gSv^j3uS8NVs*6iXD(?8c' );
define( 'SECURE_AUTH_SALT', 'J?F>5K@hm{$C3K^wh[KgQ PGgZ8;_~V!-g*WTA&2LJzN|E>AFe$WF^zia$bqdGmp' );
define( 'LOGGED_IN_SALT',   'q.U^:7RV*G#*zf9P_?BAV@IWzmFSNP?w5?h*sG91xhDp,BWKdfDj~a|yJJ%W(TkA' );
define( 'NONCE_SALT',       'Dm-wl ~cr!z91Ds4C;CZNqCq17^{)mH`4rVsJiz|l*N,PPD q{tpvuiQt*^r<=2H' );

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
