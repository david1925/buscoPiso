<?php
    class FloorsSearchUsers {

        //PROPERTIES
        var $floorsSearchUsersId;
        var $price;
        var $squareMeters;
        var $bedrooms;
        var $publicationDate;
        var $address;
        var $municipalitiesId;
        var $provinceId;
        var $floorConditionsId;
        var $typeOfContractId;
        var $userId;

        //CONSTRUCT
        function __construct($floorsSearchUsersId, $price, $squareMeters, $bedrooms, $publicationDate, $address, $municipalitiesId, $provinceId, $floorConditionsId, $typeOfContractId, $userId) {
            $this->floorSearchUsersId = $floorsSearchUsersId;
            $this->price = $price;
            $this->squareMeters = $squareMeters;
            $this->bedrooms = $bedrooms;
            $this->publicationDate = $publicationDate;
            $this->address = $address;
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
        function setMunicipalitiesId($municipalitiesId) {$this->municipalitiesId = $municipalitiesId;}
        function setProvinceId($provinceId) {$this->provinceId = $provinceId;}
        function setTypeOfContractId($typeOfContractId) {$this->typeOfContractId = $typeOfContractId;}
        function setFloorConditionsId($floorConditionId) {$this->floorConditionId = $floorConditionId;}
        function setUserId($userId) {$this->userId = $userId;}
    }
?>