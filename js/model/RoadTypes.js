function RoadTypes() {
    this.roadTypeId;
    this.name;

    this.construct = function (roadTypeId, name) {
        this.setRoadTypeId(roadTypeId);
        this.setName(name);
    }
    
    function getRoadTypeId() {return this.roadTypeId;}
    function getName() {return this.name;}

    function setRoadTypeId(roadTypeId) {this.roadTypeId=roadTypeId;}
    function setName(name) {this.name=name;}
}