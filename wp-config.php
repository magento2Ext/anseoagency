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
define( 'DB_NAME', 'anseoagency_anseoagency' );

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

define( 'WPCF7_AUTOP', false );

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
define( 'AUTH_KEY',         'Eh[==a];^Q;8KyHw8$~YE8{ML>KXk4[K;TS!ZkGT1aIo;{rb{KP7<7w9n.h0p/L@' );
define( 'SECURE_AUTH_KEY',  '=NY_$dzLmg.P8.TCKb,t_tJj^NDfRt+,T*P)zweCNYd!kfYZMj6Bg:6s]<F!uCy?' );
define( 'LOGGED_IN_KEY',    'vOQ0^$!=F;i5JH=<?UScF?n@Q9@ ?}/Z;Skw+6`L1w6Is`SB%-1zNF?s>2`yeTJF' );
define( 'NONCE_KEY',        '6$zA+F{j6g91X$*a[`El>l}+Clta`cQd%+jn,1[&ckKM@V)Npk64rQPCf$QN60Q;' );
define( 'AUTH_SALT',        'utsb.v~%_-&_6M]B8bg=SQTL-j/.hF3L;Apc-Ubb]A.ZQN{;>Jxgk|! >PADOKth' );
define( 'SECURE_AUTH_SALT', 'ou~<q&Jlk0u D; 25F|etu:ceKm;^>Q5bEP2C.E|,.nJ$n#W2[j`VSi^h@#K1W d' );
define( 'LOGGED_IN_SALT',   'R{*cfNb69WfDlBzgJA7AbYy52]x?bzxL}y`Qb& yNiJxYJCVGBhjR&0I_>aQHn{j' );
define( 'NONCE_SALT',       '%k{WeleN>D0.(w5Z=];^r5&fmjpr4.y{U#4t<1F{*u.}7o2]s?sr] nOKEt*=Wfn' );

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

define( 'WP_DEBUG_LOG', false );

define('WP_DEBUG_DISPLAY', true);

define( 'WP_MEMORY_LIMIT', '256M' );


/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
