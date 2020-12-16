<?php

namespace App;

use App\Core\Security;
use App\Core\View;


class Base{


	public function defaultAction(){
		echo "controller global action default";

		//Affiche moi la vue home;
	}


	//Must be connected
	public function dashboardAction(){
		
		$security = new Security(); 
		if(!$security->isConnected()){
			die("Error not authorized");
		}


		//Affiche moi la vue dashboard;
		$view = new View("dashboard", "back");
		
		
	}


}