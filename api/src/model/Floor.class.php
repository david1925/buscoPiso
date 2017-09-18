<?php
    class Floor {

        //PROPERTIES
        var $floorId;
        var $price;
        var $squareMeters;
        var $bedroom;
        var $publicationDate;
        var $address;
        var $idMunicipalities;
        var $idTypeOfContract;
        var $idFloorCondition;
        var $idRoadType;

        //CONSTRUCT
        function __construct($floorId, $price, $squareMeters, $bedroom, $publicationDate, $address, $idMunicipalities, $idTypeOfContract, $idFloorCondition, $idRoadType) {
            $this->floorId = $floorId;
            $this->price = $price;
            $this->squareMeters = $squareMeters;
            $this->bedroom = $bedroom;
            $this->publicationDate = $publicationDate;
            $this->address = $address;
            $this->idMunicipalities = $idMunicipalities;
            $this->idTypeOfContract = $idTypeOfContract;
            $this->idFloorCondition = $idFloorCondition;
            $this->idRoadType = $idRoadType;
        }

        //GETTERS
        function getFloorId() {return $this->floorId;}
        function getPrice() {return $this->price;}
        function getSquareMeters() {return $this->squareMeters;}
        function getBedroom() {return $this->bedroom;}
        function getPublicationDate() {return $this->publicationDate;}
        function getAddress() {return $this->address;}
        function getIdMunicipalities() {return $this->idMunicipalities;}
        function getIdTypeOfContract() {return $this->idTypeOfContract;}
        function getIdFloorCondition() {return $this->idFloorCondition;}
        function getIdRoadType() {return $this->idRoadType;}


        //SETTERS
        function setFloorId($floorId) {$this->floorId = $floorId;}
        function setPrice($price) {$this->price = $price;}
        function setSquareMeters($squareMeters) {$this->squareMeters = $squareMeters;}
        function setBedroom($bedroom) {$this->bedroom = $bedroom;}
        function setPublicationDate($publicationDate) {$this->publicationDate = $publicationDate;}
        function setAddress($address) {$this->address = $address;}
        function setIdMunicipalities($idMunicipalities) {$this->idMunicipalities = $idMunicipalities;}
        function setIdTypeOfContract($idTypeOfContract) {$this->idTypeOfContract = $idTypeOfContract;}
        function setIdFloorCondition($idFloorCondition) {$this->idFloorCondition = $idFloorCondition;}
        function setIdRoadType($idRoadType) {$this->idRoadType = $idRoadType;}
    }
?>
