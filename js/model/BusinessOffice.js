function BusinessOffice() {
    this.businessOfficeId;
    this.tradeName;
    this.logo;
    this.areaOfAction;
    this.officeDescription;
    this.officePhoto;
    this.officePhoto2;
    this.officePhoto3;
    this.address;
    this.municipalitiesId;
    
    this.construct = function (businessOfficeId, tradeName, logo, areaOfAction, officeDescription, officePhoto, officePhoto2, officePhoto3, address, municipalitiesId) {
        this.setBusinessOfficeId(businessOfficeId);
        this.setTradeName(tradeName);
        this.setLogo(logo);
        this.setAreaOfAction(areaOfAction);
        this.setOfficeDescription(officeDescription);
        this.setOfficePhoto(officePhoto);
        this.setOfficePhoto2(officePhoto2);
        this.setOfficePhoto3(officePhoto3);
        this.setAddress(address);
        this.setMunicipalitiesId(municipalitiesId);
    }

    this.getBusinessOfficeId = function () {return this.businessOfficeId;}
    this.getTradeName = function () {return this.tradeName;}
    this.getLogo = function () {return this.logo;}
    this.getAreaOfAction = function () {return this.areaOfAction;}
    this.getOfficeDescription = function () {return this.officeDescription;}
    this.getOfficePhoto = function () {return this.officePhoto;}
    this.getOfficePhoto2 = function () {return this.officePhoto2;}
    this.getOfficePhoto3 = function () {return this.officePhoto3;}
    this.getAddress = function () {return this.address;}
    this.getMunicipalities = function () {return this.municipalitiesId;}

    this.setBusinessOfficeId = function (businessOfficeId) {this.businessOfficeId=businessOfficeId;}
    this.setTradeName = function (tradeName) {this.tradeName=tradeName;}
    this.setLogo = function (logo) {this.logo=localStorage;}
    this.setAreaOfAction = function (areaOfAction) {this.areaOfAction=areaOfAction;}
    this.setOfficeDescription = function (officeDescription) {this.officeDescription=officeDescription;}
    this.setOfficePhoto = function (officePhoto) {this.officePhoto=officePhoto;}
    this.setOfficePhoto2 = function (officePhoto2) {this.officePhoto2=officePhoto2;}
    this.setOfficePhoto3 = function (officePhoto3) {this.officePhoto3=officePhoto3;}
    this.setAddress = function (address) {this.address=address;}
    this.setMunicipalitiesId = function (municipalitiesId) {this.municipalitiesId=municipalitiesId;}
}