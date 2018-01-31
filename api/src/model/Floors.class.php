<?php
    class Floors {

        //PROPERTIES
        var $floorId;
        var $price;
        var $squareMeters;
        var $bedroom;
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
        var $idMunicipalities;
        var $idTypeOfContract;
        var $idFloorCondition;
        var $idRoadType;

        //CONSTRUCT
        function __construct($floorId, $price, $squareMeters, $bedroom, $publicationDate, $address, $airConditioner, $builtInWardrobe, $elevator, $exterior, $parking, $garden, $pool, $storageRoom, $communityZone, $gym, $idMunicipalities, $idTypeOfContract, $idFloorCondition, $idRoadType) {
            $this->floorId = $floorId;
            $this->price = $price;
            $this->squareMeters = $squareMeters;
            $this->bedroom = $bedroom;
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
        function getAirConditioner() {return $this->airConditioner;}
        function getBuiltInWardrobe() {return $this->builtIntWardrobe;}
        function getElevator() {return $this->elevator;}
        function getExterior() {return $this->exterior;}
        function getParking() {return $this->parking;}
        function getGarden() {return $this->garden;}
        function getPool() {return $this->pool;}
        function getStorageRoom() {return $this->storageRoom;}
        function getCommunityZone() {return $this->communityZone;}
        function getGym() {return $this->gym;}
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
        function setIdMunicipalities($idMunicipalities) {$this->idMunicipalities = $idMunicipalities;}
        function setIdTypeOfContract($idTypeOfContract) {$this->idTypeOfContract = $idTypeOfContract;}
        function setIdFloorCondition($idFloorCondition) {$this->idFloorCondition = $idFloorCondition;}
        function setIdRoadType($idRoadType) {$this->idRoadType = $idRoadType;}
    }
?>
