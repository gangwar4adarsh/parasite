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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'adarsh' );

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
define( 'AUTH_KEY',         'IMEB_QgN1fE/rZ*5LUT.SgW`bDVthx|RbvJJ)$iN,k_]* qW?yu)wGoos `r6wtd' );
define( 'SECURE_AUTH_KEY',  '3mbn}}ZJxS#{U3TLGCvTczi%:; *W22Fd+=R;$nGv{K+li 6o6L%6P0T @`_[c=y' );
define( 'LOGGED_IN_KEY',    '8[x)Eq[~{hehfC$xJI.)AO?~~?d]`F#TzpI9<:_H$xm05Q &Zb4mntt!L_V$4jW ' );
define( 'NONCE_KEY',        'S5b<8W?|)5e.LB)P0wQPN&HR^SN%S}n1QBIVrYzeo.1#V6],|Gvb5QO(z!4Y-J.,' );
define( 'AUTH_SALT',        'TQ4lsRXI_wwk#}NZJZ;m9-IgPo?SCgBv=ubh[lwu1:J#r?3;qM*1mYOV ;XH3=HV' );
define( 'SECURE_AUTH_SALT', 'z,4$8$+(N3YF//b)]IOX 7z<CsuvmQ#1)BJ0m>$ [kHOL32Eb{KZ>X>w9hL&_-C]' );
define( 'LOGGED_IN_SALT',   '#]f7v7NVcJBnmG}OGGC=VY52wV;?dUt/6p_59h;((eu^7UTYabZFZ<Aq[YOFWASN' );
define( 'NONCE_SALT',       'k QUzp)P!ptxUJR`3;f%-p|@S%a|Ve],N<)}eX27bj0fCaZrCnEh=_vwM twXDvv' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
