function Groups() {
    this.groupId;
    this.name;

    this.construct = function (groupId, name) {
        this.setGroupId(groupId);
        this.setName(name);
    }

    this.getGroupId = function () {return this.groupId;}
    this.getName = function () {return this.name;}

    this.setGroupId = function (groupId) {this.groupId=floorConditionId;}
    this.setName = function (name) {this.name=name;}
}