<?php    
    class LocalsWarehouses {
        var $localWarehouseId;
        var $price;
        var $squareMeters;
        var $publicationDate;
        var $locationId;
        var $localWarehouseFeaturesId;
        var $municipalitiesId;
        var $typeOfContractId;
        var $roadTypeId;
        
        function __construct($localWarehouseId, $price, $squareMeters, $publicationDate, $locationId, $localWarehouseFeaturesId, $municipalitiesId, $typeOfContractId, $roadTypeId) {
            $this->localWarehouseId = $localWarehouseId;
            $this->price = $price;
            $this->squareMeters = $squareMeters;
            $this->publicationDate = $publicationDate;
            $this->locationId = $locationId;
            $this->localWarehouseFeaturesId = $localWarehouseFeaturesId;
            $this->municipalitiesId = $municipalitiesId;
            $this->typeOfContractId = $typeOfContractId;
            $this->roadTypeId = $roadTypeId;
        }

        function getLocalWarehouseId() {return $this->localWarehouseId;}
        function getPrice() {return $this->price;}
        function getSquareMeters() {return $this->squareMeters;}
        function getPublicationDate() {return $this->publicationDate;}
        function getLocationId() {return $this->locationId;}
        function getLocalWarehouseFeaturesId() {return $this->localWarehouseFeaturesId;}
        function getMunicipalitiesId() {return $this->municipalitiesId;}
        function getTypeOfContractId() {return $this->typeOfContractId;}
        function getRoadTypeId() {return $this->roadTypeId;}
        
        function setLocalWarehouseId($localWarehouseId) {$this->localWarehouseId = $localWarehouseId;}
        function setPrice($price) {$this->price = $price;}
        function setSquareMeters($squareMeters) {$this->squareMeters = $squareMeters;}
        function setPublicationDate($publicationDate) {$this->publicationDate = $publicationDate;}
        function setLocationId($locationId) {$this->locationId = $locationId;}
        function setLocalWarehouseFeaturesId($localWarehouseFeaturesId) {$this->localWarehouseFeaturesId = $localWarehouseFeaturesId;}
        function setMunicipalitiesId($municipalitiesId) {$this->municipalitiesId = $municipalitiesId;}
        function setTypeOfContractId($typeOfContractId) {$this->typeOfContractId = $typeOfContractId;}
        function setRoadTypeId($roadTypeId) {$this->roadTypeId = $roadTypeId;}
    }
?>
