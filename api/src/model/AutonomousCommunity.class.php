<?php
    class AutonomousComunity {

        //PROPERTIES
        var $autonomuousComunityId;
        var $name;
        var $countryId;

        //CONSTRUCT
        function __construct($autonomuousComunityId, $name, $countryId) {
            $this->autonomuousComunityId = $autonomuousComunityId;
            $this->name = $name;
            $this->countryId = $countryId;
        }

        //GETTERS
        function getAutonomousComunityId() {return $this->autonomuousComunityId;}
        function getName() {return $this->name;}
        function getCountryId() {return $this->countryId;}

        //SETTERS
        function setAutonomuousComunityId($autonomuousComunityId) {$this->autonomuousComunityId = $autonomuousComunityId;}
        function setName($name) {$this->name = $name;}
        function setCountryId($countryId) {$this->countryId = $countryId;}
    }
?>
