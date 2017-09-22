<?php
    class Province {

        //PROPERTIES
        var $provinceId;
        var $name;
        var $autonomousCommunityId;

        //CONSTRUCT
        function __construct($provinceId, $name, $autonomousCommunityId) {
            $this->provinceId = $provinceId;
            $this->name = $name;
            $this->autonomousCommunityId = $autonomousCommunityId;
        }

        //GETTERS
        function getProvinceId() {return $this->provinceId;}
        function getName() {return $this->name;}
        function getAutonomousCommunityId() {return $this->autonomousCommunityId;}

        //SETTERS
        function setProvinceId($provinceId) {$this->provinceId = $provinceId;}
        function setName($name) {$this->name = $name;}
        function setAutonomousCommunityId($autonomousCommunityId) {$this->autonomousCommunityId = $autonomousCommunityId;}
    }
?>
