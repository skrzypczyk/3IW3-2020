<?php

namespace App;

use App\Core\Security;

class Base{


	public function defaultAction(){
		echo "controller global action default";
	}


	//Must be connected
	public function dashboardAction(){
		
		$security = new Security(); 
		if(!$security->isConnected()){
			die("Error not authorized");
		}
		
		echo "Affichage du dashboard";
	}


}