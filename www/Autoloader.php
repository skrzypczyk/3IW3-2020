<?php
namespace App;

class Autoloader
{

	public static function register(){

		spl_autoload_register(function ($class){
			
			//   App\Core\routing -> \Core\routing
			$class = str_ireplace(__NAMESPACE__, "", $class);
			
			// \Core\routing.php -> /Core/routing
			$class = str_ireplace("\\", "/", $class);

			$class = ltrim($class, "/");

			if(file_exists($class.".php")){
				include $class.".php";
			}


		});

	}



}