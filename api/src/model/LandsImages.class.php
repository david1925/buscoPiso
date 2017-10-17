<?php    
    class LandsImages {
        var $landImagesId;
        var $name;
        var $landId;
        
        function __construct($landImagesId, $name, $landId) {
            $this->landImagesId = $landImagesId;
            $this->name = $name;
            $this->landId = $landId;
        }

        function getLandImagesId() {return $this->landImagesId;}
        function getName() {return $this->name;}
        function getLandId() {return $this->landId;}
        
        function setLandImagesId($landImagesId) {$this->landImagesId = $landImagesId;}
        function setName($name) {$this->name = $name;}
        function setLandId($landId) {$this->landId = $landId;}
    }
?>