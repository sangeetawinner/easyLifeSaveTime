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
define( 'DB_NAME', 'easylifesavetime' );

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
define( 'AUTH_KEY',         'C4rt75W3lm#r?2}TC.d- W=yV$axhY+9%u@V>WH3/?.[-v2Hb-,?-,*O@V1$_R1n' );
define( 'SECURE_AUTH_KEY',  '[EeLCkS}%JlpM+wC#)j3ASr[YZ<iCon@ZjR+Ol}N a!rw#V!YkX|m:Z2ugJ]/iMB' );
define( 'LOGGED_IN_KEY',    'V1xRAi*=6I/RKDC XQOCV!b7atB>|VF0MhqtPA+@Y998+u@G&@u9$LLI+P;ICwk}' );
define( 'NONCE_KEY',        '}a_+%_;3s(Rf;43mDlbGS}v5a)_TL|yIo%VVGF[Edq$yLAtoW6KE,V^o$bPFj*G~' );
define( 'AUTH_SALT',        'Z5[.Z%i0W+Qg>Q^c,Ex.e<&w?/pbvjL:W0o=gm=26H>p<odl[R{=U@g[)&Qr*-]0' );
define( 'SECURE_AUTH_SALT', '?jiF[gD|#wE1b8d<9#>!Da>L88P&]z:DOX]d~4R$}t|u(<}R*^YI9/HF[cM9O-m>' );
define( 'LOGGED_IN_SALT',   'uKJEQxEh>f:FNsXa^SO>1$[bUKyYIkS,~?G;$I9&uo|>*v>iXPxi%~[~PVRCi338' );
define( 'NONCE_SALT',       'TJ#OpW/$ITpO@.|q0Z=#qX`T[ybv*Dr@7{CjrvLWq n?bZ^ZfJRPE%K=vsJ~Jc-)' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'elst_';

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
define('FS_METHOD','direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

