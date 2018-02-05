<?php
    class FloorsSearchUsers {

        //PROPERTIES
        var $floorsSearchUsersId;
        var $price;
        var $squareMeters;
        var $bedrooms;
        var $publicationDate;
        var $address;
        var $airConditioner;
        var $builtInWardrobe;
        var $elevator;
        var $exterior;
        var $parking;
        var $garden;
        var $pool;
        var $storageRoom;
        var $communityZone;
        var $gym;
        var $municipalitiesId;
        var $provinceId;
        var $floorConditionsId;
        var $typeOfContractId;
        var $userId;

        //CONSTRUCT
        function __construct($floorsSearchUsersId, $price, $squareMeters, $bedrooms, $publicationDate, $address, $airConditioner, $builtInWardrobe, $elevator, $exterior, $parking, $garden, $pool, $storageRoom, $communityZone, $gym, $municipalitiesId, $provinceId, $floorConditionsId, $typeOfContractId, $userId) {
            $this->floorsSearchUsersId = $floorsSearchUsersId;
            $this->price = $price;
            $this->squareMeters = $squareMeters;
            $this->bedrooms = $bedrooms;
            $this->publicationDate = $publicationDate;
            $this->address = $address;
            $this->airConditioner = $airConditioner;
            $this->builtInWardrobe = $builtInWardrobe;
            $this->elevator = $elevator;
            $this->exterior = $exterior;
            $this->parking = $parking;
            $this->garden = $garden;
            $this->pool = $pool;
            $this->storageRoom = $storageRoom;
            $this->communityZone = $communityZone;
            $this->gym = $gym;
            $this->municipalitiesId = $municipalitiesId;
            $this->provinceId = $provinceId;
            $this->floorConditionsId = $floorConditionsId;
            $this->typeOfContractId = $typeOfContractId;
            $this->userId = $userId;
        }

        //GETTERS
        function getFloorsSearchUsersId() {return $this->floorsSearchUsersId;}
        function getPrice() {return $this->price;}
        function getSquareMeters() {return $this->squareMeters;}
        function getBedrooms() {return $this->bedrooms;}
        function getPublicationDate() {return $this->publicationDate;}
        function getAddress() {return $this->address;}
        function getAirConditioner() {return $this->airConditioner;}
        function getBuiltInWardrobe() {return $this->builtInWardrobe;}
        function getElevator() {return $this->elevator;}
        function getExterior() {return $this->exterior;}
        function getParking() {return $this->parking;}
        function getGarden() {return $this->garden;}
        function getPool() {return $this->pool;}
        function getStorageRoom() {return $this->storageRoom;}
        function getCommunityZone() {return $this->communityZone;}
        function getGym() {return $this->gym;}
        function getMunicipalitiesId() {return $this->municipalitiesId;}
        function getProvinceId() {return $this->provinceId;}
        function getFloorConditionsId() {return $this->floorConditionsId;}
        function getTypeOfContractId() {return $this->typeOfContractId;}
        function getUserId() {return $this->userId;}

        //SETTERS
        function setFloorsSearchUsersId($floorsSearchUsersId) {$this->floorsSearchUsersId = $floorsSearchUsersId;}
        function setPrice($price) {$this->price = $price;}
        function setSquareMeters($squareMeters) {$this->squareMeters = $squareMeters;}
        function setBedrooms($groupId) {$this->groupId = $bedrooms;}
        function setPublicationDate($publicationDate) {$this->publicationDate = $publicationDate;}
        function setAddress($address) {$this->address = $address;}
        function setAirConditioner($airConditioner) {$this->airConditioner = $airConditioner;}
        function setBuiltInWardrobe($builtInWardrobe) {$this->builtInWardrobe = $builtInWardrobe;}
        function setElevator($elevator) {$this->elevator = $elevator;}
        function setExterior($exterior) {$this->exterior = $exterior;}
        function setParking($parking) {$this->parking = $parking;}
        function setGarden($garden) {$this->garden = $garden;}
        function setPool($pool) {$this->pool = $pool;}
        function setStorageRoom($storageRoom) {$this->storageRoom = $storageRoom;}
        function setCommunityZone($communityZone) {$this->communityZone = $communityZone;}
        function setGym($gym) {$this->gym = $gym;}
        function setMunicipalitiesId($municipalitiesId) {$this->municipalitiesId = $municipalitiesId;}
        function setProvinceId($provinceId) {$this->provinceId = $provinceId;}
        function setTypeOfContractId($typeOfContractId) {$this->typeOfContractId = $typeOfContractId;}
        function setFloorConditionsId($floorConditionId) {$this->floorConditionId = $floorConditionId;}
        function setUserId($userId) {$this->userId = $userId;}
    }
?>