<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'projet_web');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'Linux');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'P%_-$^?Z-UHvDDi@NpwR_kMnk+!-vc]q?P-&73 P}-V)_/s 4,JwM/#mXe;3*NyP');
define('SECURE_AUTH_KEY',  'v(P{{BEZ$e;a3|t}lPB-gK%{>+|5T}9.q6w^3-|pq%>-DrWNW,18QEkfyw)j^NRo');
define('LOGGED_IN_KEY',    'DzCXe[BqRpPq#VMK1`>nCO{z9!BKv,nV5T_O<xSJlx?cp[;m`QP=amw:$8B:P|.!');
define('NONCE_KEY',        ';^|jffka/c6|T)}_[Grqc]r4f<Q,,ur(p^{&>t}XxU.G1oCQXZAa0Q$m`Q!8 N=6');
define('AUTH_SALT',        'xEX:/;1fs_i2m[-1j7!>5}S^{MqXNIfqSvS uD+icG;*,TpxxMJLHCp>.-7XLc7Z');
define('SECURE_AUTH_SALT', '/z|Ek]V3^K3;,SXKLB:P+trWFVF9:<O7&PefpE)V&M{Hhoe60u*Rd%qJOM%UigPM');
define('LOGGED_IN_SALT',   '1ict<e2+PZW|EVK3JL7-|).,<J-J_,!}L_!J`HGsG6*N]:(7X}Qh+c[=)&IP[,l,');
define('NONCE_SALT',       '!tVj#my/,2z.~h%aXr#0oXX7s2uQq^O<Pul_rAGa)p1t6JJ54R(-Tq%m{@KAKrO(');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'gma_wp_';

/**
 * Langue de localisation de WordPress, par défaut en Anglais.
 *
 * Modifiez cette valeur pour localiser WordPress. Un fichier MO correspondant
 * au langage choisi doit être installé dans le dossier wp-content/languages.
 * Par exemple, pour mettre en place une traduction française, mettez le fichier
 * fr_FR.mo dans wp-content/languages, et réglez l'option ci-dessous à "fr_FR".
 */
define('WPLANG', 'fr_FR');

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');