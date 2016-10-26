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
define('DB_NAME', 'wp_base');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'cU{>xkrl79zODtSE,ME|:A)Y,6F$Y9{jzeNZD Q~Nge.E=mX7N>%SoNWo5X;CQzs');
define('SECURE_AUTH_KEY',  'q}r{TSujx[5RPpCgp i5s9CB7?-vZb;[Bul_f7l0R;S^d2B3kc@ b/z1B`5?>3:*');
define('LOGGED_IN_KEY',    'IyrcuPw1cEpVwVnclT.tMw=Qg~`?3F6&;X+$WVuyTC,]/=/0s!BU8P~ j}}MPh99');
define('NONCE_KEY',        '%Bw1>mJdcBR5Q&3XS~dV(luwZ(XG`&sy}AI2-BtTsBXN_4%C<o.*6aTr>QvN~7U=');
define('AUTH_SALT',        '{6,S5-OW(3owqX9=EA1}vs9Xd^H}EKH<jz40mc,@F#</FxVbc?yY=(C-|@_p)9ee');
define('SECURE_AUTH_SALT', 'wu&+?=nx9hEL.4Me2IQU%6j`OJ#/@~(E)vmRQL3x*7*`:tF4G&M!{N}Yzo-*W}M(');
define('LOGGED_IN_SALT',   ']<ks=[2KIh;bV;0^Cqm^~|iUm5GKV(Dhamr6%J*-k5v3w(S-HV^yI?aiAd L-5|#');
define('NONCE_SALT',       'kr/IRiuZKl !uRgMWe- , sB){vO^2DeFgO>YJV0G2x%2!9#0/C,(K^7y#}g<ZY|');

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
