function Floors() {
    this.floorsId;
    this.price;
    this.sqareMeters;
    this.bedrooms;
    this.publicationDate;
    this.address;
    this.municipalitiesId;
    this.typeOfContractId;
    this.floorConditionsId;
    this.roadTypesId;
    
    this.construct = function (floorsId, price, sqareMeters, bedrooms, publicationDate, address,municipalitiesId, typeOfContractId, floorConditionsId, roadTypesId) {
        this.setFloorsId(floorsId);
        this.setPrice(price);
        this.setSquareMeters(sqareMeters);
        this.setBedrooms(bedrooms);
        this.setPublicationDate(publicationDate);
        this.setAddress(address);
        this.setMunicipalitiesId(municipalitiesId);
        this.setTypeOfContractId(typeOfContractId);
        this.setFloorConditionsId(floorConditionsId);
        this.setRoadTypesId(roadTypesId);        
    }

    this.getFloorsId = function () {return this.floorsId;}
    this.getPrice = function () {return this.price;}
    this.getSquareMeters = function () {return this.sqareMeters;}
    this.getBedrooms = function () {return this.bedrooms;}
    this.getPublicationDate = function () {return this.publicationDate;}
    this.getAddress = function () {return this.address;}
    this.getMunicipalitiesId = function () {return this.municipalitiesId;}
    this.getTypeOfContractId = function () {return this.typeOfContractId;}
    this.getFloorConditionsId = function () {return this.floorConditionsId;}
    this.getRoadTypesId = function () {return this.roadTypesId;}

    this.setFloorConditionsId = function (floorConditionsId) {this.floorConditionsId=floorConditionsId;}
    this.setPrice = function (price) {this.price=price;}
    this.setSquareMeters = function (sqareMeters) {this.sqareMeters=sqareMeters;}
    this.setBedrooms = function (bedrooms) {this.bedrooms=bedrooms;}
    this.setPublicationDate = function (publicationDate) {this.publicationDate=publicationDate;}
    this.setAddress = function (address) {this.address=address;}
    this.setMunicipalitiesId = function (municipalitiesId) {this.municipalitiesId=municipalitiesId;}
    this.setTypeOfContractId = function (typeOfContractId) {this.typeOfContractId=typeOfContractId;}
    this.setFloorConditionsId = function (floorConditionsId) {this.floorConditionsId=floorConditionsId;}
    this.setRoadTypesId = function (roadTypesId) {this.roadTypesId=roadTypesId;}
}