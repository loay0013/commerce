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
define( 'DB_NAME', 'commerce' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '/2A.3|F|AfK,r4,zLs,eWT]xp0d[al?~+3PqYsxcdvn4hIf>{Z023#?o^A8pY*q~' );
define( 'SECURE_AUTH_KEY',  '_XHZ{Y$PgZ-hAk=;#+_oq0ZfMXpj-wG*P]J)sg7Y349 ^;j?N{%$?wN>POT+m-C:' );
define( 'LOGGED_IN_KEY',    '<kl5hzkEVv96*8u,QvFC+Pui.N8, 2ieDiVr~d!p{;E+)#bE^o@&863zbsyc$d2.' );
define( 'NONCE_KEY',        '2N)Y)FUSOZ&_]V~/kEsg)&h]gim*#l3SFCSt:oz26`2h0Zw_P)k&.|4&c;NN3(<4' );
define( 'AUTH_SALT',        'P|ltbXI0b{9mF8@[Yr#QhMN!Z^bWPb)?`EW_zjQaWeQFXysC6 $S`E>31hwVj2`$' );
define( 'SECURE_AUTH_SALT', 'puA3X5~?l1U3=rmIG!3[z!68m3j{L{aGTG{e[aeZ9WiJg9g:h!JRd:T0+`)<cPO*' );
define( 'LOGGED_IN_SALT',   '1VG 7)m]c%ttkQCSS5ok.B,H:er~J+W,DlrXS5eXARo I_H]H;H8{fi|jLAYh7@:' );
define( 'NONCE_SALT',       '&c(aH+9C5^f?F`Y+0 %s6T-./f_WV?6$o/6RvO./{5,2VH:aAE]R>O~ho7E-qM8l' );

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
