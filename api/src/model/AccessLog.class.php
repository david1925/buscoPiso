<?php
    class AccessLog {

        //PROPERTIES
        var $accessId;
        var $date;
        var $ip;
        var $class;
        var $method;

        //CONSTRUCT
        function __construct($accessId, $date, $ip, $class, $method) {
            $this->accessId = $accessId;
            $this->date = $date;
            $this->ip = $ip;        
            $this->class = $class;
            $this->method = $method;

        }

        //GETTERS
        function getAccessId() {return $this->accessId;}
        function getDate() {return $this->date;}
        function getIp() {return $this->ip;}
        function getClass() {return $this->class;}
        function getMethod() {return $this->method;}


        //SETTERS
        function setAccessId($accessId) {$this->accessId = $accessId;}
        function setDate($date) {$this->date = $date;}
        function setIp($ip) {$this->ip = $ip;}
        function setClass($class) {$this->class = $class;}
        function setMethod($method) {$this->method = $method;}

    }
?>
