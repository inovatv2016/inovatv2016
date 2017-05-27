<?php
	$ender_dropbox ='https://inovatv2018.tk/INOVALINUX/login.txt';
	
	header("Pragma: no-cache");
	header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
	header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
	header("Cache-Control: no-cache, cachehack=".time());
	header("Cache-Control: no-store, must-revalidate");
	header("Cache-Control: post-check=-1, pre-check=-1", false);

	$useragent = $_SERVER['HTTP_USER_AGENT'];

	if (preg_match('|MSIE ([0-9].[0-9]{1,2})|',$useragent,$matched)) {
	$browser_version=$matched[1];
	$browser = 'IE';
	} elseif (preg_match( '|Opera/([0-9].[0-9]{1,2})|',$useragent,$matched)) {
	$browser_version=$matched[1];
	$browser = 'Opera';
	} elseif(preg_match('|Firefox/([0-9\.]+)|',$useragent,$matched)) {
	$browser_version=$matched[1];
	$browser = 'Firefox';
	} elseif(preg_match('|Chrome/([0-9\.]+)|',$useragent,$matched)) {
	$browser_version=$matched[1];
	$browser = 'Chrome';
	} elseif(preg_match('|Safari/([0-9\.]+)|',$useragent,$matched)) {
	$browser_version=$matched[1];
	$browser = 'Safari';
	} else {
	// browser not recognized!
	$browser_version = 0;
	$browser= 'other';
	}
	//print "browser: $browser $browser_version";

	if ($browser!='other'){
		//echo 'Acesso negado';
		header("Location: http://inovatv2018.tk/TESTE/");
		//die();
	} else{	
		header('Content-type: application/vnd.apple.mpegurl');
		header("Location: $ender_dropbox");
	}
?>