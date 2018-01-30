function Garages() {
    this.garagesId;
    this.price;
    this.publicationDate;
    this.motorcycleSeat;
    this.automaticDoor;
    this.security;
    this.typeOfContractId;
    this.municipalitiesId;
    this.roadTypeId;

    this.construct = function (garagesId, price, publicationDate, motorcycleSeat, automaticDoor, security, typeOfContractId, municipalitiesId, roadTypeId) {
        this.setGaragesId(garagesId);
        this.setPrice(price);
        this.setPublicationDate(publicationDate);
        this.setMotorcycleSeat(motorcycleSeat);
        this.setAutomaticDoor(automaticDoor);
        this.setSecurity(security);
        this.setTypeOfContractId(typeOfContractId);
        this.setMunicipalitiesId(municipalitiesId);
        this.setRoadTypeId(roadTypeId);
    }

    this.getGaragesId = function () {return this.garagesId;}
    this.getPrice = function () {return this.price;}
    this.getPublicationDate = function () {return this.publicationDate;}
    this.getMotorcycleSeat = function () {return this.motorcycleSeat;}
    this.getAutomaticDoor = function () {return this.automaticDoor;}
    this.getSecurity = function () {return this.security;}
    this.getTypeOfContractId = function () {return this.typeOfContractId;}
    this.getMunicipalities = function () {return this.municipalitiesId;}
    this.getRoadTypeId = function () {return this.roadTypeId;}

    this.setGaragesId = function (garagesId) {this.garagesId=garagesId;}
    this.setPrice = function (price) {this.price=price;}
    this.setPublicationDate = function (publicationDate) {this.publicationDate=publicationDate;}
    this.setMotorcycleSeat = function (motorcycleSeat) {this.motorcycleSeat=motorcycleSeat;}
    this.setAutomaticDoor = function (automaticDoor) {this.automaticDoor=automaticDoor;}
    this.setSecurity = function (security) {this.security=security;}
    this.setTypeOfContractId = function (typeOfContractId) {this.typeOfContractId=typeOfContractId;}
    this.setMunicipalitiesId = function (municipalitiesId) {this.municipalitiesId=municipalitiesId;}
    this.setRoadTypeId = function (roadTypeId) {this.roadTypeId=roadTypeId;}
}