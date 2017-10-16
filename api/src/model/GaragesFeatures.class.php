<?php    
    class GaragesFeatures {
        var $garagesFeaturesId;
        var $motorcycleId;
        var $automaticDoor;
        var $security;
        
        function __construct($garagesFeaturesId, $motorcycleId, $automaticDoor, $security) {
            $this->garagesFeaturesId = $garagesFeaturesId;
            $this->motorcycleId = $motorcycleId;
            $this->automaticDoor = $automaticDoor;
            $this->security = $security;
        }

        function getGaragesFeaturesId() {return $this->garagesFeaturesId;}
        function getMotorcycleId() {return $this->motorcycleId;}
        function getAutomaticDoor() {return $this->automaticDoor;}
        function getSecurity() {return $this->security;}

        function setGaragesFeaturesId($garagesFeaturesId) {$this->garagesFeaturesId = $garagesFeaturesId;}
        function setMotorcycleId($motorcycleId) {$this->motorcycleId = $motorcycleId;}
        function setAutomaticDoor($automaticDoor) {$this->automaticDoor = $automaticDoor;}
        function setSecurity($security) {$this->security = $security;}
    }
?>