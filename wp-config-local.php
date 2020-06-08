<?php
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
define( 'DB_NAME', 'Horizon' );

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
define( 'AUTH_KEY',         's>0B)YP`2[,M+Fy/)JZp;6$ v>h`dv&D4U,5Uo7+CJ II=q5Xb_SU0r/ CTT-(0i' );
define( 'SECURE_AUTH_KEY',  '1?BP#u{K#:p/!@p)ONAv |SP~}Qr:Y1J/53qbq1_kdQr}){J.seHtUrnwas5_*=<' );
define( 'LOGGED_IN_KEY',    '{UdO25p!f~[h^|&5dg8PkxCQXbR Su>B dQ9UM%{&wawoyNP]*fM?kKqd#Qf+j3G' );
define( 'NONCE_KEY',        '0[Tg.209qj;&m4?wjI/y~KIa|Qgpo_!<A-aGg-(&P?+b*Y[bRhq%+9(%L9Dd ?!R' );
define( 'AUTH_SALT',        's?$C.(Yz>Q{B&8BTKg!Suq7#`}]E4KbK%*Z1V.L@GX+cTk9w%UCo+FAei>JZoZQu' );
define( 'SECURE_AUTH_SALT', 'gDDoRgojIL2zhc4wO)jS[WP9_|7C}d5vBZl/lER5`=D;&AO)<JxknYEPhs[LbI<j' );
define( 'LOGGED_IN_SALT',   '0*FMkW$Zj47AkZLHUM@Zd(kx}(kcyAzDAODnE^rd7VO?]5 /<,_6q`*y4d>]{0uK' );
define( 'NONCE_SALT',       ' V$MM {eUHzh:63d.Au8#tfgUVVRj&)}Sa`*^V~%PyHtJ!X@H<s>Gr5_gPycB=DB' );
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
