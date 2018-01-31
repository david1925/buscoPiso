<?php    
    class Garages {
        var $garagesId;
        var $price;
        var $publicationDate;
        var $motorcycleSeat;
        var $automaticDoor;
        var $security;
        var $typeOfContractId;
        var $municipalitiesId;
        var $roadTypeId;
        
        function __construct($garagesId, $price, $publicationDate, $motorcycleSeat, $automaticDoor, $security, $typeOfContractId, $municipalitiesId, $roadTypeId) {
            $this->garagesId = $garagesId;
            $this->price = $price;
            $this->publicationDate = $publicationDate;
            $this->motorcycleSeat = $motorcycleSeat;
            $this->automaticDoor = $automaticDoor;
            $this->security = $security;
            $this->typeOfContractId = $typeOfContractId;
            $this->municipalitiesId = $municipalitiesId;
        }

        function getGaragesId() {return $this->garagesId;}
        function getPrice() {return $this->price;}
        function getPublicationDate() {return $this->publicationDate;}
        function getMotorcycleSeat() {return $this->motorcycleSeat;}
        function getAutomaticDoor() {return $this->automaticDoor;}
        function getSecurity() {return $this->security;}
        function getTypeOfContractId() {return $this->typeOfContractId;}
        function getMunicipalitiesId() {return $this->municipalitiesId;}
        function getRoadTypeId() {return $this->roadTypeId;}
        
        function setGaragesId($garagesId) {$this->garagesId = $garagesId;}
        function setPrice($price) {$this->price = $price;}
        function setPublicationDate($publicationDate) {$this->publicationDate = $publicationDate;}
        function setGaragesFeaturesId($motorcycleSeat) {$this->motorcycleSeat = $motorcycleSeat;}
        function setAutomaticDoor($automaticDoor) {$this->automaticDoor = $automaticDoor;}
        function setSecurity($security) {$this->security = $security;}
        function setTypeOfContractId($typeOfContractId) {$this->typeOfContractId = $typeOfContractId;}
        function setMunicipalitiesId($municipalitiesId) {$this->municipalitiesId = $municipalitiesId;}
        function setRoadTypeId($roadTypeId) {$this->roadTypeId = $roadTypeId;}
    }
?>
