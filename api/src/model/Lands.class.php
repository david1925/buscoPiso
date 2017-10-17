<?php    
    class Lands {
        var $landId;
        var $price;
        var $squareMeters;
        var $landTypeId;
        var $municipalitiesId;
        var $typeOfContractId;
        var $roadTypesId;
        
        function __construct($landId, $price, $squareMeters, $landTypeId, $municipalitiesId, $typeOfContractId, $roadTypesId) {
            $this->landId = $landId;
            $this->price = $price;
            $this->squareMeters = $squareMeters;
            $this->landTypeId = $landTypeId;
            $this->municipalitiesId = $municipalitiesId;
            $this->typeOfContractId = $typeOfContractId;
            $this->roadTypesId = $roadTypesId;
        }

        function getLandId() {return $this->landId;}
        function getPrice() {return $this->price;}
        function getSquareMeters() {return $this->squareMeters;}
        function getLandTypeId() {return $this->landTypeId;}
        function getMunicipalitiesId() {return $this->municipalitiesId;}
        function getTypeOfContractId() {return $this->typeOfContractId;}
        function getRoadTypesId() {return $this->roadTypesId;}

        function setLandId($landId) {$this->landId = $landId;}
        function setPrice($price) {$this->price = $price;}
        function setSquareMeters($squareMeters) {$this->squareMeters = $squareMeters;}
        function setLandTypeId($landTypeId) {$this->landTypeId = $landTypeId;}
        function setMunicipalitiesId($municipalitiesId) {$this->municipalitiesId = $municipalitiesId;}
        function setTypeOfContractId($typeOfContractId) {$this->typeOfContractId = $typeOfContractId;}
        function setRoadTypesId($roadTypesId) {$this->roadTypesId = $roadTypesId;}
    }
?>
