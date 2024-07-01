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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'interviewtest' );

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
define( 'AUTH_KEY',         'v9hG}g!wKBUpc+EPHkV,7<>/sXjI;!HANF`R9A%$*7TM<Zo+~;rHL/lDRc0pqn<[' );
define( 'SECURE_AUTH_KEY',  '(-#9E6aUrIR= )b&J%;H%Rq9J>fEgvH1=xp4 Rt$~NXq2`$9)IHQ}?-fZfv~+q9c' );
define( 'LOGGED_IN_KEY',    '=~+R&>L@5+UM&+ds-$8NmhFe^=wkOB%Ju(bUMyTZZ[9P*H0B>QD!P*`p9-aw$JaI' );
define( 'NONCE_KEY',        'aCF/=Dl}so|Q*Vgj3inrHGN w%6,og9Eq#9I Uk@d;7Oi532[q kcVRNveDNxo5k' );
define( 'AUTH_SALT',        '?Z2Um#@[xM*tNtL%^9wtC^@84GJW`4D%]}pLj;FAk(2J6-&i[r}%YuM34=PNJ_~-' );
define( 'SECURE_AUTH_SALT', 'i+OUOkfl^OKm%,iwt72pyk_]bN]>9Q5a|bybOQNP={c(JZJf3.6piV.fRi0827$V' );
define( 'LOGGED_IN_SALT',   'Z!GyPU9}`u,rxtTg0t^<6r[ECk>cF!RLnI;uFvU9$!9) 5/UO0. Llu*MRCmpEd9' );
define( 'NONCE_SALT',       'H_PjbY)Ls8Vzks.K%-<BbM-j- DsFE+*)eW@`TDrGUI|AJ(RhcZz[weeKaQYMl!4' );

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
