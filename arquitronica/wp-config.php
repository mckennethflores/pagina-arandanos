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
define( 'DB_NAME', 'arquitronica_pucp' );

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
define( 'AUTH_KEY',         'x&%@pQ(x`[j[Zu/~282D|UX^@ii!]P69Cm_,~lpQ%;=~WWt(2I=z/XB,D-Rlfsa4' );
define( 'SECURE_AUTH_KEY',  '<Zh V8kw$[Ah=`_{KH#{-Bk(c} J4iLo33o45=Skb][4.(NWy=3A*{8mF$:Iz.$J' );
define( 'LOGGED_IN_KEY',    ',MUa(AgMlB`Bsr=tJ7_,#]Oet>>4D 0C&.tn-s.m{ji0KS|kXhk&pOdI&/rtrb;,' );
define( 'NONCE_KEY',        'p^aYvk`WE`62m,a.@3Ba(]WCO75zcqS&vzT:$v-Um2!4kco.>H[#W?{5xwLe -cw' );
define( 'AUTH_SALT',        'SuOV2w9$-.!Xp>lOoOoJk2Y7^JT`t5iy|9Pf[PBx?a* +zkYq^3K_6?zwWN#*.Bw' );
define( 'SECURE_AUTH_SALT', '$|S+0oVEdqu-Gu(QHq`=ZZCy7#mI~<_J32w$1Md1M4/[HjY!b8f48GKY$~OU$Z.y' );
define( 'LOGGED_IN_SALT',   '[/wxPK yaC]Z;@8aD}wsw*hn6Vi^<b7A`?xJ-{xK-#(vT>4iIE:(<qFwSFfm`hLR' );
define( 'NONCE_SALT',       'W)!Z.~qZ2^l##%M{I{ZEY@rqI[9id2O$&rpn<ZrY)FFCSZ<cK1u38h.+Ms=SS12S' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'f1r7_';

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
