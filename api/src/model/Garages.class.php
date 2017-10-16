<?php    
    class Garages {
        var $garagesId;
        var $price;
        var $publicationDate;
        var $garagesFeaturesId;
        var $typeOfContractId;
        var $municipalitiesId;
        
        function __construct($garagesId, $price, $publicationDate, $garagesFeaturesId, $typeOfContractId, $municipalitiesId) {
            $this->garagesId = $garagesId;
            $this->price = $price;
            $this->publicationDate = $publicationDate;
            $this->garagesFeaturesId = $garagesFeaturesId;
            $this->typeOfContractId = $typeOfContractId;
            $this->municipalitiesId = $municipalitiesId;
        }

        function getGaragesId() {return $this->garagesId;}
        function getPrice() {return $this->price;}
        function getPublicationDate() {return $this->publicationDate;}
        function getGaragesFeaturesId() {return $this->garagesFeaturesId;}
        function getTypeOfContractId() {return $this->typeOfContractId;}
        function getMunicipalitiesId() {return $this->municipalitiesId;}
        
        function setGaragesId($garagesId) {$this->garagesId = $garagesId;}
        function setPrice($price) {$this->price = $price;}
        function setPublicationDate($publicationDate) {$this->publicationDate = $publicationDate;}
        function setGaragesFeaturesId($garagesFeaturesId) {$this->garagesFeaturesId = $garagesFeaturesId;}
        function setTypeOfContractId($typeOfContractId) {$this->typeOfContractId = $typeOfContractId;}
        function setMunicipalitiesId($municipalitiesId) {$this->municipalitiesId = $municipalitiesId;}
    }
?>
