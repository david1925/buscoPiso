<?php    
    class PaymentType {
        var $paymentTypeId;
        var $name;
        var $numberOfUsers;
        
        function __construct($paymentTypeId, $name, $numberOfUsers) {
            $this->paymentTypeId = $paymentTypeId;
            $this->name = $name;
            $this->numberOfUsers = $numberOfUsers;
        }

        function getPaymentTypeId() {return $this->paymentTypeId;}
        function getName() {return $this->name;}
        function getNumberOfUsers() {return $this->numberOfUsers;}

        function setPaymentTypeId($paymentTypeId) {$this->paymentTypeId = $paymentTypeId;}
        function setName($name) {$this->name = $name;}
        function setNumberOfUsers($numberOfUsers) {$this->numberOfUsers = $numberOfUsers;}        
    }
?>
