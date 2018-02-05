function OfficesSearchUsers() {
    this.officeSearchUsersId;
    this.price;
    this.squareMeters;
    this.publicationDate;
    this.address;
    this.local;
    this.hotWater;
    this.airConditioner;
    this.elevator;
    this.heating;
    this.exterior;
    this.garage;
    this.security;

    this.construct = function (officeSearchUsersId, price, squareMeters, publicationDate, address, local, warehouse, hotWater, airConditioner, elevator, heating, exterior, garage, security) {
        this.setOfficeSearchUsers(officeSearchUsersId);
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
        this.setExterior(exterior);
        this.setGarage(garage);
        this.setSecurity(security);
    }

    this.getOfficeSearchUsersId = function () {return this.officeSearchUsersId;}
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

    this.setOfficeSearchUsers = function (officeSearchUsersId) {this.officeSearchUsersId=officeSearchUsersId;}
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
}