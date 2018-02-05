function GaragesSearchUsers() {
    this.garagesId;
    this.price;
    this.publicationDate;
    this.motorcycleSeat;
    this.automaticDoor;
    this.security;
    this.typeOfContractId;
    this.municipalityId;
    this.userId;

    this.construct = function (garagesId, price, publicationDate, motorcycleSeat, automaticDoor, security, typeOfContractId, municipalityId, userId) {
        this.setGaragesId(garagesId);
        this.setPrice(price);
        this.setPublicationDate(publicationDate);
        this.setMotorcycleSeat(motorcycleSeat);
        this.setAutomaticDoor(automaticDoor);
        this.setSecurity(security);
        this.setTypeOfContractId(typeOfContractId);
        this.setMunicipalitiesId(municipalityId);
        this.setUserId(userId);
    }

    this.getGaragesId = function () {return this.garagesId;}
    this.getPrice = function () {return this.price;}
    this.getPublicationDate = function () {return this.publicationDate;}
    this.getMotorcycleSeat = function () {return this.motorcycleSeat;}
    this.getAutomaticDoor = function () {return this.automaticDoor;}
    this.getSecurity = function () {return this.security;}
    this.getTypeOfContractId = function () {return this.typeOfContractId;}
    this.getMunicipalitiesId = function () {return this.municipalityId;}
    this.getUserId = function () {return this.userId;}
    
    this.setGaragesId = function (garagesId) {this.garagesId=garagesId;}
    this.setPrice = function (price) {this.price=price;}
    this.setPublicationDate = function (publicationDate) {this.publicationDate=publicationDate;}
    this.setMotorcycleSeat = function (motorcycleSeat) {this.motorcycleSeat=motorcycleSeat;}
    this.setAutomaticDoor = function (automaticDoor) {this.automaticDoor=automaticDoor;}
    this.setSecurity = function (security) {this.security=security;}
    this.setTypeOfContractId = function (typeOfContractId) {this.typeOfContractId=typeOfContractId;}
    this.setMunicipalitiesId = function (municipalityId) {this.municipalityId=municipalityId;}
    this.setUserId = function (userId) {this.userId=userId;}
}