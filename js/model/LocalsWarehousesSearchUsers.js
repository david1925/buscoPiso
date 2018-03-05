function LocalsWarehousesSearchUsers() {
    this.localWarehouseId;
    this.price;
    this.squareMeters;
    this.publicationDate;
    this.airConditioner;
    this.heating;
    this.corner;
    this.smokeOutlet;
    this.locationId;
    this.municipalitiesId;
    this.typeOfContractId;
    this.provincesId;
    this.userId;

    this.construct = function (localWarehouseId, price, squareMeters, publicationDate, airConditioner, heating, corner, smokeOutlet, locationId, municipalitiesId, typeOfContractId, provincesId, userId) {
        this.setLocalWarehouseId(localWarehouseId);
        this.setPrice(price);
        this.setSquareMeters(squareMeters);
        this.setPublicationDate(publicationDate);
        this.setAirConditioner(airConditioner);
        this.setHeating(heating);
        this.setCorner(corner);
        this.setSmokeOutlet(smokeOutlet);
        this.setLocationId(locationId);
        this.setMunicipalitiesId(municipalitiesId);
        this.setTypeOfContractId(typeOfContractId);
        this.setProvincesId(provincesId);
        this.setUserId(userId);
    }

    this.getLocalWarehouseId = function () {return this.localWarehouseId;}
    this.getPrice = function () {return this.price;}
    this.getSquareMeters = function () {return this.squareMeters;}
    this.getPublicationDate = function () {return this.publicationDate;}
    this.getAirConditioner = function () {return this.airConditioner;}
    this.getHeating = function () {return this.heating;}
    this.getCorner = function () {return this.corner;}
    this.getSmokeOutlet = function () {return this.smokeOutlet;}
    this.getLocationId = function () {return this.locationId;}
    this.getMunicipalitiesId = function () {return this.municipalitiesId;}
    this.getTypeOfContractId = function () {return this.typeOfContractId;}
    this.getProvincesId = function () {return this.provincesId;}
    this.getUserId = function () {return this.userId;}

    this.setLocalWarehouseId = function (localWarehouseId) {this.localWarehouseId=localWarehouseId;}
    this.setPrice = function (price) {this.price=price;}
    this.setSquareMeters = function (squareMeters) {this.squareMeters=squareMeters;}
    this.setPublicationDate = function (publicationDate) {this.publicationDate=publicationDate;}
    this.setAirConditioner = function (airConditioner) {this.airConditioner=airConditioner;}
    this.setHeating = function (heating) {this.heating=heating;}
    this.setCorner = function (corner) {this.corner=corner;}
    this.setSmokeOutlet = function (smokeOutlet) {this.smokeOutlet=smokeOutlet;}
    this.setLocationId = function (locationId) {this.locationId=locationId;}
    this.setMunicipalitiesId = function (municipalitiesId) {this.municipalitiesId=municipalitiesId;}
    this.setTypeOfContractId = function (typeOfContractId) {this.typeOfContractId=typeOfContractId;}
    this.setProvincesId = function (provincesId) {this.provincesId=provincesId;}
    this.setUserId = function (userId) {this.userId=userId;}
}