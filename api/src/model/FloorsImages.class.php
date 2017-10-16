<?php    
    class FloorsImages {
        var $floorsImagesId;
        var $name;
        var $floorsId;
        
        function __construct($floorsImagesId, $name, $floorsId) {
            $this->floorsImagesId = $floorsImagesId;
            $this->name = $name;
            $this->floorsId = $floorsId;
        }

        function getFloorsImagesId() {return $this->floorsImagesId;}
        function getName() {return $this->name;}
        function getFloorsId() {return $this->floorsId;}

        function setFloorsImagesId($floorsImagesId) {$this->floorsImagesId = $floorsImagesId;}
        function setName($name) {$this->name = $name;}
        function setFloorsId($floorsId) {$this->floorsId = $floorsId;}
    }
?>
