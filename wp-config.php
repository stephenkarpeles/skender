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
define('DB_NAME', 'skender');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '%P8-w`<H^t;Es8,q 3@Jx^3cM@9*RiuBiFx^@(<H,E!_#h=Lmr>;5@2pl[H8^$92');
define('SECURE_AUTH_KEY',  '+Iw!z!xA9g8_O^LEwJ)tM7C7WVeK[s!p;^69CUhY&2un`ts22=P6A1I6I&ExMrjX');
define('LOGGED_IN_KEY',    'Q*,x=__vin>jb>&N@iMeVr+pSN#$s:,?!=`B@e]wvP!fg?7P>:WTf.$zQ3H&1ajr');
define('NONCE_KEY',        ')Y&*Q,GzPOES)[r-@m/0s&6]Y%[>l },Q?cZfvFo.^[1U5na9F([P?iwifh[{:5g');
define('AUTH_SALT',        'Uiivc@$NhJ_Xj08_IaT{Wlc0-@<wNR-B4*6u7.}B(t0J p8F(50|YSq@c_]!rSJ(');
define('SECURE_AUTH_SALT', 'YC9e+j9w8F.XT)B6)h[nROMjKxRF:Z0)ME]!R_S?%sp:w+GK`w$ n+p/i]4z3$!8');
define('LOGGED_IN_SALT',   'bzOluJh>i =lXC/=Xk:[EunP)1(F6/js^IU5D<0%ug2Me/x.dHag(Qi6[`;NusZW');
define('NONCE_SALT',       'Ll2<?>`uXN@rfWim?Ui,Si9{)CNd4Wh23S_MOXU,=W1Fb4wZI9Y6a^GMv{U<b9!U');

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
