<?php    
    class LocalsWarehousesSearchUsers {
        var $localWarehouseId;
        var $price;
        var $squareMeters;
        var $publicationDate;
        var $airConditioner;
        var $heating;
        var $corner;
        var $smokeOutlet;
        var $locationId;
        var $municipalitiesId;
        var $typeOfContractId;
        var $provincesId;
        var $userId;
        
        function __construct($localWarehouseId, $price, $squareMeters, $publicationDate, $airConditioner, $heating, $corner, $smokeOutlet, $locationId, $municipalities, $typeOfContract, $provincesId, $userId) {
            $this->localWarehouseId = $localWarehouseId;
            $this->price = $price;
            $this->squareMeters = $squareMeters;
            $this->publicationDate = $publicationDate;
            $this->airConditioner = $airConditioner;
            $this->heating = $heating;
            $this->corner = $corner;
            $this->smokeOutlet = $smokeOutlet;
            $this->locationId = $locationId;
            $this->municipalitiesId = $municipalitiesId;
            $this->typeOfContractId = $typeOfContractId;
            $this->provincesId = $provincesId;
            $this->userId = $userId;
        }

        function getLocalWarehouseId() {return $this->localWarehouseId;}
        function getPrice() {return $this->price;}
        function getSquareMeters() {return $this->squareMeters;}
        function getPublicationDate() {return $this->publicationDate;}
        function getAirConditioner() {return $this->airConditioner;}
        function getHeating() {return $this->heating;}
        function getCorner() {return $this->corner;}
        function getSmokeOutlet() {return $this->smokeOutlet;}
        function getLocationId() {return $this->locationId;}
        function getMunicipalitiesId() {return $this->municipalitiesId;}
        function getTypeOfContractId() {return $this->typeOfContractId;}
        function getProvincesId() {return $this->provincesId;}
        function getUserId() {return $this->userId;}

        function setLocalWarehouseId($localWarehouseId) {$this->localWarehouseId = $localWarehouseId;}
        function setPrice($price) {$this->price = $price;}
        function setSquareMeters($squareMeters) {$this->squareMeters = $squareMeters;}
        function setPublicationDate($publicationDate) {$this->publicationDate = $publicationDate;}
        function setAirConditioner($airConditioner) {$this->airConditioner = $airConditioner;}
        function setHeating($heating) {$this->heating = $heating;}
        function setCorner($corner) {$this->corner = $corner;}
        function setSmokeOutlet($smokeOutlet) {$this->smokeOutlet = $smokeOutlet;}
        function setLocationId($locationId) {$this->locationId = $locationId;}
        function setMunicipalitiesId($municipalitiesId) {$this->municipalitiesId = $municipalitiesId;}
        function setTypeOfContractId($typeOfContractId) {$this->typeOfContractId = $typeOfContractId;}
        function setProvincesId($provincesId) {$this->provincesId = $provincesId;}
        function setUserId($userId) {$this->userId = $userId;}
    }
?>
