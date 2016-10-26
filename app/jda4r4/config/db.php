<?php
	
	$active = 'local';

	$_DBCON['local']['hostname'] = 'localhost';
	$_DBCON['local']['username'] = 'root';
	$_DBCON['local']['password'] = '';
	$_DBCON['local']['database'] = 'atpx';

	$_DBCON['prod']['hostname'] = 'jdaprod2.rgoc.com.ph';
	$_DBCON['prod']['username'] = 'atpx_user';
	$_DBCON['prod']['password'] = 'atpxuser';
	$_DBCON['prod']['database'] = 'atpx';

	$_CONFIG['deve'] = $_DBCON[$active];