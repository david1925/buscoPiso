function GaragesFeatures() {
    this.garagesId;
    this.motorcycleSeat;
    this.automaticDoor;
    this.security;

    this.construct = function (garagesId, motorcycleSeat, automaticDoor, security) {
        this.setGaragesId(garagesId);
        this.setMotorcycleSeat(motorcycleSeat);
        this.setAutomaticDoor(automaticDoor);
        this.setSecurity(security);
    }

    this.getGaragesId = function () {return this.garagesId;}
    this.getMotorcycleSeat = function () {return this.motorcycleSeat;}
    this.getAutomaticId = function () {return this.automaticDoor;}
    this.getSecurity = function () {return this.security;}

    this.setGaragesId = function (garagesId) {this.garagesId=garagesId;}
    this.setMotorcycleSeat = function (motorcycleSeat) {this.motorcycleSeat=motorcycleSeat;}
    this.setAutomaticDoor = function (automaticDoor) {this.automaticDoor=automaticDoor;}
    this.setSecurity = function (security) {this.security=security;}
}