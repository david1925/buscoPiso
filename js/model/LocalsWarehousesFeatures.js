function LocalsWarehousesFeatures() {
    this.localWarehouseFeaturesId;
    this.airConditioner;
    this.heating;
    this.corner;
    this.smokeOutlet;

    this.construct = function (localWarehouseFeaturesId, airConditioner, heating, corner, smokeOutlet) {
        this.setLocalWarehouseFeaturesId(localWarehouseFeaturesId);
        this.setAirConditioner(airConditioner);
        this.setHeating(heating);
        this.setCorner(corner);
        this.setSmokeOutlet(smokeOutlet);
    }

    this.getLocalWarehouseFeatures = function () {return this.localWarehouseFeaturesId;}
    this.getAirConditioner = function () {return this.airConditioner;}
    this.getHeating = function () {return this.heating;}
    this.getCorner = function () {return this.corner;}
    this.getSmokeOutlet = function () {return this.smokeOutlet;}

    this.setLocalWarehouseFeaturesId = function (localWarehouseFeaturesId) {this.localWarehouseFeaturesId=localWarehouseFeaturesId;}
    this.setAirConditioner = function (airConditioner) {this.airConditioner=airConditioner;}
    this.setHeating = function (heating) {this.heating=heating;}
    this.setCorner = function (corner) {this.corner=corner;}
    this.setSmokeOutlet = function (smokeOutlet) {this.smokeOutlet=smokeOutlet;}
}