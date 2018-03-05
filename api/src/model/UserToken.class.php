<?php

class UserToken {		
   var $userId;
    var $name;
    var $firstname;
    var $lastname;
    var $email;    
    var $phone;
    var $description;
    var $state;
    var $lastLogin;
    var $groupId;
    var $businessOfficeId;
    var $additionalFeaturesId;
    var $valid;


	public function __construct($token){
		try{
			$decoded = JWT::decode($token, "buscoPisoToken", array('HS256'));//Token que se recibe, el hash, algoritmo
			$decoded = get_object_vars($this);            
			/*$this->id = $decoded[userId];
            $this->name = $decoded[name];
			$this->firstname = $decoded[firstname];
            $this->lastname = $decoded[lastname];
            $this->email = $decoded[email];
            $this->phone = $decoded[phone];
            $this->description = $decoded[description];
            $this->state = $decoded[state];
            $this->lastLogin = $decoded[lastLogin];
            $this->groupId = $decoded[groupId];
            $this->businessIfficeId = $decoded[businessOfficeId];
            $this->additionalFeaturesId = $decoded[additionalFeaturesId];
			$this->valid = 1;*/
		}catch(\Exception $e){
			$this->valid = 0;
		}
	}

	public function getId() {
		return $this->id;
	}

	public function getPrivilege() {
		return $this->privilege;
	}

	public function isValid() {
		return $this->valid;
	}
}
