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
define('DB_NAME', 'webdesignfactory');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'rNpJ!^ [b7I_O)u`(5: =r17[qeOH@BB?mreS8(r%;e+KAsL>|Vuo//_Q7}8Y/LX');
define('SECURE_AUTH_KEY',  'IXi2+&U:98)Lz>_p)q9&IP<m&S;&y`|!i*n#caNf#+H`_|Lm<S7.d_`;A 8E&o9l');
define('LOGGED_IN_KEY',    'G-?c;~QbVf-E{hE|%(P|#wJrYXiY00p1X*)[/Q[j3Qa~C*#]MQ#U&iK)of{G/iz|');
define('NONCE_KEY',        '(VNsm}9>`]* 6;{:J0!7L ;>=wFZDC13#d@Q9UNlS]8KGvOf!p)FKW@AG+!E9T2E');
define('AUTH_SALT',        'BW7FGTis;F,7<]cA{.)Qf/KW-d}(l!FV^g_#hI:Gr;y$|aza`?r_#,XbPJ)j/1^3');
define('SECURE_AUTH_SALT', '*F>2KR#g_i-SM)Mf)j!MxR^pv-]n5iRho3r#Yci+l*-$$1*e}4f1U@~*5:gGF)%!');
define('LOGGED_IN_SALT',   'p;`w4jg|.)WG>9U/szM83k4d;CJz^0-:jkv<(n5E1u/Vv9$gh4NvV86=Fkp*ZK{B');
define('NONCE_SALT',       'pl75+;P/so4wn6#f}XR>9rGD~d// 8RSP]oFV{j>jZpQB0`*$PvxS!,n5t]Xji`[');

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
