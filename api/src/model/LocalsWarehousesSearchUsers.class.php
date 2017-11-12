<?php    
    class LocalsWarehousesSearchUsers {
        var $localWarehouseId;
        var $price;
        var $squareMeters;
        var $publicationDate;
        var $locationId;
        var $localWarehouseFeaturesId;
        var $municipalities;
        var $typeOfContract;
        var $userId;
        
        function __construct($localWarehouseId, $price, $squareMeters, $publicationDate, $locationId, $localWarehouseFeaturesId, $municipalities, $typeOfContract, $userId) {
            $this->localWarehouseId = $localWarehouseId;
            $this->price = $price;
            $this->squareMeters = $squareMeters;
            $this->publicationDate = $publicationDate;
            $this->locationId = $locationId;
            $this->localWarehouseFeaturesId = $localWarehouseFeaturesId;
            $this->municipalities = $municipalities;
            $this->typeOfContract = $typeOfContract;
            $this->userId = $userId;
        }

        function getLocalWarehouseId() {return $this->localWarehouseId;}
        function getPrice() {return $this->price;}
        function getSquareMeters() {return $this->squareMeters;}
        function getPublicationDate() {return $this->publicationDate;}
        function getLocationId() {return $this->locationId;}
        function getLocalWarehouseFeaturesId() {return $this->localWarehouseFeaturesId;}
        function getMunicipalities() {return $this->municipalities;}
        function getTypeOfContract() {return $this->typeOfContract;}
        function getUserId() {return $this->userId;}

        function setLocalWarehouseId($localWarehouseId) {$this->localWarehouseId = $localWarehouseId;}
        function setPrice($price) {$this->price = $price;}
        function setSquareMeters($squareMeters) {$this->squareMeters = $squareMeters;}
        function setPublicationDate($publicationDate) {$this->publicationDate = $publicationDate;}
        function setLocationId($locationId) {$this->locationId = $locationId;}
        function setLocalWarehouseFeaturesId($localWarehouseFeaturesId) {$this->localWarehouseFeaturesId = $localWarehouseFeaturesId;}
        function setMunicipalities($municipalities) {$this->municipalities = $municipalities;}
        function setTypeOfContract($typeOfContract) {$this->typeOfContract = $typeOfContract;}
        function setUserId($userId) {$this->userId = $userId;}
    }
?>
