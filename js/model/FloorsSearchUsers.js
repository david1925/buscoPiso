function FloorsSearchUsers() {
    this.floorsSearchUsersId;
    this.price;
    this.squareMeters;
    this.bedrooms;
    this.publicationDate;
    this.address;
    this.municipalitiesId;
    this.floorConditionsId;
    this.typeOfContractId;
    this.userId;

    this.construct = function (floorsSearchUsersId, price, squareMeters, bedrooms, publicationDate, address, municipalitiesId, floorConditionsId, typeOfContractId, userId) {
        this.setFloorSearchUsersId(floorsSearchUsersId);
        this.setPrice(price);
        this.setSquareMeters(squareMeters);
        this.setBedrooms(bedrooms);
        this.setPublicationDate(publicationDate);
        this.setAddress(address);
        this.setMunicipalitiesId(municipalitiesId);
        this.setFloorConditionsId(floorConditionsId);
        this.setTypeOfContract(typeOfContractId);
        this.setUserId(userId);
    }

    this.getFloorSearchUsersId = function () {return this.floorsSearchUsersId;}
    this.getPrice = function () {return this.price;}
    this.getSquareMeters = function () {return this.squareMeters;}
    this.getBedrooms = function () {return this.bedrooms;}
    this.getPublicationDate = function () {return this.publicationDate;}
    this.setAddress = function () {return this.address;}
    this.getMunicipalitiesId = function () {return this.municipalitiesId;}
    this.getFloorConditionsId = function () {return this.floorConditionsId;}
    this.getTypeOfContract = function () {return this.typeOfContractId;}
    this.getUserId = function () {return this.userId;}

    this.setFloorConditionsId = function (floorConditionsId) {this.floorConditionsId=floorConditionsId;}
    this.setPrice = function (price) {this.price=price;}
    this.setSquareMeters = function (squareMeters) {this.squareMeters=squareMeters;}
    this.setBedrooms = function (bedrooms) {this.bedrooms=bedrooms;}
    this.setPublicationDate = function (publicationDate) {this.publicationDate=publicationDate;}
    this.setAddress = function (address) {this.address=address;}
    this.setMunicipalitiesId = function (municipalitiesId) {this.municipalitiesId=municipalitiesId;}
    this.setFloorConditionsId = function (floorConditionsId) {this.floorConditionsId=floorConditionsId;}
    this.setName = function (typeOfContractId) {this.typeOfContractId=typeOfContractId;}
    this.setUserId = function (userId) {this.userId=userId;}
}