<?php
    class Additional_Features {

        //PROPERTIES
        var $additionalFeaturesId;
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
        var $floorId;


        //CONSTRUCT
       function __construct($additionalFeaturesId, $airConditioner, $builtInWardrobe, $elevator, $exterior, $parking, $garden, $pool, $storageRoom, $communityZone, $gym, $floorId) {
        $this->additionalFeaturesId = $additionalFeaturesId;
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
        $this->floorId = $floorId;
    }

        //GETTERS
        function getAdditionalFeaturesId() {return $this->additionalFeaturesId;}
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
        function getFloorId() {return $this->floorId;}



        //SETTERS
        function setAdditionalFeaturesId($additionalFeaturesId) {$this->additionalFeaturesId = $additionalFeaturesId;}
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
        function setFloorId($floorId) {$this->floorId = $floorId;}


    }
?>
