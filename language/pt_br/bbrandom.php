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
	'AVATAR_DRIVER_RGRAVATAR_TITLE'		=> 'Random Gravatar',
	'AVATAR_DRIVER_RGRAVATAR_EXPLAIN'	=> 'Esta opção permitirá o uso de um Gravatar Aleatório',
	'BBRANDOM_SITESPLAT'	            => '<i class="icon fa fa-info-circle"></i> Extensão Random Avatars por <a href="http://www.sitesplat.com" title="Professional Web Development"><strong>SiteSplat.com</strong></a> construído para <a href="https://themeforest.net/user/themesplat/portfolio?ref=ThemeSplat" title="Professional Premium Themes"><strong>Temas do SiteSplat</strong></a>',
));
