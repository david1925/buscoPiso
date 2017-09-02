<?php
    class Municipality {

        //PROPERTIES
        var $municipalityId;
        var $dc;
        var $name;

        //CONSTRUCT
        function __construct($municipalityId, $dc, $name) {
            $this->$municipalityId = $municipalityId;
            $this->dc = $dc;
            $this->name = $name;
        }

        //GETTERS
        function getMunicipalityId() {return $this->municipalityId;}
        function getDc() {return $this->dc;}
        function getName() {return $this->name;}

        //SETTERS
        function setUserId($municipalityId) {$this->municipalityId = $municipalityId;}
        function setDc($dc) {$this->dc = $dc;}
        function setName($name) {$this->name = $name;}
    }
?>
