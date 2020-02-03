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
define( 'DB_NAME', 'wordpress_starter' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '%YucvwA1IO`>AH$~U2xK1cC85=%T6?=g2&W>v^IOr0993-aPz{&t2(3Z1.U?W*@J' );
define( 'SECURE_AUTH_KEY',  '8<1Da@S)>QQuu@Hj<2q$Y5%f_RAH<JYi2>b!@<QWdCd5FG8C+/]s|nm4(5znDpR.' );
define( 'LOGGED_IN_KEY',    'ow)W:>>JY1@0i$L0lw?1#S}4>8{Tosq5FNMsC)a^v7nxzI2.X+O^t2sEPNxyJD|{' );
define( 'NONCE_KEY',        '7tAJyAQmNllN)c(Ls}01*&k>DaBEn6Ui9!6=[II$Ug`C~{4bTi3T>o>5Otqcmok2' );
define( 'AUTH_SALT',        'O+0^gsoFm7r}{c%`q96FlEDE>s]*k|xO<;kt!+U|8l&@ez+|=>%enR!$=hFXB<;U' );
define( 'SECURE_AUTH_SALT', 'EA|%bM2Mh5b3`xxm[6twbjG4=.igL+/-8CyW&-^._QDoVCiQP) &gEW9Uf;PD3ti' );
define( 'LOGGED_IN_SALT',   '9##hCyIcL  Y(XP/c%OxC7/wcBM]`lS![Z38uHBp.<|=OSZ$}vu)0l~qu)mltuXM' );
define( 'NONCE_SALT',       '0fW &Vxr>Mz|Xl>GxNb1n+}&e^G]e4oP-P,%Fz<8AO?YP9ogNR ;8&lB&prxG0/6' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
