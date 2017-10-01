<?php
    class ErrorLog {

        //PROPERTIES
        var $errorId;
        var $date;
        var $error;

        //CONSTRUCT
        function __construct($errorId, $date, $error) {
            $this->errorId = $errorId;
            $this->date = $date;
            $this->error = $error;

        }

        //GETTERS
        function getErrorId() {return $this->errorId;}
        function getDate() {return $this->date;}
        function getError() {return $this->error;}


        //SETTERS
        function setErrorId($errorId) {$this->errorId = $errorId;}
        function setDate($date) {$this->date = $date;}
        function setError($error) {$this->error = $error;}

    }
?>
