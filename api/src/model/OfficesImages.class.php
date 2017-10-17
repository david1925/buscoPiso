<?php    
    class OfficesImages {
        var $officeImagesId;
        var $price;
        var $officeId;
        
        function __construct($officeImagesId, $price, $officeId) {
            $this->officeImagesId = $officeImagesId;
            $this->price = $price;
            $this->officeId = $officeId;
        }

        function getOfficeImagesId() {return $this->officeImagesId;}
        function getPrice() {return $this->price;}
        function getOfficeId() {return $this->officeId;}
        
        function setOfficeImagesId($officeImagesId) {$this->officeImagesId = $officeImagesId;}
        function setPrice($price) {$this->price = $price;}
        function setOfficeId($officeId) {$this->officeId = $officeId;}
    }
?>