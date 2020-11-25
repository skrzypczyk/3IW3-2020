<?php

class Routing{

	public $routesPath = "routes.yml";
	public $controller="GlobalController";
	public $action="defaultAction";
	public $routes = [];


	public function __construct($uri){
		//Faut vérifier que le fichier existe
		$this->routes = yaml_parse_file($this->routesPath);
		//Faut vérifier qu'il y a un controller pour cette route
		$this->setController($this->routes[$uri]["controller"]);
		//Faut vérifier qu'il y a une action pour cette route
		$this->setAction($this->routes[$uri]["action"]);
	}

	public function setController($controller){
		$this->controller=ucfirst(mb_strtolower($controller))."Controller";
	}

	public function setAction($action){
		$this->action=$action."Action";
	}

	public function getController(){
		return $this->controller;
	}

	public function getAction(){
		return $this->action;
	}




}
/*
if(file_exists("routes.yml")){

	$listOfRoutes = yaml_parse_file("routes.yml");

	echo "<pre>";
	print_r($listOfRoutes);




	if(!empty($listOfRoutes[$uri]) 
		&& !empty($listOfRoutes[$uri]["controller"]) 
		&& !empty($listOfRoutes[$uri]["action"])){
		

		$c = $listOfRoutes[$uri]["controller"]."Controller";
		$a = $listOfRoutes[$uri]["action"]."Action";

		//Est-ce que j'ai les droits, si ce n'est pas le cas erreur access denied : 403

	}else{
		die("Erreur 404");
	}

}else{
	die("Le fichier de routing n'existe pas");
}
*/