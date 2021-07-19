<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via web
 * puoi copiare questo file in «wp-config.php» e riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni MySQL
 * * Chiavi Segrete
 * * Prefisso Tabella
 * * ABSPATH
 *
 * * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Impostazioni MySQL - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define( 'DB_NAME', 'v84g2195_e-polygraphene' );

/** Nome utente del database MySQL */
define( 'DB_USER', 'v84g2195_ad' );

/** Password del database MySQL */
define( 'DB_PASSWORD', '23Settembre1975' );

/** Hostname MySQL  */
define( 'DB_HOST', 'localhost' );

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Il tipo di Collazione del Database. Da non modificare se non si ha idea di cosa sia. */
define('DB_COLLATE', '');

/**#@+
 * Chiavi Univoche di Autenticazione e di Salatura.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tuttii cookie esistenti. Ciò forzerà tutti gli utenti ad effettuare nuovamente il login.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'jtq5 -Og^i`_D=mK0{H^50z(SvN7voCYBv`#.hWr};w.Bx6yWwFdnV Y2*9?y}85' );
define( 'SECURE_AUTH_KEY',  '+n+Ta.VU3@V:5zPYC(n)%_G5lU(q<O/olP8olEu2LYHoBL*IXS2LM7`8&@f,m$|]' );
define( 'LOGGED_IN_KEY',    'e>y*|^]+p4t7}G30SDWb~5&lt;8AY>WM+Qbl d_c<N{535C*77h!)DQ[,6=W-<@I' );
define( 'NONCE_KEY',        '^E};f5kf[iT9i&m/u@Y{oBvUm95hKBj;P|conJYuB0ObhuX^(F</lP2*co+9o?H)' );
define( 'AUTH_SALT',        '3H<kZS~UrawO}m6[tg|1_l!)MQk)<=OXci+0*R7+^;jSF!$jc% w[_5%QePbyiVl' );
define( 'SECURE_AUTH_SALT', 'x=h,yvEsC^COHD5d{W()/6+{QZq20= | RG?%raHd6Z@U<29Bwu=V4PadMY#9/u8' );
define( 'LOGGED_IN_SALT',   'rOS~+n<zSkX%nt,3+Q@c?D{yl$a-<Fe4HB(]OGa)}Jp~v^X`jmm!{&Qk5Tw*~)Wt' );
define( 'NONCE_SALT',       'MvAysa?`x6 Vc.@p!J{`:PqIzFiWHRg.ChA6_GJnL$OPe|}^+tNk~&;Z|#M@D)4O' );

/**#@-*/

/**
 * Prefisso Tabella del Database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco.
 * Solo numeri, lettere e sottolineatura!
 */
$table_prefix = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi durante lo sviluppo
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 *
 * Per informazioni sulle altre costanti che possono essere utilizzate per il debug,
 * leggi la documentazione
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* Finito, interrompere le modifiche! Buon blogging. */

/** Path assoluto alla directory di WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Imposta le variabili di WordPress ed include i file. */
require_once(ABSPATH . 'wp-settings.php');
