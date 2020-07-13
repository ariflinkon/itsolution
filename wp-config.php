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
define( 'DB_NAME', 'itsolution_db' );

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
define( 'AUTH_KEY',         '>}67KhQv;8d@1miLcUpI:wp|tfa6y=V`]>KP?!aCgB1|.b~$_MsNYr/n$^etxv_i' );
define( 'SECURE_AUTH_KEY',  'keofMk<5{y7wMZXdyYyc.u#y{;L_Aa:&= tUiyVz|lt?4Xd[myUVP0}a:=@npQ.F' );
define( 'LOGGED_IN_KEY',    '0w5$Vr3L#YD79{Nqf@16TR1sIu:qa~p>(S1m#26Coiaj<o^W}V}d`P W=kLAFm>E' );
define( 'NONCE_KEY',        'C=]jB6eo6T^q%Iv7iLvwn(a8P hRBq,WezoY(@.Fr5bi`e|FvvTF=cd6`,&%|_4[' );
define( 'AUTH_SALT',        'kol]zP5Qc1tUYK)-KI^gC1hm&m`oB6?,&7?*J[j$iKSjRWD]ybe)evb)*gRi8Zfz' );
define( 'SECURE_AUTH_SALT', 'lX;1 *Al<HzH7fFIH$uq|u^-=Sc+-q_a]KG[%~{ww1s8{<Eup;i-2lFov7(P0@{O' );
define( 'LOGGED_IN_SALT',   'EP#<Jaq=c&f6ya NP7x[CXZ VT?+jJ-WimP$MQnhQLhhgeX6qTvw!7SjDMZ4Xt/l' );
define( 'NONCE_SALT',       '?u=W3iWA2zh*BRBk#>BGFOYn@%GHV8Zeu%nnG~j<?x&%@l1I$F3gv0j=jxE$=HSz' );

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
