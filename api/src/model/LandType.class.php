<?php    
    class LandType {
        var $landTypeId;
        var $urban;
        var $urbanizable;
        
        function __construct($landTypeId, $urban, $urbanizable) {
            $this->landTypeId = $landTypeId;
            $this->urban = $urban;
            $this->urbanizable = $urbanizable;
        }

        function getLandTypeId() {return $this->landTypeId;}
        function getUrban() {return $this->urban;}
        function getUrbanizable() {return $this->urbanizable;}
        
        function setLandTypeId($landTypeId) {$this->landTypeId = $landTypeId;}
        function setUrban($urban) {$this->urban = $urban;}
        function setUrbanizable($urbanizable) {$this->urbanizable = $urbanizable;}
    }
?>
