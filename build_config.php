<?php
/*
* This is the file that gets called for this module when OpenRepeater rebuilds the configuration files for SVXLink.
* Settings for the config file are created as a PHP associative array, when the file is called it will convert it into
* the requiried INI format and write the config file to the appropriate location with the correct naming.
*/

$options = unserialize($cur_mod['moduleOptions']);

// Build Config
$module_config_array['Module'.$cur_mod['svxlinkName']] = [
	'NAME' => $cur_mod['svxlinkName'],
	'ID' => $cur_mod['svxlinkID'],
	'TIMEOUT' => intval($options['timeout_min']) * 60,				
	'TYPE' => 'XML',
	'SERVER' => $options['server'],
	'LINK' => $options['link'],
	'#LONGMESSAGES' => '1',
	'#REMARKS' => '1',
	'#DEBUG' => '1',
	'AIRPORTS' => $options['airports_list'],
];


if($options['airport_default']) {
	// Default Airport Selected
	$module_config_array['Module'.$cur_mod['svxlinkName']] += [
		'STARTDEFAULT' => $options['airport_default'],
	];
}

?>