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
define( 'DB_NAME', 'photoshop' );

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
define( 'AUTH_KEY',         'U|;3!TjXbvT:|uPbWMQ&9qkY4o (Uv:^}?R $/A5X81?3B{rMQJ#sp,=[81p.~`}' );
define( 'SECURE_AUTH_KEY',  ':sK~$2*=Csc}Y$D2vJrHgF5nOC8ez=`F!^@=+7~QvE.UdYxpM4Vp|PV6^Aa7I/M{' );
define( 'LOGGED_IN_KEY',    'p-<bBk2+$NETB3KWsMtD[Bec4e%TKMi[#LNMnwjKzoeA aM)NS/{hMm{T8mP*?dy' );
define( 'NONCE_KEY',        'Qhu^-mW.08Y^gPB>z`0(sAsL!y& ,)RVT~Oh]lyQNu]@Me2PvyCUYBprcSY&Ap`w' );
define( 'AUTH_SALT',        ')Eev _peHtpi&1|T$%VcS8B78L~b@Lk!<i>ENiU`|&+f>(lONM-K&53#H=]<YaFc' );
define( 'SECURE_AUTH_SALT', 'S#]eKD|6=;|h$tWA4uR6_>#~WBnkFLhsj<s7_w/CnB7{[3cuE23=kvw7fm@9Hm}>' );
define( 'LOGGED_IN_SALT',   '=Uf1&,qn^TW][|;T}C(5IWb5-E9$3^r^/)BoTENqI3Z,Vi5%CmQ0h}+h*jnNnJne' );
define( 'NONCE_SALT',       'S_MEfV6|hT4ubeAr5[x}}7l(]~rj:TK4}M[||W~=AZ4P{~(T FZbxn,XnR~1qYw-' );

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
