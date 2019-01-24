<?php
//namespace Xere;

require "define.php";
require "route.php";
/**
 * Router
 *
 * @author    Yukky
 * @copyright 2018~ @Xere_Yukky
 * 
 *
 * routes[n] = Your own Description
 */
class RouteCheck
{

	function preg(){
		$URL = $_SERVER['REQUEST_URI'];
		list ($routes,$count) = route($URL);
		if ($routes[1] == "sushi") {
			if ($count = 2) {
				# code...
				if ($routes[2] == "yammy") {
					# code...
					# Sushi is best
				}else{
					dead(403);
				}
			}else{
				dead(403);
			}
		}elseif ($routes[1] == "brabra") {
			# code...
		}elseif ($routes[1] == "pizza") {
			# code...
		}else{
			dead(404);
		}
		return true;
	}
}
