function FloorsUsers() {
    this.userId;
    this.floorId;

    this.construct = function (userId, floorId) {
        this.setGroupId(userId);
        this.setName(floorId);
    }

    this.getUserId = function () {return this.userId;}
    this.getFloorId = function () {return this.floorId;}

    this.setUserId = function (userId) {this.userId=userId;}
    this.setFloorId = function (floorId) {this.floorId=floorId;}
}