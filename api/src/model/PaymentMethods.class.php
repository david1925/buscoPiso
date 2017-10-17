<?php    
    class PaymentMethods {
        var $paymentMethodId;
        var $name;
        
        function __construct($paymentMethodId, $name) {
            $this->paymentMethodId = $paymentMethodId;
            $this->name = $name;
        }

        function getPaymentMethodId() {return $this->paymentMethodId;}
        function getName() {return $this->name;}
        
        function setPaymentMethodId($paymentMethodId) {$this->paymentMethodId = $paymentMethodId;}
        function setName($name) {$this->name = $name;}
    }
?>