<?php
    class AdditionalFeaturesUsers {

        //PROPERTIES
        var $additionalFeaturesUsersId;
        var $description;
        var $courses;
        var $status;
        var $workPosition;

        //CONSTRUCT
        function __construct($additionalFeaturesUsersId, $description, $courses, $status, $workPosition) {
            $this->additionalFeaturesUsersId = $additionalFeaturesUsersId;
            $this->description = $description;
            $this->courses = $courses;
            $this->status = $status;
            $this->workPosition = $workPosition;
        }

        //GETTERS
        function getAdditionalFeaturesUsersId() {return $this->additionalFeaturesUsers;}
        function getDescription() {return $this->description;}
        function getCourses() {return $this->courses;}
        function getStatus() {return $this->status;}
        function getWorkPosition() {return $this->workPosition;}

        //SETTERS
        function setAdditionFeaturesUsersId($additionFeaturesUsersId) {$this->additionFeaturesUsersId = $additionFeaturesUsersId;}
        function setDescription($description) {$this->description = $description;}
        function setCourses($courses) {$this->courses = $courses;}
        function setStatus($status) {$this->status = $status;}
        function setWorkPosition($workPosition) {$this->workPosition = $workPosition;}
    }
?>
