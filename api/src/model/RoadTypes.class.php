<?php    
    class RoadTypes {
        var $roadTypeId;
        var $name;

        function __construct($roadTypeId, $name) {
            $this->roadTypeId = $roadTypeId;
            $this->name = $name;
        }

        function getRoadTypeId() {return $this->roadTypeId;}
        function getName() {return $this->name;}

        function setRoadTypeId($roadTypeId) {$this->roadTypeId = $roadTypeId;}
        function setName($name) {$this->name = $name;}
    }
?>
