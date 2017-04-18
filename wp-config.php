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
define('DB_NAME', 'wordpress-bp');

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
define('AUTH_KEY',         'o:c.^GW$hRD*9`&`EL#7);?;328hqk*>L9e{w?OY{Hlu)s<.fN[{]Ui.@eS(K6+j');
define('SECURE_AUTH_KEY',  'ieIpXv(:q1Ub^9:d[FU7L%Vrn ,=rJ@x<~.417H8:ZHo6aNX~+b^OYZ.xD828W6M');
define('LOGGED_IN_KEY',    '38k^PmxbR&YOdw-%:sH!|]CPFSJ~0t$>^9Vw.N}Z[kD/Hp^ -90iNrdr3hop^}zD');
define('NONCE_KEY',        '-=JHJ|I*DB.Lo)G44-KW*Qgql~P1wXS~&(&U5c{:@Un!k{x1N$15zKQBiBT)nE&]');
define('AUTH_SALT',        'a{YWyA?f,,u&s?h00&-VfST(l;taH2*ELd}%l N$XKLIKY(VVm96*k,>Obe_[iO;');
define('SECURE_AUTH_SALT', 'iQWL:/Z0u/}DXQKm%c%K<DOKa0zuaZgvh<&#W&O,Q92;q!&3s~Fd.*:O2NmiMq}8');
define('LOGGED_IN_SALT',   'IzFS?2?A}DAZzDV~c^Zm[lZddrPk*LM/P;3vaw}~vn/pq4{z@N-5PBWUIa|l.MN#');
define('NONCE_SALT',       'FDtJ@S5.*1H0Mi5p|Nb=W?FdU5]]&@b,^$hFP^ QDi<aE-m;bh>@X@|%N|yBe~@_');

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
