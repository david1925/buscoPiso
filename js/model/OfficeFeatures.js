function OfficeFeatures() {
    this.officeFeaturesId;
    this.hotWater;
    this.airConditioner;
    this.elevator;
    this.heating;
    this.exterior;
    this.garage;
    this.security;

    this.construct = function (officeFeaturesId, hotWater, airConditioner, elevator, heating, exterior, garage, security) {
        this.setOfficeFeaturesId(officeFeaturesId);
        this.setHotWater(hotWater);
        this.setAirConditioner(airConditioner);
        this.setElevator(elevator);
        this.setHeating(heating);
        this.setExterior(exterior);
        this.setGarage(garage);
        this.setSecurity(security);
    }

    this.getOfficeFeaturesId = function () {return this.officeFeaturesId;}
    this.getHotWater = function () {return this.hotWater;}
    this.getAirConditioner = function () {return this.airConditioner;}
    this.getElevator = function () {return this.elevator;}
    this.getHeating = function () {return this.heating;}
    this.getExterior= function () {return this.exterior;}
    this.getGarage = function () {return this.garage;}
    this.getSecurity = function () {return this.security;}

    this.setOfficeFeaturesId = function (officeFeaturesId) {this.officeFeaturesId=officeFeaturesId;}
    this.setHotWater = function (hotWater) {this.hotWater=hotWater;}
    this.setAirConditioner = function (airConditioner) {this.airConditioner=airConditioner;}
    this.setElevator = function (elevator) {this.elevator=elevator;}
    this.setHeating = function (heating) {this.heating=heating;}
    this.setExterior = function (exterior) {this.exterior=exterior;}
    this.setGarage = function (garage) {this.garage=garage;}
    this.setSecurity = function (security) {this.security=security;}    
}