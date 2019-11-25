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
define( 'DB_NAME', 'wordpressutley' );

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
define( 'AUTH_KEY',         '2Me^pKjVw~xgO}=wg%]<SE-=_R,]!#&oYjFqHM6i8^E*@R|o~%5ty|oIQ&cX^^mP' );
define( 'SECURE_AUTH_KEY',  '/Ot?[4VtO*HKZr=ohlJfmM54fmD~KsLJ>m@ssvreiL9}xX|v<6#IMu*g]H@B*saR' );
define( 'LOGGED_IN_KEY',    'Q}N_y-kFtPWjdg4qR2i^_:=O:US9iIFf?k|A_.]&$ee5]WAv[vykp9mCTX}RHUWn' );
define( 'NONCE_KEY',        '$.b@X-J8MM2RQIDKP1]w!f Fe21sdak/wc=Q>!u*T=0;0WdO`eCt2jTJ?)FF5oy ' );
define( 'AUTH_SALT',        'ALU>)J:qTYh9%`^9JcWc30%mc6*;r=~EGxw$c{tC0$kX~99#&hwb75/KbKb^w2$3' );
define( 'SECURE_AUTH_SALT', '2,]*H?xg@W#uY}EkI,0y<2DLqC3 5thqA4_}6T=J(+LN^af8Z#|F6QW/WrEu,$I$' );
define( 'LOGGED_IN_SALT',   'O1lLJhqC:=.%{:5Lg>#x/>j}z3<^6.K%OozfJu =!%zpk,dphz<V.gxmY8GzaCih' );
define( 'NONCE_SALT',       'r+C]5(u_DvNH^NpHFf7{z7T4l&ZQ5~RgV+^Ww$YL-(p>: LAh{GPq93IL%Ux&mei' );

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
