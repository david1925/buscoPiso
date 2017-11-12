<?php
    class FloorsUsers {

        //PROPERTIES
        var $userId;
        var $floorId;

        //CONSTRUCT
        function __construct($userId, $floorId) {
            $this->userId = $userId;
            $this->floorId = $floorId;
        }

        //GETTERS
        function getUserId() {return $this->userId;}
        function getFloorId() {return $this->floorId;}

        //SETTERS
        function setUserId($userId) {$this->userId = $userId;}
        function setFloorId($floorId) {$this->floorId = $floorId;}
    }
?>