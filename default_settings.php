<?php
/*
* This is the file that gets called for this module when OpenRepeater first
* installs the mdoule. It adds the default settings for the module defined in
* the PHP array below into the database in the moduleOptions field in the
* modules table. This information is serialized in the database. The variables
* that should be defined here are the same variables that are used in the
* settings form. Again, it is what is stored in the database as options and
* not the variables that the SVXLink code expects to see in the generated 
* config file for the module.
*/

$default_settings = [
    'timeout_min' => '2',
	'server' => 'https://aviationweather.gov',
    'link' => '/adds/dataserver_current/httpparam?dataSource=metars&requestType=retrieve&format=xml&hoursBeforeNow=3&mostRecent=true&stationString=',
    'airports_list' => 'ESSB,EDDP,SKSM,EDDS,EDDM,EDDF,KJAC,KTOL',
    'airport_default' => 'ESSB',
];
?>