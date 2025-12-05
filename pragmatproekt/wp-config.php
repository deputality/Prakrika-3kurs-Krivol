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
define( 'DB_NAME', 'Pragmatproekt' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'mysql-8.4' );

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
define( 'AUTH_KEY',         'VJdz2_@12KNZTBAG-qt2![`e:?b);No`I.+l3v19E[-/d3uV}n^nDH<GXveO,rSx' );
define( 'SECURE_AUTH_KEY',  '8?_Mwju;]~(jh%cQO]8DJo<%ti{[_`tGCnF%;gorS/b9~f]v+So@7.U$$=2Ji4AH' );
define( 'LOGGED_IN_KEY',    '57M{%2L%OLKcJ*F9~wv<&G=SFqT.&XRhNl>zYxVnr1rD8T=1Rxe@[qm7%IDz[bN%' );
define( 'NONCE_KEY',        '<^a&3qzeaQPL3{ 5zKA&MSQ@%v2/O)}Q-O6#}(L_I A|vY&E%oTY4t Xc{y.ne/:' );
define( 'AUTH_SALT',        'U@Bv30NkKwb:I`SC2VUOX8h5Wp5Bo6JxKP?tpDg%`9QHAZ0C2Jnb[hPf/1>mugM7' );
define( 'SECURE_AUTH_SALT', 'g&yDlI0Cd>%/c}UbHEx`R8q919p_W_>7/>=dUgnitV*Jmg2DcqIjC&/qc5u,CZ#%' );
define( 'LOGGED_IN_SALT',   '-rggga!mmRi!@K./SW!9L7pD$)O(R3c /?iw9pmW@.LabBOOjQtWbG9YH#]84{Bh' );
define( 'NONCE_SALT',       'JG$Fvy6P3I2+DTa=bpvNG$/E!K} S}>)|h0mV$)>Wni!$h|:^-Da+s]URmQr*cW5' );

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
