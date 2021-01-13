<?php

namespace App;

use App\Core\Security as coreSecurity;
use App\Core\Database;
use App\Core\ConstantManager;

class Security{


	public function defaultAction(){
		echo "controller security action default";
	}


	public function registerAction(){
		
		$sql = new Database();

		echo DBNAME;
		//ConstantManager::defineConstant("DBUSER", "test");

	}

	public function loginAction(){
		echo "controller security action login";
	}

	public function logoutAction(){
		echo "controller security action logout";
	}

	public function listofusersAction(){

		$security = new coreSecurity(); 
		if(!$security->isConnected()){
			die("Error not authorized");
		}

		echo "Là je liste tous les utilisateurs";
	}

}