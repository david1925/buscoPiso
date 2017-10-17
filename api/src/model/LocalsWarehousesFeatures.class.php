<?php    
    class LocalsWarehousesFeatures {
        var $localWarehouseFeatures;
        var $airConditioner;
        var $heating;
        var $corner;
        var $smokeOutlet;
        
        function __construct($localWarehouseFeatures, $airConditioner, $heating, $corner, $smokeOutlet) {
            $this->localWarehouseFeatures = $localWarehouseFeatures;
            $this->airConditioner = $airConditioner;
            $this->heating = $heating;
            $this->corner = $corner;
            $this->smokeOutlet = $smokeOutlet;
        }

        function getLocalWarehouseFeatures() {return $this->localWarehouseFeatures;}
        function getAirConditioner() {return $this->airConditioner;}
        function getHeating() {return $this->heating;}
        function getCorner() {return $this->corner;}
        function getSmokeOutlet() {return $this->smokeOutlet;}

        function setLocalWarehouseFeatures($localWarehouseFeatures) {$this->localWarehouseFeatures = $localWarehouseFeatures;}
        function setAirConditioner($airConditioner) {$this->airConditioner = $airConditioner;}
        function setHeating($heating) {$this->heating = $heating;}
        function setCorner($corner) {$this->corner = $corner;}
        function setSmokeOutlet($smokeOutlet) {$this->smokeOutlet = $smokeOutlet;}
    }
?>
