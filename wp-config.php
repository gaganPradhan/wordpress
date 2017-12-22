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
define('DB_NAME', 'fictional-university');

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
define('AUTH_KEY',         '14(ed09c}AD-<fip|[yI_}|<Ep-0bgBG}DrEkrbPUHU`T]O9M57Un-eb6xcG|Y%/');
define('SECURE_AUTH_KEY',  'Ons{NN}h*Axt?OKY:dPA.l*i[h9@&)`rQva%]Wtw8%tjmcZN}a fK:dSgT(75j^(');
define('LOGGED_IN_KEY',    'jS_,/(:f7tlh/FQAAX ljV_>}#s@ycmg&BNqy@2]bq*K$)MdcPKz(ywR2yZ;J[{x');
define('NONCE_KEY',        'wNcw{{ELUY0Ww=.QH#L.cJOBrkR{0Rg&Y2L=Yqr B^!ChQkQn$uG9Ie}2plm]7d@');
define('AUTH_SALT',        'cEs3hG} K+aX$B*!6K9s_n:u}.2n<!6=F`|p>|56>zb+@w~^ kAP--5_{_/:Bk]C');
define('SECURE_AUTH_SALT', 'LWSDbj6zU[eFELvR(L!Oxmhh5<:p:,pv)eQz**+AzDZ(;7<d#s$?ywKCL}T==MNT');
define('LOGGED_IN_SALT',   'C_3GvHj6Sc[WC&Gf!3jYj4XMmfim0sbtW*zjWWX.mFenV-I_aU_WS[EdwK VWg%v');
define('NONCE_SALT',       '41$<L1rWDSy~8E:2tZI<9rEDvN)_PJ6=ate7UnJ%E_SghoHstOevkeT18*4OMkiB');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mywp_';

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
