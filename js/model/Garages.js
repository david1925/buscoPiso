function Garages() {
    this.garagesId;
    this.price;
    this.publicationDate;
    this.garagesFeaturesId;
    this.typeOfContractId;
    this.municipalitiesId;
    this.roadTypeId;

    this.construct = function (garagesId, price, publicationDate, garagesFeaturesId, typeOfContractId, municipalitiesId, roadTypeId) {
        this.setGaragesId(garagesId);
        this.setPrice(price);
        this.setPublicationDate(publicationDate);
        this.setGaragesFeaturedId(garagesFeaturesId);
        this.setTypeOfContractId(typeOfContractId);
        this.setMunicipalitiesId(municipalitiesId);
        this.setRoadTypeId(roadTypeId);
    }

    this.getGaragesId = function () {return this.garagesId;}
    this.getPrice = function () {return this.price;}
    this.getPublicationDate = function () {return this.publicationDate;}
    this.getGaragesFeaturesId = function () {return this.garagesFeaturesId;}
    this.getTypeOfContractId = function () {return this.typeOfContractId;}
    this.getMunicipalities = function () {return this.municipalitiesId;}
    this.getRoadTypeId = function () {return this.roadTypeId;}

    this.setGaragesId = function (garagesId) {this.garagesId=garagesId;}
    this.setPrice = function (price) {this.price=price;}
    this.setPublicationDate = function (publicationDate) {this.publicationDate=publicationDate;}
    this.setGaragesFeaturedId = function (garagesFeaturesId) {this.garagesFeaturesId=garagesFeaturesId;}
    this.setTypeOfContractId = function (typeOfContractId) {this.typeOfContractId=typeOfContractId;}
    this.setMunicipalitiesId = function (municipalitiesId) {this.municipalitiesId=municipalitiesId;}
    this.setRoadTypeId = function (roadTypeId) {this.roadTypeId=roadTypeId;}
}