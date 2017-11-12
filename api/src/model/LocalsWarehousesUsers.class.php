<?php    
    class LocalsWarehousesUsers {
        var $localWarehouseId;
        var $userId;
        
        function __construct($localWarehouseId, $userId) {
            $this->localWarehouseId = $localWarehouseId;
            $this->userId = $userId;
        }

        function getLocalWarehouseId() {return $this->localWarehouseId;}
        function getUserId() {return $this->userId;}

        function setLocalWarehouseId($localWarehouseId) {$this->localWarehouseId = $localWarehouseId;}
        function setUserId($userId) {$this->userId = $userId;}
    }
?>
