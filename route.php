<?php
require "define.php";
/**
 * Router
 *
 * @author    Yukky
 * @copyright 2018~ @Xere_Yukky
 */ 


function route($text){
	$appname = strlen(APPNAME)+1;
	$founder = "/";
	$str = rawurldecode(substr($text, $appname));
	$count = mb_substr_count($str, $founder); 
	$routes = explode($founder, $str); 

	return array ($routes,$count);
}

function dead($code){
	$data = array('code' => $code, 'message' => constant($code));
	echo json_encode($data,JSON_PRETTY_PRINT);
	die();
}
