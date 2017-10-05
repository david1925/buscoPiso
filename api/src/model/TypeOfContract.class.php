<?php
    class TypeOfContract {

        //PROPERTIES
        var $typeOfContractId;
        var $name;

        //CONSTRUCT
        function __construct($typeOfContractId, $name) {
            $this->typeOfContractId = $typeOfContractId;
            $this->name = $name;
        }

        //GETTERS
        function getTypeOfContractId() {return $this->typeOfContractId;}
        function getName() {return $this->name;}

        //SETTERS
        function setTypeOfContractId($typeOfContractId) {$this->typeOfContractId = $typeOfContractId;}
        function setName($name) {$this->name = $name;}
    }
?>
