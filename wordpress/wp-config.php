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
define( 'DB_NAME', 'wp_zavrsni_test' );

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
define( 'AUTH_KEY',         'ZFlX$0]XOrrP>YJ@,qO8k:aXt5i#WQ(DPt/ku:eWu$@bob$utRI*M+<a+$lTTtu*' );
define( 'SECURE_AUTH_KEY',  '0_n3=XN9`a%[c0 #xu*6|l+]aclM.7^u  =^?cSRt+1<$#M4zgB~/4Kel/Q,9vsq' );
define( 'LOGGED_IN_KEY',    'S}D.0)mYC<0(4V@=6zT;Vl8,fl^$n+gLGYQ-0c:#XEm#GK1&>5zmT/aC,VgTV]Xo' );
define( 'NONCE_KEY',        'E4~698,(1tD,=x=@ 9B8pbhxvb#*2%L/Z^= DB|SJYvE]@(L y.@xI_UjqPRY8%U' );
define( 'AUTH_SALT',        '8#l`zO=11x:0{N1|s,uLWeW#g>?oGiS>>fhe)@7]EVrBY!R@&AID]N%?s(u[Qk2+' );
define( 'SECURE_AUTH_SALT', '<r`8[u9PKMjR&:6NS3V:WJ1u.3^U;H{FFOzxQi >]2]f%|[A]Jg098OPmI5!dKAc' );
define( 'LOGGED_IN_SALT',   '8r)!8KdxyqcOb#<!+@{p8x^khR?5Ji)qA>IJb|l)NB>EfI:~>f7z4xK!FvV37T}^' );
define( 'NONCE_SALT',       ',fi$A~Se5vWsBh~[w|%fa0*>rh)FkhG30Cw(Dt/|`cRg|{1-i$u[~zGT^.vT>%,@' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
