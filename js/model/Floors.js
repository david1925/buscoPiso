function Floors() {
    this.floorsId;
    this.price;
    this.squareMeters;
    this.bedrooms;
    this.publicationDate;
    this.address;
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
    this.municipalitiesId;
    this.typeOfContractId;
    this.floorConditionsId;
    this.roadTypesId;
    
    this.construct = function (floorsId, price, squareMeters, bedrooms, publicationDate, address, airConditioner, builtInWardrobe, elevator, exterior, parking, garden, pool, storageRoom, communityZone, gym, municipalitiesId, typeOfContractId, floorConditionsId, roadTypesId) {
        this.setFloorsId(floorsId);
        this.setPrice(price);
        this.setSquareMeters(squareMeters);
        this.setBedrooms(bedrooms);
        this.setPublicationDate(publicationDate);
        this.setAddress(address);
        this.setAirConditioner(airConditioner);
        this.setBuiltInWardrobe(builtInWardrobe);
        this.setElevator(elevator);
        this.setExterior(exterior);
        this.setParking(parking);
        this.setGarden(garden);
        this.setPool(pool);
        this.setStorageRoom(storageRoom);
        this.setCommunnityZone(communityZone);
        this.setGym(gym);
        this.setMunicipalitiesId(municipalitiesId);
        this.setTypeOfContractId(typeOfContractId);
        this.setFloorConditionsId(floorConditionsId);
        this.setRoadTypesId(roadTypesId);        
    }

    this.getFloorsId = function () {return this.floorsId;}
    this.getPrice = function () {return this.price;}
    this.getSquareMeters = function () {return this.squareMeters;}
    this.getBedrooms = function () {return this.bedrooms;}
    this.getPublicationDate = function () {return this.publicationDate;}
    this.getAddress = function () {return this.address;}
    this.getAirConditioner = function () {return this.airConditioner;}
    this.getBuiltInWardrobe = function () {return this.builtInWardrobe;}
    this.getElevator = function () {return this.elevator;}
    this.getExterior = function () {return this.exterior;}
    this.getParking = function () {return this.parking;}
    this.getGarden = function () {return this.garden;}
    this.getPool = function () {return this.pool;}
    this.getStorageRoom = function () {return this.storageRoom;}
    this.getCommunnityZone = function () {return this.communityZone;}
    this.getGym = function () {return this.gym;}
    this.getMunicipalitiesId = function () {return this.municipalitiesId;}
    this.getTypeOfContractId = function () {return this.typeOfContractId;}
    this.getFloorConditionsId = function () {return this.floorConditionsId;}
    this.getRoadTypesId = function () {return this.roadTypesId;}

    this.setFloorConditionsId = function (floorConditionsId) {this.floorConditionsId=floorConditionsId;}
    this.setPrice = function (price) {this.price=price;}
    this.setSquareMeters = function (squareMeters) {this.squareMeters=squareMeters;}
    this.setBedrooms = function (bedrooms) {this.bedrooms=bedrooms;}
    this.setPublicationDate = function (publicationDate) {this.publicationDate=publicationDate;}
    this.setAddress = function (address) {this.address=address;}
    this.setAirConditioner = function (airConditioner) {this.airConditioner=airConditioner;}
    this.setBuiltInWardrobe = function (builtInWardrobe) {this.builtInWardrobe=builtInWardrobe;}
    this.setElevator = function (elevator) {this.elevator=elevator;}
    this.setExterior = function (exterior) {this.exterior=exterior;}
    this.setParking = function (parking) {this.parking=parking;}
    this.setGarden = function (garden) {this.garden=garden;}
    this.setPool = function (pool) {this.pool=pool;}
    this.setStorageRoom = function (storageRoom) {this.storageRoom=storageRoom;}
    this.setCommunnityZone = function (communityZone) {this.communityZone=communityZone;}
    this.setGym = function (gym) {this.gym=gym;}
    this.setMunicipalitiesId = function (municipalitiesId) {this.municipalitiesId=municipalitiesId;}
    this.setTypeOfContractId = function (typeOfContractId) {this.typeOfContractId=typeOfContractId;}
    this.setFloorConditionsId = function (floorConditionsId) {this.floorConditionsId=floorConditionsId;}
    this.setRoadTypesId = function (roadTypesId) {this.roadTypesId=roadTypesId;}
}