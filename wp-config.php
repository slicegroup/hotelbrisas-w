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
define( 'DB_NAME', 'hotel-b' );

/** MySQL database username */
define( 'DB_USER', 'fabiczg' );

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
define( 'AUTH_KEY',         'Lw0HglZkkdx^{pi_9V7u_3#^Z^xd9@+a*XByKbU] i`f[&PU81s_(`i(PM=)j,|5' );
define( 'SECURE_AUTH_KEY',  'qK##Kvl5gh:13~2_td3=bd6Jv&F2{%6R>N7[:BN2c>Y343RS;qP=mXdVuL,:;9 e' );
define( 'LOGGED_IN_KEY',    '/4dqINCn0xIL8n-^<|J?~C_7nO&ee7PPjr rR@96#U]q;#Ik&B1gPj}N*R2{4eP<' );
define( 'NONCE_KEY',        'X(GRc7:I(U|DTrMdyHbNi>G[)w^WL^Y%Mq wI3w7 ?!7fkX/W?*p^9 &Z?SYm/m4' );
define( 'AUTH_SALT',        'Fho.^3%Uv+JVEB2hjIu&F2pRM7;Q$1LOw)%.E$h_ WlFKZ$Iy@E{xYLx.W|3^s&7' );
define( 'SECURE_AUTH_SALT', '0}QM8*0iN<r&p(&1EeJ?T)s};Wr< bzEzTwH6iwgveNud!T1|n($gmP,3t7hQHQ|' );
define( 'LOGGED_IN_SALT',   '@Xuvn&&Qs+xfOHf(|fGlE!UZr3U{iqLZWV}#;!VI=gD_Izdne}Z7CgXc<2dK hU8' );
define( 'NONCE_SALT',       'UY%mF6K#1r2#|je=Kj/v=E}sj5=Cu}ASfJ):oufj7m%_[$hg!-]a=h`n-}MNDw?y' );

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


/** Absolute path to the WordPress directory. */

define ('WP_MEMORY_LIMIT', '256M');
define('WP_TEMP_DIR', ABSPATH . 'wp-content/');



if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}
define( 'WP_TEMP_DIR', ABSPATH . 'wp-content/tmp/') ;
/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
/** Absolute path to the WordPress directory. */
define('FS_METHOD', 'direct');
