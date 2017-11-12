<?php    
    class OfficesUsers {
        var $userId;
        var $officeId;
        
        function __construct($userId, $officeId) {
            $this->userId = $userId;
            $this->officeId = $officeId;
        }

        function getUserId() {return $this->userId;}
        function getOfficeId() {return $this->officeId;}
        
        function setUserId($userId) {$this->userId = $userId;}
        function setOfficeId($officeId) {$this->officeId = $officeId;}
    }
?>
