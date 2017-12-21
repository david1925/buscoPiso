<?php
    class OfficesSearchUsers {
        var $officeSearchUsersId;
        var $price;
        var $squareMeters;
        var $publicationDate;
        var $address;
        var $local;
        var $warehouse;
        var $distributionId;
        var $typeOfBuildingId;
        var $officeFeaturesId;
        var $municipalitiesId;
        var $typeOfContractId;
        var $provinceId;
        var $userId;

        function __construct($officeSearchUsersId, $price, $squareMeters, $publicationDate, $address, $local, $warehouse, $distributionId, $typeOfBuildingId, $officeFeaturesId, $municipalitiesId, $typeOfContractId, $provinceId, $userId) {
            $this->officeSearchUsersId = $officeSearchUsersId;
            $this->price = $price;
            $this->squareMeters = $squareMeters;
            $this->publicationDate = $publicationDate;
            $this->address = $address;
            $this->local = $local;
            $this->warehouse = $warehouse;
            $this->distributionId = $distributionId;
            $this->typeOfBuildingId = $typeOfBuildingId;
            $this->officeFeaturesId = $officeFeaturesId;
            $this->municipalitiesId = $municipalitiesId;
            $this->typeOfContractId = $typeOfContractId;
            $this->provinceId = $provinceId;
            $this->userId = $userId;
        }

        function getOfficeSearchUsersId() {return $this->officeSearchUsersId;}
        function getPrice() {return $this->price;}
        function getSquareMeters() {return $this->squareMeters;}
        function getPublicationDate() {return $this->publicationDate;}
        function getAddress() {return $this->address;}
        function getLocal() {return $this->local;}
        function getWarehouse() {return $this->warehouse;}
        function getDistributionId() {return $this->distributionId;}
        function getTypeOfBuildingId() {return $this->typeOfBuildingId;}
        function getOfficeFeaturesId() {return $this->officeFeaturesId;}
        function getMunicipalitiesId() {return $this->municipalitiesId;}
        function getTypeOfContractId() {return $this->typeOfContractId;}
        function getProvinceId() {return $this->provinceId;}
        function getUserId() {return $this->userId;}

        function setOfficeSearchUsersId($officeSearchUsersId) {$this->officeSearchUsersId = $officeSearchUsersId;}
        function setPrice($price) {$this->price = $price;}
        function setSquareMeters($squareMeters) {$this->squareMeters = $squareMeters;}
        function setPublicationDate($publicationDate) {$this->publicationDate = $publicationDate;}
        function setAddress($address) {$this->address = $address;}
        function setLocal($local) {$this->local = $local;}
        function setWarehouse($warehouse) {$this->warehouse = $warehouse;}
        function setDistributionId($distributionId) {$this->distributionId = $distributionId;}
        function setTypeOfBuildingId($typeOfBuildingId) {$this->typeOfBuildingId = $typeOfBuildingId;}
        function setOfficeFeaturesId($officeFeaturesId) {$this->officeFeaturesId = $officeFeaturesId;}
        function setMunicipalitiesId($municipalitiesId) {$this->municipalitiesId = $municipalitiesId;}
        function setTypeOfContractId($typeOfContractId) {$this->typeOfContractId = $typeOfContractId;}
        function setProvinceId($provinceId) {$this->provinceId = $provinceId;}
        function setUserId($userId) {$this->userId = $userId;}
    }
?>
