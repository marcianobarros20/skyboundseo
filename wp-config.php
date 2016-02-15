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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'PiZt6ocJtR');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Pe4hPEr[[<E1OSNC}@+CHA&/[-,[9+:dnqs={n.Xu{zc5Q[sKGE87pfxC8jNcWBx');
define('SECURE_AUTH_KEY',  'sHC?o!Ybe=x?1.kF{UCcPkpr!:Ylq3aSqo2 3zvK^ bw^f7|BGwrC3GPfx.RU-K1');
define('LOGGED_IN_KEY',    'EM_nTc^W#ywKqlH:6 !5KIFF+F4.+8M${&FcEI(lR2!~J>M?Ox:*j:uf~-^KMYk&');
define('NONCE_KEY',        '~w8cE%0mv}6MSd;.xB$f#;({:<5J(X//Vly=Ux[(v$c3!Zh#AtedBHkD&Z%Bc(AV');
define('AUTH_SALT',        'I;kmRx.z`j996umT}7J^CUD(%)t <g:|xaAL=MAk1{7Gzg!@[$xu(]/3`$5!y6Mi');
define('SECURE_AUTH_SALT', '?!se27gy8awWcputMmC.v*#ZJ$yH{S+CLLdO)l3;`PwCgZW*?7Kd&k$L6;c3f*TM');
define('LOGGED_IN_SALT',   'EAa|6h=8v4$/%#KU#7mgHPJ/i0jg48$S~a!u@>%#JvK]^03[F rJIsZT.^,8+;s]');
define('NONCE_SALT',       'm{g}:#j:Uby,fQ#-cy F4)T1AfgG8i|e l0zD=QKJfnvYCJp3fB^/VU2u{`8AkC3');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
