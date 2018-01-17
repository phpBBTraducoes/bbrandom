<?php
/**
*
* @package BBrandom
* @copyright (c) 2016 SiteSplat All rights reserved
* @license Proprietary
* Brazilian Portuguese translation by eunaumtenhoid (c) 2018 [ver 1.0.3] (https://github.com/phpBBTraducoes)
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ALLOW_RGRAVATAR'	        => 'Permitir Gravatar aleatório',
	'DEFAULT_RGRAVATAR'	        => 'Defina Gravatar aleatório como padrão  para novos usuários',
	'DEFAULT_RGRAVATAR_EXPLAIN'	=> 'Isso atribuirá um gravatar aleatório para Usuários Recentemente Registrados<br /> Esta opção também estará disponível em UCP &#62; Perfil &#62; Editar avatar',
	'DEFAULT_CUAVATAR'	        => 'Defina Avatar personalizado como padrão para novos usuários',
	'DEFAULT_CUAVATAR_EXPLAIN'	=> 'Envie imagens que você deseja ser avatares aleatórios em <strong>root/images/avatars/random/</strong> antes de usar esta função!<br /> Isso é apenas para Usuários Recentemente Registrados e não estará disponível no UCP &#62; Perfil &#62; Editar avatar',

	'SS_HELPER_NOTY'	        => 'SiteSplat BBcore não existe!<br />Faça o download do <a href="http://sitesplat.com" target="_blank">BBcore</a> e copie a pasta BBcore em sua pasta de extensão sitesplat.',
	'BBRANDOM_NOTICE'	        => '<div class="phpinfo"><p>A configuração para esta extensão está em <strong>ACP &#62; Configurações do fórum &#62; Configurações de avatar</strong> e em <strong>ACP &#62; Usuários e grupos &#62; Administrar usuários &#62; Selecione o usuário e envie, em seguida, no menu dropdown, clique em "avatar"</strong>.<br />Cada usuário também pode escolher se ele ou ela quer usar um avatar aleatório em UCP &#62; Perfil &#62; Editar avatar. Imagens de avatar personalizadas devem ser carregadas em <strong>root/images/avatars/random/</strong></p></div>',
	'BBRANDOM_SITESPLAT'	    => '<i class="icon fa fa-info-circle"></i>Extensão Random Avatars por <a href="http://www.sitesplat.com" title="Professional Web Development"><strong>SiteSplat.com</strong></a> construído para <a href="https://themeforest.net/user/themesplat/portfolio?ref=ThemeSplat" title="Professional Premium Themes"><strong>Temas do SiteSplat</strong></a>',
));

// Description of extension
$lang = array_merge($lang, array(
	'DESCRIPTION_PAGE'		=> 'Descrição',
	'DESCRIPTION_NOTICE'	=> 'Nota da extensão',
	'ext_details' => array(
		'details' => array(
			'DESCRIPTION_1'		=> 'Random gravatars',
			'DESCRIPTION_2'		=> 'Para cada usuário',
			'DESCRIPTION_3'		=> 'Hospedado em gravatar.com',
		),
		'note' => array(
			'NOTICE_1'			=> 'phpBB 3.2 pronto'
		)
	)
));
