<?php
    class Groups {

        //PROPERTIES
        var $groupId;
        var $name;

        //CONSTRUCT
        function __construct($groupId, $name) {
            $this->groupId = $groupId;
            $this->name = $name;
        }

        //GETTERS
        function getGroupId() {return $this->groupId;}
        function getName() {return $this->name;}

        //SETTERS
        function setGroupId($groupId) {$this->groupId = $groupId;}
        function setName($name) {$this->name = $name;}
    }
?>