<?php    
    class LandsUsers {
        var $landId;
        var $userId;
        
        function __construct($landId, $userId) {
            $this->landId = $landId;
            $this->userId = $userId;
        }

        function getLandId() {return $this->landId;}
        function getUserId() {return $this->userId;}
        
        function setLandId($landId) {$this->landId = $landId;}
        function setUserId($userId) {$this->userId = $userId;}        
    }
?>