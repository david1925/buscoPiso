<?php    
    class GaragesSearchUsers {
        var $garagesId;
        var $price;
        var $publicationDate;
        var $motorcycleSeat;
        var $automaticDoor;
        var $security;
        var $typeOfContractId;
        var $municipalityId;
        var $provinceId;
        var $userId;
        
        function __construct($garagesId, $price, $publicationDate, $motorcycleSeat, $automaticDoor, $security, $typeOfContractId, $municipalityId, $provinceId, $userId) {
            $this->garagesId = $garagesId;
            $this->price = $price;
            $this->publicationDate = $publicationDate;
            $this->motorcycleSeat = $motorcycleSeat;
            $this->automaticDoor = $automaticDoor;
            $this->security = $security;
            $this->typeOfContractId = $typeOfContractId;
            $this->municipalityId = $municipalityId;
            $this->provinceId = $provinceId;
            $this->userId = $userId;
        }
        
        function getGaragesId() {return $this->garagesId;}
        function getPrice() {return $this->price;}
        function getPublicationDate() {return $this->publicationDate;}
        function getMotorcycleSeat() {return $this->motorcycleSeat;}
        function getAutomaticDoor() {return $this->automaticDoor;}
        function getSecurity() {return $this->security;}
        function getTypeOfContractId() {return $this->typeOfContractId;}
        function getMunicipalityId() {return $this->municipalityId;}
        function getProvinceId() {return $this->provinceId;}
        function getUserId() {return $this->userId;}
       
        function setGaragesId($garagesId) {$this->garagesId = $garagesId;}
        function setPrice($price) {$this->price = $price;}
        function setPublicationDate($publicationDate) {$this->publicationDate = $publicationDate;}
        function setMotorcycleSeat($motorcycleSeat) {$this->motorcycleSeat = $motorcycleSeat;}
        function setAutomaticDoor($automaticDoor) {$this->automaticDoor = $automaticDoor;}
        function setSecurity($security) {$this->security = $security;}
        function setTypeOfContractId($typeOfContractId) {$this->typeOfContractId = $typeOfContractId;}
        function setMunicipalityId($municipalityId) {$this->municipalityId = $municipalityId;}
        function setProvinceId($provinceId) {$this->provinceId = $provinceId;}
        function setUserId($userId) {$this->userId = $userId;}
    }
?>
