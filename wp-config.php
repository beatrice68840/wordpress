<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress-melissa-starck' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'kfdw&*bRUXOI|B<%)8X|3Twd]rr$w3AqN$~2yNART,y&!g<}HH$[^fOPsN=>oEc#' );
define( 'SECURE_AUTH_KEY',  'pF:gF!2v:4YEVWEHUncEPn.ztD(haE0riW>;&@7(x;U]vUq8=VykY* ABZW=&I62' );
define( 'LOGGED_IN_KEY',    't.X$?q=`fs}/FeEe+l~D+/:, nc=A8J6r3W3.!#UhzrjX88,l47C(og?FzwNKTjo' );
define( 'NONCE_KEY',        'nF?>E+$<h6C0q&4wwesbQyq%)QEfw4bIT4zUBVK_5G$!BSbZ0<v%>T&j%GZ%P=1X' );
define( 'AUTH_SALT',        'f<y7&^0mD&dussSQ k:FUE~b@+q;mpfRAK&4RJ:F7qd@!h=,v|m-;o_uDN;![?9z' );
define( 'SECURE_AUTH_SALT', '8kgrQtWkg19v?a,~>bXltGuuZCR 1b*LgVtc|n~OynZ:zF<.[Evg_E$sDdiB4:6z' );
define( 'LOGGED_IN_SALT',   ';snuY7EKLJRJ:ng:mpW7ohZ?Z`6tk;dV-WP/xivB.omFT-M{G ivXRQ7hu-7:tOt' );
define( 'NONCE_SALT',       '!i@lUdE&*O`^dN!rL Qg0*7;&0%53U->n2{fyu`EQxg1Zo}[i}bwN$WZnX_ql4^a' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
