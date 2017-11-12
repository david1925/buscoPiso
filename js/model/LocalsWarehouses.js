function LocalsWarehouses() {
    this.localWarehouseId;
    this.price;
    this.squareMeters;
    this.publicationDate;
    this.locationId;
    this.localWarehouseFeaturesId;
    this.municipalitiesId;
    this.typeOfContractId;
    this.roadTypeId;

    this.construct = function (localWarehouseId, price, squareMeters, publicationDate, locationId, localWarehouseFeaturesId, municipalitiesId, typeOfContractId, roadTypeId) {
        this.setLocalWarehouseId(localWarehouseId);
        this.setPrice(price);
        this.setSquareMeters(squareMeters);
        this.setPublicationDate(publicationDate);
        this.setLocationId(locationId);
        this.setLocalWarehouseFeaturesId(localWarehouseFeaturesId);
        this.setMunicipalitiesId(municipalitiesId);
        this.setTypeOfContractId(typeOfContractId);
        this.setRoadTypeId(squareMeters);
    }

    this.getLocalWarehouseId = function () {return this.localWarehouseId;}
    this.getPrice = function () {return this.price;}
    this.getSquareMeters = function () {return this.squareMeters;}    
    this.getPublicationDate = function () {return this.publicationDate;}
    this.getLocationId = function () {return this.locationId;}
    this.getLocalWarehouseFeaturesId = function () {return this.localWarehouseFeaturesId;}
    this.getMunicipalitiesId = function () {return this.municipalitiesId;}
    this.getTypeOfContractId = function () {return this.typeOfContractId;}
    this.getRoadTypeId = function () {return this.roadTypeId;}
    
    this.setLocalWarehouseId = function (localWarehouseId) {this.localWarehouseId=localWarehouseId;}
    this.setPrice = function (price) {this.price=price;}
    this.setSquareMeters = function (squareMeters) {this.squareMeters=squareMeters;}
    this.setPublicationDate = function (publicationDate) {this.publicationDate=publicationDate;}
    this.setLocationId = function (locationId) {this.locationId=locationId;}
    this.setLocalWarehouseFeaturesId = function (localWarehouseFeaturesId) {this.localWarehouseFeaturesId=localWarehouseFeaturesId;}
    this.setMunicipalitiesId = function (municipalitiesId) {this.municipalitiesId=municipalitiesId;}
    this.setTypeOfContractId = function (typeOfContractId) {this.typeOfContractId=typeOfContractId;}
    this.setRoadTypeId = function (roadTypeId) {this.roadTypeId=roadTypeId;}
}