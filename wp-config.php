<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'custom_theme_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '4`7L1(&OUEhGdIujbwf%&_8(6:$e{ o-N!N/T7WxA8Vh##q3?^1xgDT(<wF<N-4W' );
define( 'SECURE_AUTH_KEY',  'K#ruG,f}}S;?~}[?*CpQn0Cj0m<~OOy_j=CO1DqSJcKlT`mh!q{Y`$)mAs&CUjS!' );
define( 'LOGGED_IN_KEY',    '6Zlv=,&.*%-?P/i2qZra3Cm@#V`?jYoe!XDV$L9UuMlfkt/S|:4sx%2o {A3mRPe' );
define( 'NONCE_KEY',        'wkOSI2qZgZSccbL1]m&R,m#/Ohnm.>gL|qEHHx[5#(i[Q<%e)3D*af3k=&Jm~sMu' );
define( 'AUTH_SALT',        ',tlT?{W.Fz6ZIWXp^QOv=,Mnl+#kn>~yWd4R(.87fzUBM_U);#}-?OPDe?CTk&_P' );
define( 'SECURE_AUTH_SALT', '7tH.hp*8}Ty-tz)FRjjWf?:R;E[QmvE>XvZmFR`Cjf}$,t^V_KMY0gJ3yGYt$N,4' );
define( 'LOGGED_IN_SALT',   '8E_I$4*vT((%xEGFB.TU-f/w8VYv]7e,t$wGDNg[ke/Q62tHOeQ6Hw=kuJ|OCZY;' );
define( 'NONCE_SALT',       'M+Up^oA`2GXFq]f_nf?gok/1@QB4X#N*b$}VUhn$X{.mm5r$E[m]*z]2TRhx0?/[' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
