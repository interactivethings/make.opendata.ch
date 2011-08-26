<?php
/*
 * Dokuwiki's Main Configuration File - Local Settings
 * Auto-generated by config plugin
 * Run for user: loleg
 * Date: Fri, 26 Aug 2011 11:29:49 +0200
 */

$conf['title'] = 'make.opendata.ch';
$conf['start'] = 'home';
$conf['lang'] = 'de';
$conf['template'] = 'typo';
$conf['license'] = 'cc-by-sa';
$conf['dmode'] = 0777;
$conf['recent'] = 50;
$conf['breadcrumbs'] = 5;
$conf['toptoclevel'] = '5';
$conf['useacl'] = 1;
$conf['superuser'] = '@admin';
$conf['htmlok'] = 1;
$conf['ftp']['host'] = 'modwiki.utou.ch';
$conf['ftp']['user'] = '123';
$conf['ftp']['pass'] = '<b>MTIz';
$conf['ftp']['root'] = '/httpdocs';
$conf['plugin']['fckg']['guest_toolbar'] = 0;
$conf['plugin']['fckg']['smiley_as_text'] = 1;
$conf['plugin']['translation']['translations'] = 'de,fr';
$conf['plugin']['translation']['display'] = 'langcode';
$conf['plugin']['translation']['redirectstart'] = 1;

// end auto-generated content

/* **** Custom: set language **** */
if (isset($_REQUEST['lang'])) {
	if(	$_REQUEST['lang'] == "en" ||
		$_REQUEST['lang'] == "fr" ||
		$_REQUEST['lang'] == "de" ||
		$_REQUEST['lang'] == "it") {
		$conf['lang'] = $_REQUEST['lang'];
	}
}
/* ******** */
