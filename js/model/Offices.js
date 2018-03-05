function Offices() {
    this.officeId;
    this.price;
    this.squareMeters;
    this.publicationDate;
    this.address;
    this.local;
    this.warehouse;
    this.hotWater;
    this.airConditioner;
    this.elevator;
    this.heating;
    this.exterior;
    this.garage;
    this.security;
    this.distributionId;
    this.typeOfBuildingId;
    this.municipalitiesId;
    this.typeOfContractId;
    this.roadTypesId;

    this.construct = function (officeId, price, squareMeters, publicationDate, address, local, warehouse, hotWater, airConditioner, elevator, heating, exterior, garage, security, distributionId, typeOfBuildingId, municipalitiesId, typeOfContractId, roadTypesId) {
        this.setOfficeId(officeId);
        this.setPrice(price);
        this.setSquareMeters(squareMeters);
        this.setPublicationDate(publicationDate);
        this.setAddress(address);
        this.setLocal(local);
        this.setWarehouse(warehouse);
        this.setHotWater(hotWater);
        this.setAirConditioner(airConditioner);
        this.setElevator(elevator);
        this.setHeating(heating);
        this.exterior(exterior);
        this.setGarage(garage);
        this.setSecurity(security);
        this.setDistributionId(distributionId);
        this.setTypeOfBuildingId(typeOfBuildingId);
        this.setMunicipalitiesId(municipalitiesId);
        this.setTypeOfContractId(typeOfContractId);
        this.setRoadTypesId(roadTypesId);
    }

    this.getOfficeId = function () {return this.officeId;}
    this.getPrice = function () {return this.price;}
    this.getSquareMeters = function () {return this.squareMeters;}
    this.getPublicationDate = function () {return this.publicationDate;}
    this.getAddress = function () {return this.address;}
    this.getLocal = function () {return this.local;}
    this.getWarehouse = function () {return this.warehouse;}
    this.getHotWater = function () {return this.hotWater;}
    this.getAirConditioner = function () {return this.airConditioner;}
    this.getElevator = function () {return this.elevator;}
    this.getHeating = function () {return this.heating;}
    this.getExterior = function () {return this.exterior;}
    this.getGarage = function () {return this.garage;}
    this.getSecurity = function () {return this.security;}
    this.getDistributionId = function () {return this.distributionId;}
    this.getTypeOfBuildingId = function () {return this.typeOfBuildingId;}
    this.getMunicipalitiesId = function () {return this.municipalitiesId;}
    this.getTypeOfContractId = function () {return this.typeOfContractId;}
    this.getRoadTypesId = function () {return this.roadTypesId;}

    this.setOfficeId = function (officeId) {this.officeId=officeId;}
    this.setPrice = function (price) {this.price=price;}
    this.setSquareMeters = function (squareMeters) {this.squareMeters=squareMeters;}
    this.setPublicationDate = function (publicationDate) {this.publicationDate=publicationDate;}
    this.setAddress = function (address) {this.address=address;}
    this.setLocal = function (local) {this.local=local;}
    this.setWarehouse = function (warehouse) {this.warehouse=warehouse;}
    this.setHotWater = function (hotWater) {this.hotWater=hotWater;}
    this.setAirConditioner = function (airConditioner) {this.airConditioner=airConditioner;}
    this.setElevator = function (elevator) {this.elevator=elevator;}
    this.setHeating = function (heating) {this.heating=heating;}
    this.setExterior = function (exterior) {this.exterior=exterior;}
    this.setGarage = function (garage) {this.garage=garage;}
    this.setSecurity = function (security) {this.security=security;}
    this.setDistributionId = function (distributionId) {this.distributionId=distributionId;}
    this.setTypeOfBuildingId = function (typeOfBuildingId) {this.typeOfBuildingId=typeOfBuildingId;}
    this.setMunicipalitiesId = function (municipalitiesId) {this.municipalitiesId=municipalitiesId;}
    this.setTypeOfContractId = function (typeOfContractId) {this.typeOfContractId=typeOfContractId;}
    this.setRoadTypesId = function (roadTypesId) {this.roadTypesId=roadTypesId;}
}