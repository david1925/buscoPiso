function TypeOfBuilding() {
    this.typeOfBuildingId;
    this.name;

    this.construct = function (typeOfBuildingId, name) {
        this.setTypeOfBuildingId(typeOfBuildingId);
        this.setName(name);
    }

    function getTypeOfBuildingId() {return this.typeOfBuildingId;}
    function getName() {return this.name;}

    function setTypeOfBuildingId(typeOfBuildingId) {this.typeOfBuildingId=typeOfBuildingId;}
    function setName(name) {this.name=name;}
}