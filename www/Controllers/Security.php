<?php

namespace App;

use App\Core\Security as coreSecurity;
use App\Core\Database;
use App\Core\ConstantManager;
use App\Models\User;

class Security{


	public function defaultAction(){
		echo "controller security action default";
	}


	public function registerAction(){
		
		$user = new User();
		$user->setFirstname("Yves");
		$user->setLastname("Skrzypczyk");
		$user->setEmail("y.skrzypczyk@gmail.com");
		$user->setPwd("Test1234");
		$user->setCountry("fr");
		$user->save();

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