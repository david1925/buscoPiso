function Location() {
    this.locationId;
    this.mall;
    this.streetLevel;
    this.mazzine;
    this.underground;
    this.others;
    
    this.construct = function (locationId, mall, streetLevel, mazzine, underground, others) {
        this.setLocationId(locationId);
        this.setMall(mall);
        this.setStreetLevel(streetLevel);
        this.setMazzine(mazzine);
        this.setUnderground(mazzine);
        this.setOthers(others);
    }

    this.getLocationId = function () {return this.locationId;}
    this.getMall = function () {return this.mall;}
    this.getStreetLevel = function () {return this.streetLevel;}
    this.getMazzine = function () {return this.mazzine;}
    this.getUnderground = function () {return this.underground;}
    this.getOthers = function () {return this.others;}

    this.setLocationId = function (locationId) {this.locationId=locationId;}
    this.setMall = function (mall) {this.mall=mall;}
    this.setStreetLevel = function (streetLevel) {this.streetLevel=streetLevel;}
    this.setMazzine = function (mazzine) {this.mazzine=mazzine;}
    this.setUnderground = function (underground) {this.underground=underground;}
    this.setOthers = function (others) {this.others=others;}
}