function FloorsImages() {
    this.floorsImagesId;
    this.name;
    this.floorsId;

    this.construct = function (floorsImagesId, name, floorsId) {
        this.setFloorsImagesId(floorsImagesId);
        this.setName(name);
        this.setFloorsId(floorsId);
    }

    this.getFloorsImagesId = function () {return this.floorsImagesId;}
    this.getName = function () {return this.name;}
    this.getFloorsId = function () {return this.floorsId;}

    this.setFloorsImagesId = function (floorsImagesId) {this.floorsImagesId=floorsImagesId;}
    this.setName = function (name) {this.name=name;}
    this.setFloorsId = function (floorsId) {this.floorsId=floorsId;}
}