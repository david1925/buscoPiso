<?php    
    class Location {
        var $locationId;
        var $mall;
        var $streetLevel;
        var $mazzine;
        var $underground;
        var $others;
        
        function __construct($locationId, $mall, $streetLevel, $mazzine, $underground, $others) {
            $this->locationId = $locationId;
            $this->mall = $mall;
            $this->streetLevel = $streetLevel;
            $this->mazzine = $mazzine;
            $this->underground = $underground;
            $this->others = $others;
        }

        function getLocationId() {return $this->locationId;}
        function getMall() {return $this->mall;}
        function getStreetLevel() {return $this->streetLevel;}
        function getMazzine() {return $this->mazzine;}
        function getUnderground() {return $this->underground;}
        function getOthers() {return $this->others;}
        
        function setLocationId($locationId) {$this->locationId = $locationId;}
        function setMall($mall) {$this->mall = $mall;}
        function setStreetLevel($streetLevel) {$this->streetLevel = $streetLevel;}
        function setMazzine($mazzine) {$this->mazzine = $mazzine;}
        function setUnderground($underground) {$this->underground = $underground;}
        function setOthers($others) {$this->others = $others;}
    }
?>
