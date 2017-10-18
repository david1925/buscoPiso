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
        var $floorConditionsId;
        var $typeOfContractId;
        var $userId;

        //CONSTRUCT
        function __construct($floorsSearchUsersId, $price, $squareMeters, $bedrooms, $publicationDate, $address, $municipalitiesId, $floorConditionsId, $typeOfContractId, $userId) {
            $this->floorSearchUsersId = $floorsSearchUsersId;
            $this->price = $price;
            $this->squareMeters = $squareMeters;
            $this->bedrooms = $bedrooms;
            $this->publicationDate = $publicationDate;
            $this->address = $address;
            $this->municipalitiesId = $municipalitiesId;
            $this->floorConditionsId = $idFloorConditionsId;
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
        function getFloorConditionsId() {return $this->floorConditionsId;}
        function getTypeOfContractId() {return $this->typoOfContractId;}
        function getUserId() {return $this->userId;}

        //SETTERS
        function setFloorsSearchUsersId($floorsSearchUsersId) {$this->floorsSearchUsersId = $floorsSearchUsersId;}
        function getPrice($price) {$this->price = $price;}
        function getSquareMeters($squareMeters) {$this->squareMeters = $squareMeters;}
        function getBedrooms($groupId) {$this->groupId = $bedrooms;}
        function getPublicationDate($publicationDate) {$this->publicationDate = $publicationDate;}
        function getAddress($address) {$this->address = $address;}
        function setMunicipalitiesId($municipalitiesId) {$this->municipalitiesId = $municipalitiesId;}
        function setTypeOfContractId($typeOfContractId) {$this->typeOfContractId = $typeOfContractId;}
        function setFloorConditionsId($floorConditionId) {$this->floorConditionId = $floorConditionId;}
        function setUserId($userId) {$this->userId = $userId;}
    }
?>c