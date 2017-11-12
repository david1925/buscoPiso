<?php    
    class OfficeFeatures {
        var $officeFeaturesId;
        var $hotWater;
        var $airConditioner;
        var $elevator;
        var $heating;
        var $exterior;
        var $garage;        
        var $security;
        
        function __construct($officeFeaturesId, $hotWater, $airConditioner, $elevator, $heating, $exterior, $garage, $security) {
            $this->officeFeaturesId = $officeFeaturesId;
            $this->hotWater = $hotWater;
            $this->airConditioner = $airConditioner;
            $this->elevator = $elevator;
            $this->heating = $heating;
            $this->exterior = $exterior;
            $this->garage = $garage;
            $this->security = $security;
        }

        function getOfficeFeaturesId() {return $this->officeFeaturesId;}
        function getHotWater() {return $this->hotWater;}
        function getAirConditioner() {return $this->airConditioner;}
        function getElevator() {return $this->elevator;}
        function getHeating() {return $this->heating;}
        function getExterior() {return $this->exterior;}
        function getGarage() {return $this->garage;}
        function getSecurity() {return $this->security;}

        function setOfficeFeaturesId($officeFeaturesId) {$this->officeFeaturesId = $officeFeaturesId;}
        function setHotWater($hotWater) {$this->hotWater = $hotWater;}
        function setAirConditioner($airConditioner) {$this->airConditioner = $airConditioner;}
        function setElevator($elevator) {$this->elevator = $elevator;}
        function setHeating($heating) {$this->heating = $heating;}
        function setExterior($exterior) {$this->exterior = $exterior;}
        function setGarage($garage) {$this->garage = $garage;}
        function setSecurity($security) {$this->security = $security;}
    }
?>
