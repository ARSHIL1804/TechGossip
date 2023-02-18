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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'techgossip_db' );

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
define( 'AUTH_KEY',         'u?D0=cnYIECxr^ JP(Dw?811(+M}98$Ke~rOAGe~ZJce{X(+I%iDFCJS_|0OqKY0' );
define( 'SECURE_AUTH_KEY',  '7h@gU4U.BGq+zkNUx448WAiD!b~vTqTb(`59E%o=:DE~&|T3Iz{U19EyeD)Zb*ct' );
define( 'LOGGED_IN_KEY',    '7%2:a<LNDh7o%y;Rw~BK}+`VK0b(HpGxy=m-()R%S*~`1bDB$C?S:Fag{W_A=bb(' );
define( 'NONCE_KEY',        'uoqk=Pb+E;ROYvazm=3L8ib~@^?N.a6?g*VxTJ4O-?:9knzAW~8rBWy?<#uC{_b}' );
define( 'AUTH_SALT',        'r4=sY?nW4[5`[bwUc$TTSg]x^5^$JnK_pg:.mjLJ4#t <UJLIdUo>k6!jdp#TU9e' );
define( 'SECURE_AUTH_SALT', ':Q.=n&EiXq@#4<VT~XN6$DGLHP%y_<y]>#r%Q3b|;nsIfL7}AV{~Sf1X]PoHF ;S' );
define( 'LOGGED_IN_SALT',   'TW1OV%c7S,U,yS.a^kD$y#fh::<MnLSTmK#KG_hAf1$jt5r@5s~3SkBC-iSojR 6' );
define( 'NONCE_SALT',       '[gL&3@vleN8M2wY|A|Ur)l?nU_?bs?^Wc>PJPM+f4ned8>@:]7$]VQZ+hj:qw`b<' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
