<?php    
    class Offices {
        var $officeId;
        var $price;
        var $squareMeters;
        var $publicationDate;
        var $address;
        var $local;
        var $warehouse;
        var $hotWater;
        var $airConditioner;
        var $elevator;
        var $heating;
        var $exterior;
        var $garage;
        var $security;
        var $distributionId;
        var $typeOfBuildingId;
        var $municipalitiesId;
        var $typeOfContractId;
        var $roadTypesId;
        
        function __construct($officeId, $price, $squareMeters, $publicationDate, $address, $local, $warehouse, $hotWater, $airConditioner, $elevator, $heating, $exterior, $garage, $security, $distributionId, $typeOfBuildingId, $municipalitiesId, $typeOfContractId, $roadTypesId) {
            $this->officeId = $officeId;
            $this->price = $price;
            $this->squareMeters = $squareMeters;
            $this->publicationDate = $publicationDate;
            $this->address = $address;
            $this->local = $local;
            $this->warehouse = $warehouse;
            $this->hotWater = $hotWater;
            $this->airConditioner = $airConditioner;
            $this->elevator = $elevator;
            $this->heating = $heating;
            $this->exterior = $exterior;
            $this->garage = $garage;
            $this->security = $security;
            $this->distributionId = $distributionId;
            $this->typeOfBuildingId = $typeOfBuildingId;
            $this->municipalitiesId = $municipalitiesId;
            $this->typeOfContractId = $typeOfContractId;
            $this->roadTypesId = $roadTypesId;
        }
        
        function getOfficeId() {return $this->officeId;}
        function getPrice() {return $this->price;}
        function getSquareMeters() {return $this->squareMeters;}
        function getPublicationDate() {return $this->publicationDate;}
        function getAddress() {return $this->address;}
        function getLocal() {return $this->local;}
        function getWarehouse() {return $this->warehouse;}
        function getHotWater() {return $this->hotWater;}
        function getAirConditioner() {return $this->airConditioner;}
        function getElevator() {return $this->elevator;}
        function getHeating() {return $this->heating;}
        function getExterior() {return $this->exterior;}
        function getGarage() {return $this->garage;}
        function getSecurity() {return $this->security;}
        function getDistributionId() {return $this->distributionId;}
        function getTypeOfBuildingId() {return $this->typeOfBuildingId;}
        function getMunicipalitiesId() {return $this->municipalitiesId;}
        function getTypeOfContractId() {return $this->typeOfContractId;}
        function getRoadTypesId() {return $this->roadTypesId;}
        
        function setOfficeId($officeId) {$this->officeId = $officeId;}
        function setPrice($price) {$this->price = $price;}
        function setSquareMeters($squareMeters) {$this->squareMeters = $squareMeters;}
        function setPublicationDate($publicationDate) {$this->publicationDate = $publicationDate;}
        function setAddress($address) {$this->address = $address;}
        function setLocal($local) {$this->local = $local;}
        function setWarehouse($warehouse) {$this->warehouse = $warehouse;}
        function setHotWater($hotWater) {$this->hotWater = $hotWater;}
        function setAirConditioner($airConditioner) {$this->airConditioner = $airConditioner;}
        function setElevator($elevator) {$this->elevator = $elevator;}
        function setHeating($heating) {$this->heating = $heating;}
        function setExterior($exterior) {$this->exterior = $exterior;}
        function setGarage($garage) {$this->garage = $garage;}
        function setSecurity($security) {$this->security = $security;}
        function setDistributionId($distributionId) {$this->distributionId = $distributionId;}
        function setTypeOfBuildingId($typeOfBuildingId) {$this->typeOfBuildingId = $typeOfBuildingId;}
        function setMunicipalitiesId($municipalitiesId) {$this->municipalitiesId = $municipalitiesId;}
        function setTypeOfContractId($typeOfContractId) {$this->typeOfContractId = $typeOfContractId;}
        function setRoadTypesId($roadTypesId) {$this->roadTypesId = $roadTypesId;}
    }
?>
