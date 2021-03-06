<?php

namespace App;

use App\Core\Security as coreSecurity;
use App\Core\Database;
use App\Core\View;
use App\Core\Form;
use App\Core\ConstantManager;
use App\Models\User;

class Security{


	public function defaultAction(){
		echo "controller security action default";
	}


	public function registerAction(){
		
		
		/*
		$user = new User();
		$user->setId(3);
		$user->setLastname("Tutu");

		 
			[id:App\Models\User:private] => 3 
			[firstname:protected] => Toto
			[lastname:protected] => Tutu 
			[email:protected] => y.skrzypczyk@gmail.com
			[pwd:protected] => Test1234
			[country:protected] => fr
			[status:protected] => 0 
			[role:protected] => 0 
			[isDeleted:protected] => 0 
		*/


		//$user->save();

		$user = new User();
		$view = new View("register");
		$form = $user->buildFormRegister();
		$view->assign("form", $form);

		

		if(!empty($_POST)){
			$errors = Form::validator($_POST, $form);

			if(empty($errors)){

				$user->setFirstname("Toto");
				$user->setLastname("Titi");
				$user->setEmail("y.skrzypczyk@gmail.com");
				$user->setPwd("Test1234");
				$user->setCountry("fr");
				//$user->save();

			}else{
				$view->assign("formErrors", $errors);
			}

		}
		
		

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