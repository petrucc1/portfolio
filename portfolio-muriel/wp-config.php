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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         '+_tIO:;O5g$6WPG>$,=3ngaQ(+@tckN(_:.]-#H2Lkta3/6uO`|l(=jEqMPl1)+`' );
define( 'SECURE_AUTH_KEY',  'VJSxnu/Y|sp!6-N5:w8R.E}~|[29KwQ^{9_*y;0W}wVD)JqPLCaEw%A&G0JYEo]&' );
define( 'LOGGED_IN_KEY',    '_Tl:sX0O`+!EbaNB@Ru6geKS=PJtP8b?[kMw7Rcg>wqMr@B0Txdzc7b.pv|7rW[m' );
define( 'NONCE_KEY',        'c g:GswT5(l~`Kq,zFE^=fYlZ+/Hrj`)#1&t=U,d+?O,%8jE~nn=T7YS598[7;4r' );
define( 'AUTH_SALT',        'A9W14qNSRR5FvNCf_&]aqE{4~iZ>y)y3?x{]4$Jjarb0F`C4OlBc*lx7OHk%IbHK' );
define( 'SECURE_AUTH_SALT', 'csWo{~:Zn KYmI_o$7g:3Jo^jVl4R+.m6@C]^&z6m{/rpCvU>o)CW9@W@A=}rSFi' );
define( 'LOGGED_IN_SALT',   'HX8zN>p:qTWFJYJ#0kKG!L%WkN]6pQJCqq}tP1bCpl[r=a~QF9_Gd.;fQ5E%1:iN' );
define( 'NONCE_SALT',       ',X&h5,7H0uAq]o )Oqp0rzi&FYjd}3|sGpWqHwjcxBw7u3Ql> i?)mnRE~!+)-2+' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
