function GaragesSearchUsers() {
    this.garagesId;
    this.price;
    this.publicationDate;
    this.garagesFeaturesId;
    this.typeOfContractId;
    this.municipalityId;
    this.userId;

    this.construct = function (garagesId, price, publicationDate, garagesFeaturesId, typeOfContractId, municipalityId, userId) {
        this.setGaragesId(garagesId);
        this.setPrice(price);
        this.setPublicationDate(publicationDate);
        this.setGaragesFeaturesId(garagesFeaturesId);
        this.setTypeOfContractId(typeOfContractId);
        this.setMunicipalitiesId(municipalityId);
        this.setUserId(userId);
    }

    this.getGaragesId = function () {return this.garagesId;}
    this.getPrice = function () {return this.price;}
    this.getPublicationDate = function () {return this.publicationDate;}
    this.getGaragesFeaturesId = function () {return this.garagesFeaturesId;}
    this.getTypeOfContractId = function () {return this.typeOfContractId;}
    this.getMunicipalitiesId = function () {return this.municipalityId;}
    this.getGaragesId = function () {return this.garagesId;}
    this.getUserId = function () {return this.userId;}
    
    this.setGaragesId = function (garagesId) {this.garagesId=garagesId;}
    this.setPrice = function (price) {this.price=price;}
    this.setPublicationDate = function (publicationDate) {this.publicationDate=publicationDate;}
    this.setGaragesFeaturesId = function (garagesFeaturesId) {this.garagesFeaturesId=garagesFeaturesId;}
    this.setTypeOfContractId = function (typeOfContractId) {this.typeOfContractId=typeOfContractId;}
    this.setMunicipalitiesId = function (municipalityId) {this.municipalityId=municipalityId;}
    this.setUserId = function (userId) {this.userId=userId;}
}