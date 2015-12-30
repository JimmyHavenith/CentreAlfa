<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Le script de création wp-config.php utilise ce fichier lors de l'installation.
 * Vous n'avez pas à utiliser l'interface web, vous pouvez directement
 * renommer ce fichier en "wp-config.php" et remplir les variables à la main.
 * 
 * Ce fichier contient les configurations suivantes :
 * 
 * * réglages MySQL ;
 * * clefs secrètes ;
 * * préfixe de tables de la base de données ;
 * * ABSPATH.
 * 
 * @link https://codex.wordpress.org/Editing_wp-config.php 
 * 
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'centrealfa');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'y6z-:@[4!:e3Ktp#/Tc[:+;rGlr+0 Er>24m-zSVJl~l%Qk)Mw2[I!8~Z$Oh~^v1');
define('SECURE_AUTH_KEY',  'kP*7MG8d&IHWCOJo}c-o>pZ51n&fKPP-ufEIK{*I>nrnN:z|7L?Wc-J-l[|mm855');
define('LOGGED_IN_KEY',    'Y1AXgd_UgmoKU?4<)OQ@JT.-+@NS(-*q!xCGq*X9Q2wd&r-3Sr420hUMis&:`+oz');
define('NONCE_KEY',        '>]Tgk6Q~bU)?+KpK+X8,YIl-Zclv$1$8 2q8PeZI|$:9$119=SOXc-DIF7*)v&1<');
define('AUTH_SALT',        '(9=}MQ+a<e]vFlDC7+Y<sk CL|RE9HK7Jdo!XCTa3VQpT~^*~7~yf0_DjI5%oU]i');
define('SECURE_AUTH_SALT', ';nFa4#-OcOux6tw(30m}qnD-X1jiJbH?#b[uGX}K)BCCRt_vaEmVcII+~Iq#m>, ');
define('LOGGED_IN_SALT',   '}k$WPVeCV{&I?v{S7`*o R)$x4g1mQ?yy5#XzSWr+`H)Zj0+IA^Cc#w66-2;|R+m');
define('NONCE_SALT',       'RrM0f9iDf@6+<[Rw:t3FLam+}~+#2p?(7d-p,+|9t-jH(u&qh/A;N%cHc#hk`VnO');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/** 
 * Pour les développeurs : le mode déboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 * 
 * Pour obtenir plus d'information sur les constantes 
 * qui peuvent être utilisée pour le déboguage, consultez le Codex.
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress 
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');