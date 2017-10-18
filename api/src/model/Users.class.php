<?php
    class Users {

        //PROPERTIES
        var $userId;
        var $name;
        var $firstname;
        var $lastname;
        var $email;
        var $password;
        var $phone;
        var $description;
        var $state;
        var $lastLogin;
        var $groupId;
        var $businessOfficeId;
        var $additionalFeaturesId;

        //CONSTRUCT
        function __construct($userId, $name, $firstname, $lastname, $email, $password, $phone, $description, $state, $lastLogin, $groupId, $businessOfficeId, $additionalFeaturesId) {
            $this->userId = $userId;
            $this->name = $name;
            $this->firstname = $firstname;
            $this->lastname = $lastname;
            $this->email = $email;
            $this->password = $password;
            $this->phone = $phone;
            $this->description = $description;
            $this->state = $state;
            $this->lastLogin = $lastLogin;
            $this->groupId = $groupId;
            $this->businessOfficeId = $businessOfficeId;
            $this->additionalFeaturesId = $additionalFeaturesId;

        }

        //GETTERS
        function getUserId() {return $this->userId;}
        function getName() {return $this->name;}
        function getFirstname() {return $this->firstname;}
        function getLastname() {return $this->lastname;}
        function getEmail() {return $this->email;}
        function getPassword() {return $this->password;}
        function getPhone() {return $this->phone;}
        function getDescription() {return $this->description;}
        function getState() {return $this->state;}
        function getLastLogin() {return $this->lastLogin;}
        function getGroupId() {return $this->groupId;}
        function getBusinnessOfficeId() {return $this->businessOfficeId;}
        function getAdditionalFeaturesId() {return $this->additionalFeaturesId;}


        //SETTERS
        function setUserId($userId) {$this->userId = $userId;}
        function setName($name) {$this->name = $name;}
        function setFirstname($firstname) {$this->firstname = $firstname;}
        function setLastname($lastname) {$this->lastname = $lastname;}
        function setEmail($email) {$this->email = $email;}
        function setPassword($password) {$this->password = $password;}
        function setPhone($phone) {$this->phone = $phone;}
        function setDescription($description) {$this->description = $description;}
        function setState($state) {$this->state = $state;}
        function setLastLogin($lastLogin) {$this->lastLogin = $lastLogin;}
        function setGroupId($groupId) {$this->groupId = $groupId;}
        function setBusinnessOfficeId($businessOfficeId) {$this->getBusinnessOfficeId = $businessOfficeId;}
        function setAdditionalFeaturesId($additionalFeaturesId) {$this->additionalFeaturesId = $additionalFeaturesId;}
    }
?>
