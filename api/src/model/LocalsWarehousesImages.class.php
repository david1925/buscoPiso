<?php    
    class LocalsWarehousesImages {
        var $localWarehouseImagesId;
        var $name;
        var $localWarehouseId;
        
        function __construct($localWarehouseImagesId, $name, $localWarehouseId) {
            $this->localWarehouseImagesId = $localWarehouseImagesId;
            $this->name = $name;
            $this->localWarehouseId = $localWarehouseId;
        }

        function getLocalWarehouseImagesId() {return $this->localWarehouseImagesId;}
        function getName() {return $this->name;}
        function getLocalWarehouseId() {return $this->localWarehouseId;}
        
        function setLocalWarehouseImagesId($localWarehouseImagesId) {$this->localWarehouseImagesId = $localWarehouseImagesId;}
        function setName($name) {$this->name = $name;}
        function setLocalWarehouseId($localWarehouseId) {$this->localWarehouseId = $localWarehouseId;}
    }
?>
