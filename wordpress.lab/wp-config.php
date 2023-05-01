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
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wp_lab' );

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
define( 'AUTH_KEY',         '.l=v5[I-?ZPN5:+%JSKL`Eqjk^g+Zsa+GlBHG&4%cv59Gwgo8Ysja~7`pw76k3yr' );
define( 'SECURE_AUTH_KEY',  'm$5C#EL#qEI&l/]*n_[G_fZaVlj_&5WckFcKf0&cOXM>;U=A9qthSLD%,Z_?6T7;' );
define( 'LOGGED_IN_KEY',    'mLh_=)/!vfJo3=?w3hq}f{LIV8T]B@H+zfe@=dZy3nDrTHy1WgyV=ZktnkrkbI`C' );
define( 'NONCE_KEY',        'DU^Yc40lt%=T#H/;s;t2vX-(pxZ!n# ![dC(SaA7^n.h#dVQ5^F(X45|jUOEQOYc' );
define( 'AUTH_SALT',        'MW/*f7`L1ej>l aG;!sRV&:JZ(s[A<>^Y`-1+H8(6B0+PnaNdT3y={`DDtyEF?=K' );
define( 'SECURE_AUTH_SALT', 'K2R?X7Bind#W:k)PqVq,#4vZpz<N,@K#N$Cd&C-_|[#)Xzc{}S?}mK/a@gm>P?%S' );
define( 'LOGGED_IN_SALT',   '++i_ycGT-VvZ`8I@#W?Q$;v*TMn`*a!pLFqqw7x;Ox>dBL[=n*!lk?/NC<A|cPIB' );
define( 'NONCE_SALT',       'JJg8mWw|3ckmxHcui],UKoP+`uCrzT/C;<!wW:Lt,|stxW!<S7f)WWB[|kwrT^SP' );

/**#@-*/

define('FS_METHOD', 'direct');

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

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
