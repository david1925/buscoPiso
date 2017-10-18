function LandsUsers() {
    this.landId;
    this.userId;

    this.construct = function (landId, userId) {
        this.setLandId(landId);
        this.setUserId(userId);
    }

    this.getLandId = function () {return this.landId;}
    this.getUserId = function () {return this.userId;}
    
    this.setLandId = function (landId) {this.landId=landId;}
    this.setUserId = function (userId) {this.userId=userId;}
}