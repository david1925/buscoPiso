function FloorConditions() {
    this.floorConditionId;
    this.name;

    this.construct = function (floorConditionId, name) {
        this.setAutonomousCommunityId(autonomousCommunityId);
        this.setName(name);
    }

    this.getFloorConditionId = function () {return this.floorConditionId;}
    this.getName = function () {return this.name;}

    this.setFloorConditionId = function (floorConditionId) {this.floorConditionId=floorConditionId;}
    this.setName = function (name) {this.name=name;}
}