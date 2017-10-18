function GaragesUsers() {
    this.garageId;
    this.userId

    this.construct = function (garageId, userId) {
        this.setGarageId(garageId);
        this.setUserId(userId);
    }

    this.getGarageId = function () {return this.garageId;}
    this.getUserId = function () {return this.userId;}

    this.setGarageId = function (garageId) {this.garageId=garageId;}
    this.setUserId = function (userId) {this.userId=userId;}
}