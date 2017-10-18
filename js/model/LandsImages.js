function LandsImages() {
    this.landImagesId;
    this.name;
    this.landId;

    this.construct = function (landImagesId, name, landId) {
        this.setLandImagesId(landImagesId);
        this.setName(name);
        this.setLandId(landId);
    }

    this.getLandImagesId = function () {return this.landImagesId;}
    this.getName = function () {return this.name;}
    this.getLandId = function () {return this.landId;}

    this.setLandImagesId = function (landImagesId) {this.landImagesId=landImagesId;}
    this.setName = function (name) {this.name=name;}
    this.setLandId = function (landId) {this.landId=landId;}
}