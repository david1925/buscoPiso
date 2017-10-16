<?php
    class BusinessOffice {

        //PROPERTIES
        var $businessOfficeId;
        var $tradeName;
        var $logo;
        var $areaOfAction;
        var $officeDescription;
        var $officePhoto;
        var $officePhoto2;
        var $officePhoto3;
        var $address;
        var $municipalitiesId;

        //CONSTRUCT
        function __construct($businessOfficeId, $tradeName, $logo, $areaOfAction, $officeDescription, $officePhoto, $officePhoto2, $officePhoto3, $address, $municipalitiesId) {
            $this->businessOfficeId = $businessOfficeId;
            $this->tradeName = $tradeName;
            $this->logo = $logo;
            $this->areaOfAction = $areaOfAction;
            $this->officeDescription = $officeDescription;
            $this->officePhoto = $officePhoto;
            $this->officePhoto2 = $officePhoto2;
            $this->officePhoto3 = $officePhoto3;
            $this->address = $address;
            $this->municipalitiesId = $municipalitiesId;
        }

        //GETTERS
        function getBusinessOfficeId() {return $this->businessOfficeId;}
        function getTradeName() {return $this->tradeName;}
        function getLogo() {return $this->logo;}
        function getAreaOfAction() {return $this->areaOfAction;}
        function getOfficeDescription() {return $this->description;}
        function getOfficePhoto() {return $this->officePhoto;}
        function getOfficePhoto2() {return $this->officePhoto2;}
        function getOfficePhoto3() {return $this->officePhoto3;}
        function getAddress() {return $this->address;}
        function getMunicipalitiesId() {return $this->municipalitiesId;}

        //SETTERS
        function setBusinessOfficeId($businessOfficeId) {$this->businessOfficeId = $businessOfficeId;}
        function setTadreName($tradeName) {$this->tradeName = $tradeName;}
        function setLogo($logo) {$this->logo = $logo;}
        function setAreaOfAction($areaOfAction) {$this->areaOfAction = $areaOfAction;}
        function setOfficeDescription($officeDescription) {$this->officeDescription = $officeDescription;}
        function setOfficePhoto($officePhoto) {$this->officePhoto = $officePhoto;}
        function setOfficePhoto2($officePhoto2) {$this->officePhoto2 = $officePhoto2;}
        function setOfficePhoto3($officePhoto3) {$this->officePhoto3 = $officePhoto3;}
        function setAddress($address) {$this->address = $address;}
        function setMunicipalitiesId($municipalitiesId) {$this->municipalitiesId = $municipalitiesId;}
    }
?>
