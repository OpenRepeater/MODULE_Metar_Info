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
	'#SERVER' => 'tgftp.nws.noaa.gov',
	'SERVER' => 'https://aviationweather.gov',
	'#LINK' => 'data/observations/metar/stations',
	'LINK' => '/adds/dataserver_current/httpparam?dataSource=metars&requestType=retrieve&format=xml&hoursBeforeNow=3&mostRecent=true&stationString=',
	'#STARTDEFAULT' => 'EDDP',
	'#LONGMESSAGES' => '1',
	'#REMARKS' => '1',
	'#DEBUG' => '1',
	'AIRPORTS' => 'ESSB,EDDP,SKSM,EDDS,EDDM,EDDF,KJAC,KTOL',
];

?>