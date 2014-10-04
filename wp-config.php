<?php
/** 
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information by
 * visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'kalides1_wpdev');

/** MySQL database username */
define('DB_USER', 'kalides1_wpdev');

/** MySQL database password */
define('DB_PASSWORD', 'hunkydory1971!');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/ WordPress.org secret-key service}
 *
 * @since 2.6.0
 */


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_ul';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define ('WPLANG', '');

//define('WP_ALLOW_MULTISITE', true);

//define( 'MULTISITE', true );
//define( 'SUBDOMAIN_INSTALL', true );
$base = '/';
define('WP_HOME','http://ul.xp-home');
define('WP_SITEURL','http://ul.xp-home');


define('AUTH_KEY',         '8,[GGaD}e@D(M}@ |bZQ^~>. {|H4Gvoeg[a(1p4?Qr}Se$D~iN=FMdC-cdQilOv');
define('SECURE_AUTH_KEY',  't,d|yVFZ-p *9^C}p-x*F5zP`)]-&xyjAqT`LG|Kj@7+JO<KO&4H|44&QTh7bS!4');
define('LOGGED_IN_KEY',    '$i:CgzO0i{uZYX02ijb/>-=S-(}5)w7E,L$FU.j6+x;2{E,FU{EB- JsV)(u5FuH');
define('NONCE_KEY',        'Gp7,W!&:&gAr]+-M73|tw)%;vS sV,F}ngZ/)6iQ`;*m-3pHI+-A3H8,o@yA+JS_');
define('AUTH_SALT',        '0M.b,|d?Y>if7|jC>+vucWdXZq7qTBmQ!^#I|?M[()9_6|dB?nK5d]WaW=OVoH9f');
define('SECURE_AUTH_SALT', 'M);;>1edy&dFDlW:|Gl)2>}=Nt0KKSh(EKmvfYkSmL73:9j{8jv?$aQ|=+q@-ylk');
define('LOGGED_IN_SALT',   'B)`pm+ZGn+Um!yp|VpL3[y@b(dT$zd52|N;!Q&XtP?9pRJD5wJIgqDpuUQ]qpY_W');
define('NONCE_SALT',       '-<yKc+w~WP|:X4umpQr4C`g+hx/I?WXUl2%E{a5+6H>h>dpBQineD0SyN_d+82%I');

define('WP_DEBUG', false);
define('SCRIPT_DEBUG',false);
//define('WIDE_HEADER', true);

/* That's all, stop editing! Happy blogging. */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
?>
