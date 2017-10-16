<?php
    class Countries {

        //PROPERTIES
        var $countriesId;
        var $name

        //CONSTRUCT
        function __construct($countriesId, $name) {
            $this->countriesId = $countriesId;
            $this->name = $name;
        }

        //GETTERS
        function getCountriesId() {return $this->countriesId;}
        function getName() {return $this->name;}

        //SETTERS
        function setCountriesId($countriesId) {$this->countriesId = $countriesId;}
        function setName($name) {$this->name = $name;}
    }
?>
