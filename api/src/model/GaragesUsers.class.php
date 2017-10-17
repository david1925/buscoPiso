<?php    
    class GaragesUsers {
        var $garagesId;
        var $userId;
        
        function __construct($garagesId, $userId) {
            $this->garagesId = $garagesId;
            $this->userId = $userId;
        }
        
        function getGaragesId() {return $this->garagesId;}
        function getUserId() {return $this->userId;}
        
        function setGaragesId($garagesId) {$this->garagesId = $garagesId;}
        function setUserId($userId) {$this->userId = $userId;}
    }
?>
