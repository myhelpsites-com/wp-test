<?php
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
define( 'DB_NAME', 'wp_test' );

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
define( 'AUTH_KEY',         '^;;{>M%%dvp-4GBtt~5@s`X#]UL^%wU6pMpO?|sMQ;]~Xw+dF5*m>~[]LdAW&N4)' );
define( 'SECURE_AUTH_KEY',  'z7KN3[QfX0gqytg&6D087-6cOE4`8]CV@rv~?{:;je}=yaB>xxR3d<3VVKoZcVT?' );
define( 'LOGGED_IN_KEY',    ') MSuYZi!0,2?_+D&ehs;uk0FHPab#bH(p^Z$gL`6k;a68fZpmHgE5o<D/y(pfEp' );
define( 'NONCE_KEY',        'PB?*fYT~qfsls?r1v%dj4D]<y=1U$@,a@vmwM[nxM~2D&*cHc+H2klj`}.Y}JtZM' );
define( 'AUTH_SALT',        '(Hh5GPr/ao@Zdg,t9C*1xbSfX*/w.?W5H<|M08b{T%V`oS|K`KYiko`rjg,FOm.#' );
define( 'SECURE_AUTH_SALT', '4Oufm$T#v]9-{f7b$*b-DDo~oT@0xCu&s2iqNdJD$jh:^#&]AO-6y^8yzp|Hs}v1' );
define( 'LOGGED_IN_SALT',   '#qCCfu/Rds|;wmgu~V2tOR#J`kJdOstO^jRgT|0F[K:*,Nno`;F [nU)kw%cCQAt' );
define( 'NONCE_SALT',       ';+=IXbd}F6L#@MvE!8D7d.X/d?.CeK-Tq5Wq(RBnHL6NBPN^>`p0WLEb}=TpW$W7' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

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
