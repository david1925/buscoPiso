<?php    
    class Distribution {
        var $distributionId;
        var $name;
        
        function __construct($distributionId, $name) {
            $this->distributionId = $distributionId;
            $this->name = $name;
        }
        
        function getDistributionId() {return $this->distributionId;}
        function getName() {return $this->name;}
        
        function setDistributionId($distributionId) {$this->distributionId = $distributionId;}
        function setName($name) {$this->name = $name;}
    }
?>