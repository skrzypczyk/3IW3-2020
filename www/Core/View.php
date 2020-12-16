<?php

namespace App\Core;

class View
{
	// front_tpl.php
	private $template; // front ou back
	// default_view.php
	private $view; // default, dashboard, profile, ....

	public function __construct($view="default", $template="front"){
		$this->setTemplate($template);
		$this->setView($view);
		
	}


	public function setTemplate($template){
		if(file_exists("Views/Templates/".$template."_tpl.php")){
			$this->template = "Views/Templates/".$template."_tpl.php";
		}else{
			die("Le template n'existe pas");
		}
	}

	public function setView($view){
		if(file_exists("Views/".$view."_view.php")){
			$this->view = "Views/".$view."_view.php";
		}else{
			die("La vue n'existe pas");
		}
	}


	public function __destruct(){
		include $this->template;
	}


}




