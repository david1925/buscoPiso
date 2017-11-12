<?php    
    class GaragesSearchUsers {
        var $garagesId;
        var $price;
        var $publicationDate;
        var $garagesFeaturesId;
        var $typeOfContractId;
        var $municipalityId;
        var $userId;
        
        function __construct($garagesId, $price, $publicationDate, $garagesFeaturesId, $typeOfContractId, $municipalityId, $userId) {
            $this->garagesId = $garagesId;
            $this->price = $price;
            $this->publicationDate = $publicationDate;
            $this->garagesFeaturesId = $garagesFeaturesId;
            $this->typeOfContractId = $typeOfContractId;
            $this->municipalityId = $municipalityId;
            $this->userId = $userId;
        }
        
        function getGaragesId() {return $this->garagesId;}
        function getPrice() {return $this->price;}
        function getPublicationDate() {return $this->publicationDate;}
        function getGaragesFeaturesId() {return $this->garagesFeaturesId;}
        function getTypeOfContractId() {return $this->typeOfContractId;}
        function getMunicipalityId() {return $this->municipalityId;}
        function getUserId() {return $this->userId;}
       
        function setGaragesId($garagesId) {$this->garagesId = $garagesId;}
        function setPrice($price) {$this->price = $price;}
        function setPublicationDate($publicationDate) {$this->publicationDate = $publicationDate;}
        function setGaragesFeaturesId($garagesFeaturesId) {$this->garagesFeaturesId = $garagesFeaturesId;}
        function setTypeOfContractId($typeOfContractId) {$this->typeOfContractId = $typeOfContractId;}
        function setMunicipalityId($municipalityId) {$this->municipalityId = $municipalityId;}
        function setUserId($userId) {$this->userId = $userId;}
    }
?>
