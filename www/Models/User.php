<?php
namespace App\Models;

use App\Core\Database;

class User extends Database
{
	private $id=null;
	private $firstname;
	private $lastname;
	private $email;
	private $pwd;
	private $country;
	private $status = 0;
	private $role = 0;
	private $isDeleted = 0;

	public function __construct(){
		parent::__construct();
	}

	public function setId($id){
		$this->id = $id;
	}
	public function setFirstname($firstname){
		$this->firstname = $firstname;
	}
	public function setLastname($lastname){
		$this->lastname = $lastname;
	}
	public function setEmail($email){
		$this->email = $email;
	}
	public function setPwd($pwd){
		$this->pwd = $pwd;
	}
	public function setCountry($country){
		$this->country = $country;
	}
	public function setStatus($status){
		$this->status = $status;
	}
	public function setRole($role){
		$this->role = $role;
	}
	public function setIsDeleted($isDeleted){
		$this->isDeleted = $isDeleted;
	}



}