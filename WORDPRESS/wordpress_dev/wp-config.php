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
define('DB_NAME', 'wordpress_dev');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'BVo;mZY/#,5c|em*)[ZH66V=Z}zLIqym7QfZ- 7#S!W*@ib`hi[,V]y#W{/%d+3[');
define('SECURE_AUTH_KEY',  'B`~~Y>,1{,[[n(s<kRND3yxXNM;UpM&kPgZ -r!xstnW0L6t#@R.^is,pnn&{tzy');
define('LOGGED_IN_KEY',    'O;_.;2A&:UynVkijIT9WHu-lC9Q[Bm?2VDp@(X2^O=](dW`C!XCt1u87q(9d_B=h');
define('NONCE_KEY',        ':RG[x?A`e*oekh+BY-iZFrw]uJ iXAJl}h6XUwT8Xki[r^8qV`n&g(Os<vQ:cwF9');
define('AUTH_SALT',        '?UA/]8u*kMN4!$E!>jLP=HmvDLVf^iQj%M~i4X@,u&wG 1Jo;0_uU^x`<2{f~9U#');
define('SECURE_AUTH_SALT', 'i7^< R 1pD#(|DIp&V_WO4|_w)9AcHLP82u+_gtQ3Ys=M2:m1f I_q=h=C0t Okk');
define('LOGGED_IN_SALT',   'zY.gOf-QXe)Iav$Eu!Z=a&m|.B.4s1Vb_O0U 52TyRf[Vj>-H6{p;I7pm.8?;~C-');
define('NONCE_SALT',       '6O3r&p+$;}?WG6tk<|nYesPv:faoOC70Poq,pxJZNf1V^.h5Q~7QW$*mEd/5QhkB');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

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

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');