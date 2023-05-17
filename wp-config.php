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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'G' );

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
define( 'AUTH_KEY',         '{S)8zOy#Pu_?n8_dlnq>,|Q]Op7ZLqr;|HjO1ki:k5:s0wRQH]syc$D(9bqB>#3J' );
define( 'SECURE_AUTH_KEY',  '=Pkp:E;N(2)grB/D8/vw@vSC74~ywjm(d9A|A*&5^j&u$?4DIrv<Rs^k~A?cRk#I' );
define( 'LOGGED_IN_KEY',    'Dz$KzLH?fk9/bZfP~=3t:xD/+8U(QjR]Ecw.K3L,3_))=W}}RP#2_&RQZngM9e!Z' );
define( 'NONCE_KEY',        'f{YsVU6 _ah}gS.r?W@{`4b&Z6%;Iz8vMfjZBl6]=!6-:Ca/Rge!QK&O*^:b,ilZ' );
define( 'AUTH_SALT',        'VmG;h1B[MYC$S!1cMt_ PZA~A=b69O^qQHfvm&@{n)jW.F#G ie8b@dvV91@1q2[' );
define( 'SECURE_AUTH_SALT', 'f/BxU2IV/Od}zoPd8&5aOWK_;!yd{nw#ARw$9rUO`o,~h2_Nihj/JVmhQzP8Z?8Q' );
define( 'LOGGED_IN_SALT',   '%J95/Jk[/8Oz7WVRvc K;oh;i`r9s9:{+2{h{0?Ewy(xRsNw@]sqPJZ8$:#/4l:0' );
define( 'NONCE_SALT',       '-c:3hZv0+,fOZ~K:u^7Tg.vr#_RJeRAK?J u>5UC[<#?9LYn>?w%0A}h<+IV]}T0' );

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
