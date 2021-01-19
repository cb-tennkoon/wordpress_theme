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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'own_theme_wordpress' );

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
define( 'AUTH_KEY',         '5gkZf!xSW)TSd1YO)Z^2!yU9dl}|u`bBC;A~T,H{F2h7#Wm123$Ub}[BSUW9Z&=b' );
define( 'SECURE_AUTH_KEY',  '&W&?K.A7/}Bp|aDak}fD#U5..ANh-c{ZcLm`TGk!VeuF 7RU?ROkp&.BO-u_r*3Q' );
define( 'LOGGED_IN_KEY',    '}B);q`}R7UcB_on U){m82-F6~8Z<apJ+;vzJ:g8$?M%W`-DdFOE}w4`aZV$0u[@' );
define( 'NONCE_KEY',        'G@w,c#H*ES(>hrcs>#^%iAO?i1a>P<S6$K5M,pOHbcQ&)$`KoF|Cz{X<zOZ@EKH ' );
define( 'AUTH_SALT',        '{k)4I(X==XKfV)]0c~JiPB?$vh0rGgNn6?zYa+Z3:Jri5^k-8.Ca?Wj?(EQJ{IfW' );
define( 'SECURE_AUTH_SALT', 'M$GFx%b6$%IY]nRpWkyE<}glw;ZH-vJ])(q!YwO&I0>loW4HH:3Rx?Qw2%B`Cf:W' );
define( 'LOGGED_IN_SALT',   'L~![!|iPKRzu8!bgW=YLxs1.~hQx5ayG7y:~yn)# rhP[_$.31C~7ftJ0[i>;`qb' );
define( 'NONCE_SALT',       'RJ<-@6B_EQabPX+%FJkOt0R](8I2bjXdA4VipH]zd`O&3*Bs|: /!+1.%&E)YIJ(' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
// define( 'WP_DEBUG', false );
define( 'WP_DEBUG', true );
/* That's all, stop editing! Happy publishing. */
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', true );
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
