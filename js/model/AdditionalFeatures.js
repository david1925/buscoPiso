function AdditionalFeatures() {
        this.additionalFeaturesId;
        this.airConditioner;
        this.builtInWardrobe;
        this.elevator;
        this.exterior;
        this.parking;
        this.garden;
        this.pool;
        this.storageRoom;
        this.communityZone;
        this.gym;
        this.floorId;

    this.construct = function (additionalFeaturesId, airConditioner, builtInWardrobe, elevator, exterior, parking, garden, pool, storageRoom, communityZone, gym, floorId) {
        this.additionalFeaturesId(additionalFeaturesId);
        this.airConditioner(airConditioner);
        this.builtInWardrobe(builtInWardrobe);
        this.elevator(elevator);
        this.exterior(exterior);
        this.parking(parking);
        this.garden(garden);
        this.pool(pool);
        this.storageRoom(storageRoom);
        this.communityZone(communityZone);
        this.gym(gym);
        this.floorId(floorId);
    }

    this.getAdditionalFeaturesId = function () {return this.additionalFeaturesId;}
    this.getAirConditioner = function () {return this.airConditioner;}
    this.getBuiltInWardrobe = function () {return this.builtInWardrobe;}
    this.getElevator = function () {return this.elevator;}
    this.getExterior = function () {return this.exterior;}
    this.getParking = function () {return this.parking;}
    this.getGarden = function () {return this.garden;}
    this.getPool = function () {return this.pool;}
    this.getStorageRoom = function () {return this.storageRoom;}
    this.getCommunityZone = function () {return this.communityZone;}
    this.getGym = function () {return this.gym;}
    this.getFloorId = function () {return this.floorId;}

    this.setAdditionalFeaturesId = function (additionalFeaturesId) {this.additionalFeaturesId=additionalFeaturesId;}
    this.setAirConditioner = function (airConditioner) {this.airConditioner=airConditioner;}
    this.setBuiltInWardrobe = function (builtInWardrobe) {this.builtInWardrobe=builtInWardrobe;}
    this.setElevator = function (elevator) {this.elevator=elevator;}
    this.setExterior = function (exterior) {this.exterior=exterior;}
    this.setParking = function (parking) {this.parking=parking;}
    this.setGarden = function (garden) {this.garden=garden;}
    this.setPool = function (pool) {this.pool=pool;}
    this.setStorageRoom = function (storageRoom) {this.storageRoom=storageRoom;}
    this.setCommunityZone = function (communityZone) {this.communityZone=communityZone;}
    this.setGym = function (gym) {this.gym=gym;}
    this.setFloorId = function (floorId) {this.floorId=floorId;}

}