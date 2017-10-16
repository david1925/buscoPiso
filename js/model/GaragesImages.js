function GaragesImages() {
    this.garagesImagesId;
    this.name;
    this.garagesId;

    this.construct = function (garagesImagesId, name, garagesId) {
        this.setGaragesImagesId(garagesImagesId);
        this.setName(name);
        this.setGaragesId(garagesId);
    }

    this.getGaragesImagesId = function () {return this.garagesImagesId;}
    this.getName = function () {return this.name;}
    this.getGaragesId = function () {return this.garagesId;}
    
    this.setMotorcycleSeat = function (motorcycleSeat) {this.motorcycleSeat=motorcycleSeat;}
    this.setName = function (name) {this.name=name;}
    this.setGaragesId = function (garagesId) {this.garagesId=garagesId;}
}