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
define( 'DB_NAME', 'La_vie_des_plantes' );

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
define( 'AUTH_KEY',         'P!0F=R{i/[AErCaf:!w;];q+UAnHI$y/XX+`%+tW@4|{/Eritv~| y1[^>o{v#&y' );
define( 'SECURE_AUTH_KEY',  'JolSioSbsw0cm*L&Z?%A:S_IaoJ^q`$8 qp5XL2h*h>gI[;RS{DW@fzwu]QfCWv%' );
define( 'LOGGED_IN_KEY',    '%ksmpR-O7NEZO6>gz]; >|;s,Cx^Q$s}Ra8,zoEY].E.>:[W[m`($0HfL?=&;?Bx' );
define( 'NONCE_KEY',        '~~V@kUW #O_c^`A%gd_Mp8AR)_H{%gK6zgHy+&k-bk= ~=sjO27.3E_|Gr&jkFI/' );
define( 'AUTH_SALT',        'zFI(x4,!:&^5oE%aeRRd.z/v)xnI<dkGnh.}r. T@ql7(??hj{QOs%A5R|kgemHy' );
define( 'SECURE_AUTH_SALT', 'Z|<@&&cYI}0~O)1MNU.}KSMY37>t^#OC(s w,EXlQ#(7Qs>/x]l+_pB8,DKe16NQ' );
define( 'LOGGED_IN_SALT',   '/m+}]~k;H#mNUGyp8dx}!ZC2DwNL$<2ba_5r9G#^gCVt|(iH&dtp{x@z91Er&_.u' );
define( 'NONCE_SALT',       '<!_nnwv!G1j.q>X,BfK,(,1}S7,OV`_yWLKt3So=@!u|T*~(^3loA0t+%5AJ>_*t' );

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


define('FORCE_SSL_ADMIN', false);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
