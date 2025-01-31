<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'RAPPIFLASH' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'pm-R<Lvs mCQ~/ZG6f+7{yK3V?5fj!qMPQOoC7HU_9B{`4gR66e9mH%(O`$pibOd' );
define( 'SECURE_AUTH_KEY',  '6YB.vg8v[ZR0w_B9P$?2f4:O6NR-Cc.zpf4o]kQW5LvgJp5B0cJGG/@WqruU H]G' );
define( 'LOGGED_IN_KEY',    'RN2_.p?&,uiCQ.a#}+`O$**aO9NO_kMjt<EW+Bs:FG).O0l2}]J[7SXBh;p#aW;6' );
define( 'NONCE_KEY',        'U 6u;1dRyrU^x+`+j{1622)*->r`r4jLRzS{(r?g)W&D4|KmPTyye&#iRAE$WXC>' );
define( 'AUTH_SALT',        '$S `lBNk3s{28e#R9y-nGDxBVpw3*odaP#8X7q&gtTnl`C5w]qkt6vlrV|r=@vZp' );
define( 'SECURE_AUTH_SALT', 'nX@`-zv;tDNcZ#KLtI}-3b`|D!e4Mm!A!H|1&@h1$r-HS@wstgLrI8.jiLQ$dzG5' );
define( 'LOGGED_IN_SALT',   'CDHZ}Q4J%w?0OX6)TQlK1z6*MsDlB[^.mgK`F|RB5vnG^r&nO=/(NUaij{v7/6c;' );
define( 'NONCE_SALT',       '^#=C[0{2=(%&yLw(2q;:h)P iZKH3;,57:,~$mGL%6dBG KLsj9)IKjv+>Q/0bBh' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
