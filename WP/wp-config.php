<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'wordpress');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'root');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ycM|w4)r+2Vl:@j|K|ECHley(<J|X*:+%2h6Xk],}`|+sR5;gH|Q0BSAc6H/G&X-');
define('SECURE_AUTH_KEY',  'dv6@6E8Zoy+x}ARJsI{)Oul<ZphR7wwu-~[nR4p5f`Ajcu^Djl//j-rlOt(]mNBq');
define('LOGGED_IN_KEY',    '1|]km!^P%k0*F_./ au7tmJpm+)8+)9:Lk{-ocEudM)?q`n^WKQN%DT8-_c*|{-`');
define('NONCE_KEY',        'TYe MXWp+P&PLsd:}jN!A1?VB<I8_d}^Y={7WPT8RED+p*wzuV/.w~=S_E+dPsS9');
define('AUTH_SALT',        'YNH|#~WzoY;V40yT*i-9X4W-bzT+E75Z|){K(1lly+)V4@Yq6eH +`s|@WIw#[>f');
define('SECURE_AUTH_SALT', 'SP1!bZwXHQq-(WRPf&To5$uSs`? dI8-sNq[xDW|nn_IHzx=7HQRI=[ky EU2nH]');
define('LOGGED_IN_SALT',   ',W&E3%_GYOVxX`# 2?p!uQ_%)lwX{N9-w?zmYD1B7*S`<NF3BMYrPh]xpj+hTHOS');
define('NONCE_SALT',       'kqh|b3mM/9rEH^*VK_>O+8fO41};F=~.>h]m+V!zn3B:btdM<A=!k8L;CekfGmkH');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * O idioma localizado do WordPress é o inglês por padrão.
 *
 * Altere esta definição para localizar o WordPress. Um arquivo MO correspondente ao
 * idioma escolhido deve ser instalado em wp-content/languages. Por exemplo, instale
 * pt_BR.mo em wp-content/languages e altere WPLANG para 'pt_BR' para habilitar o suporte
 * ao português do Brasil.
 */
define('WPLANG', 'pt_BR');

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
