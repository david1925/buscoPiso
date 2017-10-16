<?php    
    class Contract {

        //PROPERTIES
        var $contractId;
        var $tradeName;
        var $taxName;
        var $cifNif;
        var $contactPerson;
        var $email;
        var $domicile;
        var $postalCode;
        var $phone;
        var $fax;
        var $billingEmail;
        var $billingAccountNumber;
        var $businessOfficeId;
        
        function __construct($contractId, $tradeName, $taxName, $cifNif, $contactPerson, $email, $domicile, $postalCode, $phone, $fax, $billingEmail, $billingAccountNumber, $businessOfficeId) {
            $this->contractId = $contractId;
            $this->tradeName = $tradeName;
            $this->taxName = $taxName;
            $this->cifNif = $cifNif;
            $this->contactPerson = $contactPerson;
            $this->email = $email;
            $this->domicile = $domicile;
            $this->postalCode = $postalCode;
            $this->phone = $phone;
            $this->fax = $fax;
            $this->billingEmail = $billingEmail;
            $this->billingAccountNumber = $billingAccountNumber;
            $this->businessOfficeId = $businessOfficeId;
        }

        function getContractId() {return $this->contractId;}
        function getTradeName() {return $this->tradeName;}
        function getTaxName() {return $this->taxName;}
        function getCifNif() {return $this->cifNif;}
        function getContactPerson() {return $this->contactPerson;}
        function getEmail() {return $this->email;}
        function getDomicile() {return $this->domicile;}
        function getPostalCode() {return $this->postalCode;}
        function getPhone() {return $this->phone;}
        function getFax() {return $this->fax;}
        function getBillingEmail() {return $this->billingEmail;}
        function getBillingAccountNumber() {return $this->billingAccountNumber;}
        function getBusinessOfficeId() {return $this->businessOfficeId;}

        function setContractId($contractId) {$this->contractId = $contractId;}
        function setTradeName($tradeName) {$this->tradeName = $tradeName;}
        function setTaxName($taxName) {$this->taxName = $taxName;}
        function setCifNif($cifNif) {$this->cifNif = $cifNif;}
        function setContactPerson($contactPerson) {$this->contactPerson = $contactPerson;}
        function setEmail($email) {$this->email = $email;}
        function setDomicile($domicile) {$this->domicile = $domicile;}
        function setPostalCode($postalCode) {$this->postalCode = $postalCode;}
        function setPhone($phone) {$this->phone = $phone;}
        function setFax($fax) {$this->fax = $fax;}
        function setBillingEmail($billingEmail) {$this->billingEmail = $billingEmail;}
        function setBillingAccountNumber($billingAccountNumber) {$this->billingAccountNumber = $billingAccountNumber;}
        function setBusinessOfficeId($businessOfficeId) {$this->businessOfficeId = $businessOfficeId;}
    }
?>
