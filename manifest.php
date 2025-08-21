<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$manifest = array();

$manifest['name']        = __( 'Social', 'fw' );
$manifest['slug']        = 'unysonplus-social';
$manifest['description'] = __( 
	'Use this extension to configure all your social related APIs. Other extensions will use the Social extension to connect to your social accounts.', 
	'fw' 
);

$manifest['version']     = '1.0.7';
$manifest['display']     = true;
$manifest['standalone']  = true;

// Repository Info
$manifest['github_update'] = 'UnysonPlus/UnysonPlus-Social-Extension';
$manifest['github_repo']   = 'https://github.com/UnysonPlus/UnysonPlus-Social-Extension';
$manifest['github_branch'] = 'master';

// Author Info
$manifest['author']     = 'UnysonPlus';
$manifest['author_uri'] = 'https://www.lastimosa.com.ph/unysonplus';

// Meta
$manifest['license']      = 'GPL-2.0-or-later';
$manifest['text_domain']  = 'fw';
$manifest['requires_php'] = '7.4';
$manifest['requires_wp']  = '5.8';
