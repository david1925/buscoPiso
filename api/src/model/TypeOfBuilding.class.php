<?php    
    class TypeOfBuilding {
        var $typeOfBuildingId;
        var $name;
        
        function __construct($typeOfBuildingId, $name) {
            $this->typeOfBuildingId = $typeOfBuildingId;
            $this->name = $name;
        }

        function getTypeOfBuildingId() {return $this->typeOfBuildingId;}
        function getName() {return $this->name;}

        function setTypeOfBuildingId($typeOfBuildingId) {$this->typeOfBuildingId = $typeOfBuildingId;}
        function setName($name) {$this->name = $name;}
    }
?>
