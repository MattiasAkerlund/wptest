<?php
/**
 * Baskonfiguration för WordPress.
 *
 * Denna fil används av wp-config.php-genereringsskript under installationen.
 * Du behöver inte använda webbplatsens installationsrutin, utan kan kopiera
 * denna fil direkt till "wp-config.php" och fylla i alla värden.
 *
 * Denna fil innehåller följande konfigurationer:
 *
 * * Inställningar för MySQL
 * * Säkerhetsnycklar
 * * Tabellprefix för databas
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL-inställningar - MySQL-uppgifter får du från ditt webbhotell ** //
/** Namnet på databasen du vill använda för WordPress */
define( 'DB_NAME', 'wp_test' );

/** MySQL-databasens användarnamn */
define( 'DB_USER', 'mattias' );

/** MySQL-databasens lösenord */
define( 'DB_PASSWORD', 'mattias' );

/** MySQL-server */
define( 'DB_HOST', 'localhost' );

/** Teckenkodning för tabellerna i databasen. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kollationeringstyp för databasen. Ändra inte om du är osäker. */
define('DB_COLLATE', '');

/**#@+
 * Unika autentiseringsnycklar och salter.
 *
 * Ändra dessa till unika fraser!
 * Du kan generera nycklar med {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Du kan när som helst ändra dessa nycklar för att göra aktiva cookies obrukbara, vilket tvingar alla användare att logga in på nytt.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '?&hKJK mV$/mgGR0lu5..%zME[9S+=frktLLwx@%;Ond]%4$;LQck@Dyp4N9C+6g' );
define( 'SECURE_AUTH_KEY',  'e_%oO,^fycPSe6RR-dGL~^6P0z;XgYztB=T-&LzEt3zi|bp?*Tyy,7)L]Q?HzZiq' );
define( 'LOGGED_IN_KEY',    'Aiv}Y8]o2I<>Hm6y@PR]gN920<mb>q(fz._ZXL0c/w9Rniln!K!<A+FH,rR-/N!f' );
define( 'NONCE_KEY',        '5n*<)u8[;oAHtlv*z-ouDyC|=[WX.VfQ7Xe{92qUkVJ8On%A5ts6aqrA3ztChMF6' );
define( 'AUTH_SALT',        '8yO$ldIt+0[}Z<sl_nxSqCo|bb8tM2l{W,S(X?: W1zX ] V}d9@aG)BIUtNgC%E' );
define( 'SECURE_AUTH_SALT', 'tV+n]&VQ[GRAzl4OY[eM@qcx BLt_./aPYzesE=hQVSJf:($s+!+`R/$;H#NL&_ ' );
define( 'LOGGED_IN_SALT',   '!ei1*gqg*EHW.4ct*K`PeV89k@(PNxlAZ2Z^n:S(]gO.kjFfXzAl*7E^nZ#>nCrZ' );
define( 'NONCE_SALT',       '(.I7P1r$+MeM}JOY~[X#&O8{B;ccQkz=E%4[)a|`W}kx7O|gUb8Nw~;ON^@,MVYI' );

/**#@-*/

/**
 * Tabellprefix för WordPress-databasen.
 *
 * Du kan ha flera installationer i samma databas om du ger varje installation ett unikt
 * prefix. Använd endast siffror, bokstäver och understreck!
 */
$table_prefix = 'wp_';

/** 
 * För utvecklare: WordPress felsökningsläge. 
 * 
 * Ändra detta till true för att aktivera meddelanden under utveckling. 
 * Det rekommenderas att man som tilläggsskapare och temaskapare använder WP_DEBUG 
 * i sin utvecklingsmiljö. 
 *
 * För information om andra konstanter som kan användas för felsökning, 
 * se dokumentationen. 
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */ 
define('WP_DEBUG', false);

/* Det var allt, sluta redigera här och börja publicera! */

/** Absolut sökväg till WordPress-katalogen. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Anger WordPress-värden och inkluderade filer. */
require_once(ABSPATH . 'wp-settings.php');