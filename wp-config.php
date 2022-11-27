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
define( 'DB_NAME', 'wordpress_josueoblitas' );

/** Database username */
define( 'DB_USER', 'wordpress_josue' );

/** Database password */
define( 'DB_PASSWORD', 'josueob73034147' );

/** Database hostname */
define( 'DB_HOST', '168.235.69.64' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '}%:*s)fT?(iT^Q_]$L[k|4z<2=0m=R r1c4,.Q!KLj*5i(,#uWtoCN+GN) 1 JD{');
define('SECURE_AUTH_KEY',  'uTOKcnJ]k}.D|>.Vzt/eAaqk%e6*J)n#d HyE-@;|%_0?g/H$[+ :A##uqb +h$}');
define('LOGGED_IN_KEY',    '+-&p&|*ggrT.4HfY~>r6m2~j/uey|d}2wF/a~*&Ef%AGuJYTVfL=5K5|EA.cp6&+');
define('NONCE_KEY',        'wlS.6=n[b!_@#<Oi&o.pWW|,q- }V|M`YhR|R*m>*0AHi~8lfqA[(& cnHhv(98b');
define('AUTH_SALT',        '?FK;atD;t8U?b+JIQK2Wr&pv=+f0ZTrDn8kz(T.gC>$saHQ-3uVoN5k6FL+TN4|t');
define('SECURE_AUTH_SALT', 'Nb:L%`TOkqTziM%F=pXYO(bq!8Dh%W`u(JbO~*]>-!v0BM[q4H]nqZ#7fte~&;p{');
define('LOGGED_IN_SALT',   '>WWcMig|TbPP2;~:(m*%O@1-E>v[l>.eIma+qS{;6P!%xCN|@=X+%ij;.yWbh?e*');
define('NONCE_SALT',       'VaJ47A-}ySd,CrRLQu*N^f((i!;+@2/P)-^0+y8F_ZGg,;GSNiX*3XPpM_U)s7=:');
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
