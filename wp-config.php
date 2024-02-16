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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'influencers' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'Oir7eX/eR]GeGnu#:_`|||J4o9xeL=/w*/{3};ba<g=xd@XN[JF*Yuw):zyDsxv[' );
define( 'SECURE_AUTH_KEY',  '.K8y8!%!dY?f=(u}VD5gXI]b+|Y`*xwX+k>C.QR.RC>-+d$ML?HVn4BUT;Yri)c/' );
define( 'LOGGED_IN_KEY',    ' 8F4(RjLcC|@1zD $@sKl}&y$&*k0Pw4/fS*Ji3}D><>(fb!/Kw}{T}o>Vs#WqI1' );
define( 'NONCE_KEY',        '~GxM#C3+sg!}!_>(l?Wl-rATdAI,ovdaMKuStxiZA>BkaV^Bn_0Jh:8aw?IS_%@i' );
define( 'AUTH_SALT',        'RZ%4-ITNGQJNV<]QHvwL{08D&41=_`v`]6Z+#tb/ x.tM%1TL]j5R)8_V*`x(M/a' );
define( 'SECURE_AUTH_SALT', 'j>zGWM@M`}mEEQTy~^$Ck7%/!i0}|pn[=}X.:bo#NYo0g0#:$9^qVAUQi( U0PZ:' );
define( 'LOGGED_IN_SALT',   '9Fq0[o=] gR/&v]CPuvB{tOER/^`7t@8}tL%@6{2wk|V4Te]eicg;<=j]bh#Kn>%' );
define( 'NONCE_SALT',       'edx;c|]#DC2xj?kw_.Y_zRi:~In{eB@3ZLQ$Muxp?;[0i@Hr?@Nzdccwa:as26=:' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
