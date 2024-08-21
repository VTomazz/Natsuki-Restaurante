<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'cursoemvideowp' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'DK;DWNMFh&6b5}JUA[wW3NeYDROVMq7<-fy(<!h*VX><-nc[LsTj`*z%SV#fi30s' );
define( 'SECURE_AUTH_KEY',  '^Q;<nn{el+FC[*UD2weBx]qkTC)r|)_5[n0b]v{4}K(Wcf<;7PdQzl0gamz1XsA[' );
define( 'LOGGED_IN_KEY',    'VH_rnKyW)o./HjT=4>>6=QBiyc!r|[O>Zg?MR2~,Ga:k9k%D[;[G6yNd-|`P6Iau' );
define( 'NONCE_KEY',        ' n5HxBv!x8 EmsE<aX-K$tWT:c8kJYsQs.C:5D[0ULlMG?j.1w{=,L{<@ss)^Q% ' );
define( 'AUTH_SALT',        'FB*-]YE&TQ<KM {%P3pZ6GG&% ?iV+[#sUtiE++CfKai/79$Z; hwF*Px:?+k<[M' );
define( 'SECURE_AUTH_SALT', 'U%uF}T >EZ/P)Nr-6>DQ>/vP7!7:Sb-_Pt0yyj&>4ZjKheXU&|TYVlX:mp F|5bx' );
define( 'LOGGED_IN_SALT',   'pU_&6e!)4DPqb6[_)GZzHuDSKR{` p@eZDA]8e0+_cC7gcpd3T;!;J%;ZB,<)M|x' );
define( 'NONCE_SALT',       '),{B~-^f2UK{zqU<ME/[&^#u2VdJlJz<A?9JxlhCJg: 1Fw+**JW:<l i>vFFbCu' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'cev_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
