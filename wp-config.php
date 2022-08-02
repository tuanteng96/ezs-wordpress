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

define( 'DB_NAME', "eztheme" );


/** MySQL database username */

define( 'DB_USER', "root" );


/** MySQL database password */

define( 'DB_PASSWORD', "" );


/** MySQL hostname */

define( 'DB_HOST', "localhost" );


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

define( 'AUTH_KEY',         '6Af~8X*fO/)&_J/Rx/oC5Jg0g(X&Q-hOa>?R,P|~YP,Q+Tv9oHXhG{EvT ?)0CXW' );

define( 'SECURE_AUTH_KEY',  'r]#C0~S?IM]J_@2=LQ~DtM=9XyKR@}+S<Y-Odot5Kk27%^*`?AqXVvg(+l6#}4J@' );

define( 'LOGGED_IN_KEY',    'x Km8!X=cN!rQjGY+W:~?^kB-ACEK1l*QG8_,YYk5P {~[1U8F v:ZI`x7TIy?b?' );

define( 'NONCE_KEY',        '1(lQv{9Ub[!wkMEprd(mn>hs-s%)|9=<5$/@Y&sY6ylnA@-1*hWpfk(2h<hkrU>v' );

define( 'AUTH_SALT',        'vD?ss@{mY 39?&N%KPH!&6r&{Ti2cL:g.NE7Kma#u>|khjAWOg(M2J-1Ni8q^I{B' );

define( 'SECURE_AUTH_SALT', '`tbhQI2hP&osLWK@dA):~1JCu)ZqCZXDt5oHT_}z$B46E&/0y/WsLtpoqI&$J.y0' );

define( 'LOGGED_IN_SALT',   'tpi/zB4fisFfoWbmGKS_!f^Bc@CS{ //n9@*WCV8kWE[SU6g1zX?nC%(fCZAI+Rh' );

define( 'NONCE_SALT',       'Sly?vh#cDV,>$<qE3wQZId:)c{[UO# Z1DySWl/=&8D Qfi=V G,IxwC^= Dh|VC' );


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

define( 'WP_DEBUG', false );


/* That's all, stop editing! Happy publishing. */


/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', __DIR__ . '/' );

}


/** Sets up WordPress vars and included files. */

require_once ABSPATH . 'wp-settings.php';

