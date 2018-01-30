<?php    
    class Location {
        var $locationId;
        var $name
        
        function __construct($locationId, $name) {
            $this->locationId = $locationId;
            $this->name = $name
        }

        function getLocationId() {return $this->locationId;}
        function getName() {return $this->name;}
        
        function setLocationId($locationId) {$this->locationId = $locationId;}
        function setName($name) {$this->name = $name;}
    }
?>
