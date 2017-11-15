<?php
    class ErrorLog {

        //PROPERTIES
        var $errorId;
        var $date;
        var $error;
        var $class;
        var $function;

        //CONSTRUCT
        function __construct($errorId, $date, $error, $class, $function) {
            $this->errorId = $errorId;
            $this->date = $date;
            $this->error = $error;
            $this->class = $class;
            $this->function = $function;

        }

        //GETTERS
        function getErrorId() {return $this->errorId;}
        function getDate() {return $this->date;}
        function getError() {return $this->error;}
        function getClass() {return $this->class;}
        function getFunction() {return $this->function;}


        //SETTERS
        function setErrorId($errorId) {$this->errorId = $errorId;}
        function setDate($date) {$this->date = $date;}
        function setError($error) {$this->error = $error;}
        function setClass($class) {$this->class = $class;}
        function setFunction($function) {$this->function = $function;}

    }
?>
