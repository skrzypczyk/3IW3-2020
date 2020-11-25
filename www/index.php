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
$uriExploded = explode("/", $uri);


$c = empty($uriExploded[0])?"global":$uriExploded[0];
$a = $uriExploded[1]??"default";


//Appeler le bon controller et la bonne action en fonction de $c et $a
//et en faisant les bonnes vérifications

if( file_exists("./Controllers/".$c."Controller.class.php")){

	

}else{
	die("Le fichier ".$c." n'existe pas");
}