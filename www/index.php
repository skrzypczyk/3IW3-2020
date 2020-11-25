<?php

/*
http://localhost/user/add

$c = "user" sinon par défaut je veux "global"
$a = "add" sinon par défaut je veux "default"

*/

//[REQUEST_URI] => /user/add/
$uri  = trim($_SERVER["REQUEST_URI"], "/");
//   $uri = user/add
//   $uri = ""
$uriExploded = explode("?", $uri);
$uriExploded = explode("/", $uriExploded[0]);


$c = ucfirst(empty($uriExploded[0])?"global":$uriExploded[0])."Controller";
$a = ($uriExploded[1]??"default")."Action";



//Appeler le bon controller et la bonne action en fonction de $c et $a
//et en faisant les bonnes vérifications
if( file_exists("./Controllers/".$c.".class.php")){

	include "./Controllers/".$c.".class.php";

	if(class_exists($c)){
		//$c = SecurityController // UserController
		$cObject = new $c();

		if(method_exists($cObject, $a)){
			//$a = loginAction // defaultAction
			$cObject->$a();
		}else{
			die("L'action ".$a." n'existe pas");
		}

	}else{
		die("La classe ".$c." n'existe pas");
	}

}else{
	die("Le fichier ".$c." n'existe pas");
}