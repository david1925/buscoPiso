function Location() {
    this.locationId;
    this.name;
    
    this.construct = function (locationId, name) {
        this.setLocationId(locationId);
        this.setName(name);
    }

    this.getLocationId = function () {return this.locationId;}
    this.getName = function () {return this.name;}

    this.setLocationId = function (locationId) {this.locationId=locationId;}
    this.setName = function (name) {this.name=name;}
}