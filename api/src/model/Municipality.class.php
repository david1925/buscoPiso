<?php
    class Municipality {

        //PROPERTIES
        var $municipalityId;
        var $provinceId;
        var $municipalityCode;
        var $dc;
        var $name;

        //CONSTRUCT
        function __construct($municipalityId, $provinceId, $municipalityCode, $dc, $name) {
            $this->municipalityId = $municipalityId;
            $this->provinceId = $provinceId;
            $this->municipalityCode = $municipalityCode;
            $this->dc = $dc;
            $this->name = $name;
        }

        //GETTERS
        function getMunicipalityId() {return $this->municipalityId;}
        function getProvinceId() {return $this->provinceId;}
        function getMunicipalityCode() {return $this->municipalityCode;}
        function getDc() {return $this->dc;}
        function getName() {return $this->name;}

        //SETTERS
        function setMunicipalityId($municipalityId) {$this->municipalityId = $municipalityId;}
        function setProvinceId($provinceId) {$this->provinceId = $provinceId;}
        function setMunicipalityCode($municipalityCode) {$this->municipalityCode = $municipalityCode;}
        function setDc($dc) {$this->dc = $dc;}
        function setName($name) {$this->name = $name;}
    }
?>
