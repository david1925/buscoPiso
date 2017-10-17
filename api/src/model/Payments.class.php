<?php    
    class Payments {
        var $paymentId;
        var $paymentDate;
        var $paymentDateOfExpiry;
        var $price;
        var $iva;
        var $userId;
        var $businessOfficeId;
        var $paymentTypeId;
        var $paymentMethodsId;
        
        function __construct($paymentId, $paymentDate, $paymentDateOfExpiry, $price, $iva, $userId, $businessOfficeId, $paymentTypeId, $paymentMethodsId) {
            $this->paymentId = $paymentId;
            $this->paymentDate = $paymentDate;
            $this->paymentDateOfExpiry = $paymentDateOfExpiry;
            $this->price = $price;
            $this->iva = $iva;
            $this->userId = $userId;
            $this->businessOfficeId = $businessOfficeId;
            $this->paymentTypeId = $paymentTypeId;
            $this->paymentMethodsId = $paymentMethodsId;
        }
        
        function getPaymentId() {return $this->paymentId;}
        function getPaymentDate() {return $this->paymentDate;}
        function getPaymentDateOfExpiry() {return $this->paymentDateOfExpiry;}
        function getPrice() {return $this->price;}
        function getIva() {return $this->iva;}
        function getUserId() {return $this->userId;}
        function getBusinessOfficeId() {return $this->businessOfficeId;}
        function getPaymentTypeId() {return $this->paymentTypeId;}
        function getPaymentMethodsId() {return $this->paymentMethodsId;}
        
        function setPaymentId($paymentId) {$this->paymentId = $paymentId;}
        function setPaymentDate($paymentDate) {$this->paymentDate = $paymentDate;}
        function setPaymentDateOfExpiry($paymentDateOfExpiry) {$this->paymentDateOfExpiry = $paymentDateOfExpiry;}
        function setPrice($price) {$this->price = $price;}
        function setIva($iva) {$this->iva = $iva;}
        function setUserId($userId) {$this->userId = $userId;}
        function setBusinessOfficeId($businessOfficeId) {$this->businessOfficeId = $businessOfficeId;}
        function setPaymentTypeId($paymentTypeId) {$this->paymentTypeId = $paymentTypeId;}
        function setPaymentMethodsId($paymentMethodsId) {$this->paymentMethodsId = $paymentMethodsId;}
    }
?>
