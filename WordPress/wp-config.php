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


define( 'DB_NAME', 'zwl' );

/** Database username */
define( 'DB_USER', 'zwl' );

/** Database password */
define( 'DB_PASSWORD', '131714' );

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
define( 'AUTH_KEY',         '^y`$#1oetM$#Td|2wi@,d`yjfvry3E+qEI_1PV]%U!E(hLU%um)qy>K11Ra(@$kq' );
define( 'SECURE_AUTH_KEY',  'pLZ$_HsJvVfqE(6se?v#lYYBT@tMdg^-XP(rQTYJ[Qh[@L^4g>licyWbdV>+pC])' );
define( 'LOGGED_IN_KEY',    '&%4/b~EOM9lxB/(g|S0#Sn(0Z!Z2{$FDc#Pm>%oFBr7-X$8SPfHdc4KOid=aM:}`' );
define( 'NONCE_KEY',        '[--b~$Y14tlxOg+TyDJZ@g{bHD_tcU:-Ej{Rh(b<(|,~1Z*?,^D+WVY+`}sp`b{J' );
define( 'AUTH_SALT',        '%/veFCXJ<@b+!T9e-64qMQ=*(ugOephNa7sz$D4j7$wpmelApb^|<>,j Qv7W`a[' );
define( 'SECURE_AUTH_SALT', 'R`49.)d-kxXQAAJKD;X:mn.!(<6@y44S*tw&{<ki@9wFlGyWrah<s`1IW4<+B%a$' );
define( 'LOGGED_IN_SALT',   '8ny6<aZK6X#]y^!P_of{:?00MU8KFg<@-,@L,eU@|9ET`=/nznF]R |eRPrkxUDe' );
define( 'NONCE_SALT',       '#:-4U:DW)@#IgN!0AQhCq:U~|pi!B? R6l9q$]_K8#W^$`DbVOWK-FGUlZ*8g6$]' );

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
