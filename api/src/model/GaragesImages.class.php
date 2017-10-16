<?php    
    class GaragesImages {
        var $garagesImagesId;
        var $name;
        var $garagesId;
        
        function __construct($garagesImagesId, $name, $garagesId) {
            $this->garagesImagesId = $garagesImagesId;
            $this->name = $name;
            $this->garagesId = $garagesId;
        }
        
        function getGaragesImagesId() {return $this->garagesImagesId;}
        function getName() {return $this->name;}
        function getGaragesId() {return $this->garagesId;}

        function setGaragesImagesId($garagesImagesId) {$this->garagesImagesId = $garagesImagesId;}
        function setName($name) {$this->name = $name;}
        function setGaragesId($garagesId) {$this->garagesId = $garagesId;}
    }
?>
