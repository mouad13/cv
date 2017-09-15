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
define('DB_NAME', 'WordPress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'azerty1143');

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
define('AUTH_KEY',         'v1f2VZ5+Tcww<GERja{4jaF7t @C,F3CTt<rYk1>mU0Ivrn1kiQ&[I/QXQ2S-t4O');
define('SECURE_AUTH_KEY',  'LRbqT^BoKFwPV[|(%i[d:V%_Qn1kfvDQdXPY6Jp&; M~?a-iI@V(>]~AgQ.La<~/');
define('LOGGED_IN_KEY',    'k^uZeFZoP*&pQF{Z7Rr[l1Q|3y}k|>%)U]Eu1z-Z|?D,ar9_ipONZd^P8I>.f/T9');
define('NONCE_KEY',        '<pI~ny5a8&Hps:Rj/Pnmfy>/(C7Ow/teO)Bs(=!ei~L#`2mCv)UYzi)9^t-Kj?m@');
define('AUTH_SALT',        'p4)no%c93_S}U :v(dvNF*DkdM2WA;q+T4E(=7I]r`)IqxUCCLUzIObUG9qYd)gC');
define('SECURE_AUTH_SALT', 'g=.fHJZ30i=aSj*T&/e*mmnGiO Id<V1Fc0<&yr/<C/]]_$E#@XaD56*c4yBe#9x');
define('LOGGED_IN_SALT',   'q <;YE+s]5#e$] .dUx}RmOf^*KlyoZu]yExU?8}HojjAM)fS~K};1%mx%&R?+PQ');
define('NONCE_SALT',       '-%$fviwBoOfBjXQJ~Oz)hrGq8Y|xI~tSU3B*&#eJNv>4oIxDH|0*Ya?3QGK)(k=y');
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
	define('FS_METHOD', 'direct');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
