<?php
    class UserImages {

        //PROPERTIES
        var $userImagesId;
        var $name;
        var $userId;

        //CONSTRUCT
        function __construct($userImagesId, $name, $userId) {
            $this->userImagesId = $userImagesId;
            $this->name = $name;
            $this->userId = $userId;
        }

        //GETTERS
        function getUserImagesId() {return $this->userImagesId;}
        function getName() {return $this->name;}
        function getUserId() {return $this->userId;}

        //SETTERS
        function setUserImagesId($userImagesId) {$this->userImagesId = $userImagesId;}
        function setName($name) {$this->name = $name;}
        function setUserId($userId) {$this->userId = $userId;}
    }
?>
