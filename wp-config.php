<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'QQg`$Ql1 )-IxOJ:Ly!:l-=b !|(}4C{B7Aq.jl-c^I#D;l}+^h$6K{U;@TtXIZ^' );
define( 'SECURE_AUTH_KEY',  'S,P97~DX{]Zxq>G6 ONn]>t9g-n Rz+;TtREyXs&_Wlem+ue}g[EA23u]J~UX)V;' );
define( 'LOGGED_IN_KEY',    'E;^)[lpO^^5_Gr$g12}4[Q/*r%M]{9rEqqiKnv0aj<5!Il2:oaL5I%ge}gK glek' );
define( 'NONCE_KEY',        'gwgb(9cV-se5WpROZ6_aMQ&s9c$-#:ydZ|4.0PD[8r/6L_<-z] CxZUHb2d^=hy&' );
define( 'AUTH_SALT',        'z8?bQ^A/gfTYkr#Hd#F}et`3iV6?MZl#~},+p8cmbY:>Z4K];13Yc4Y:+u;@my9[' );
define( 'SECURE_AUTH_SALT', '7O<l5< E|`B-hkLNZRhkHwXX$U,0FH:Y=[L>y[|pP.6x;0G*)6<da2`DKux``TAd' );
define( 'LOGGED_IN_SALT',   'xPXX=aw,_0Ap3lYE9,YO=qcfB~O3mPIhVdC?iq|KKkQTk8Svr|f.fQ-#r;j0jDhz' );
define( 'NONCE_SALT',       '}I$KmE&5-fgm-n@48k-,I%..<V8Y1b?%v(V->_qpoMRj):>r=f{ppG;z>w1Am8^<' );
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
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
