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
define( 'DB_NAME', 'it_solutions' );

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
define( 'AUTH_KEY',         ':A#sAIGO!wPTy+<ertjoFc*Cz]OWxGiQ/+aB(G!B2G BZ5(mZV)A>lVZb{Et;HZ?' );
define( 'SECURE_AUTH_KEY',  'fYM+jgllFp@X4WJ[12o[m?[UZc6HCNh$k~>)Cgtm(o<M(1L1x]h-L`>lC*)v|+cB' );
define( 'LOGGED_IN_KEY',    '47PJ+rvbl9jrXjue4Zg+xfKJp}EXq-%/zH9DN?XM7zFS:B&zh*L ^[b9gVtw4GZq' );
define( 'NONCE_KEY',        'MeYL_qs_7qV;7J([pqsv}NV0(@giw>1GlDsg=p`.fdXe{~:(Eb7>nU(O%Ij_yfb8' );
define( 'AUTH_SALT',        '`53qBv [DYB%j}%alHX>.:CMH%`A|`=NHRmb(r)^E:VN$z%M._% [J.4^^k.OzXw' );
define( 'SECURE_AUTH_SALT', '-[=;`Fsl,$ HSNUKs{bfbe.,sn^Q0dr2*Y&;YzVRx*K[`M&s$U 6TOA4TMTD?$>E' );
define( 'LOGGED_IN_SALT',   'N9p-w305_LP_^Px)?-f:r:74u<-+uV,>Fn7V]9FFB9D9&OV^T+ztG$)n7RmpQ`<$' );
define( 'NONCE_SALT',       'mO^lw9;>MmkSvl0zUFd(nh^=mn+dMhw)s[+-Iugu=J5+z! zwm~I@&E3{@Pks:RM' );

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
