<?php
    class FloorConditions {

        //PROPERTIES
        var $floorConditionsId;
        var $name;

        //CONSTRUCT
        function __construct($floorConditionsId, $name) {
            $this->floorConditionsId = $floorConditionsId;
            $this->name = $name;
        }

        //GETTERS
        function getFloorConditionsId() {return $this->floorConditionsId;}
        function getName() {return $this->name;}

        //SETTERS
        function setFloorConditionsId($floorConditionsId) {$this->floorConditionsId = $floorConditionsId;}
        function setName($name) {$this->name = $name;}
    }
?>
