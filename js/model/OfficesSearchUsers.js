function OfficesSearchUsers() {
    this.officeSearchUsersId;
    this.price;
    this.squareMeters;
    this.publicationDate;
    this.address;
    this.local;
    this.warehouse;
    this.distributionId;
    this.typeOfBuildingId;
    this.officeFeaturesId;
    this.municipalitiesId;
    this.typeOfContractId;
    this.userId;

    this.construct = function (officeSearchUsersId, price, squareMeters, publicationDate, address, local, warehouse, distributionId, typeOfBuildingId, officeFeaturesId, municipalitiesId, typeOfContractId, userId) {
        this.setOfficeSearchUsers(officeSearchUsersId);
        this.setPrice(price);
        this.setSquareMeters(squareMeters);
        this.setPublicationDate(publicationDate);
        this.setAddress(address);
        this.setLocal(local);
        this.setWarehouse(warehouse);
        this.setDistributionId(distributionId);
        this.setTypeOfBuildingId(typeOfBuildingId);
        this.setOfficeFeaturesId(officeFeaturesId);
        this.setMunicipalitiesId(municipalitiesId);
        this.setTypeOfContractId(typeOfContractId);
        this.setUserId(userId);
    }

    this.getOfficeSearchUsersId = function () {return this.officeSearchUsersId;}
    this.getPrice = function () {return this.price;}
    this.getSquareMeters = function () {return this.squareMeters;}
    this.getPublicationDate = function () {return this.publicationDate;}
    this.getAddress = function () {return this.address;}
    this.getLocal = function () {return this.local;}
    this.getWarehouse = function () {return this.warehouse;}
    this.getDistributionId = function () {return this.distributionId;}
    this.getTypeOfBuildingId = function () {return this.typeOfBuildingId;}
    this.getOfficeFeaturesId = function () {return this.officeFeaturesId;}
    this.getMunicipalitiesId = function () {return this.municipalitiesId;}
    this.getTypeOfContractId = function () {return this.typeOfContractId;}
    this.getUserId = function () {return this.userId;}

    this.setOfficeSearchUsers = function (officeSearchUsersId) {this.officeSearchUsersId=officeSearchUsersId;}
    this.setPrice = function (price) {this.price=price;}
    this.setSquareMeters = function (squareMeters) {this.squareMeters=squareMeters;}
    this.setPublicationDate = function (publicationDate) {this.publicationDate=publicationDate;}
    this.setAddress = function (address) {this.address=address;}
    this.setLocal = function (local) {this.local=local;}
    this.setWarehouse = function (warehouse) {this.warehouse=warehouse;}
    this.setDistributionId = function (distributionId) {this.distributionId=distributionId;}
    this.setTypeOfBuildingId = function (typeOfBuildingId) {this.typeOfBuildingId=typeOfBuildingId;}
    this.setOfficeFeaturesId = function (officeFeaturesId) {this.officeFeaturesId=officeFeaturesId;}
    this.setMunicipalitiesId = function (municipalitiesId) {this.municipalitiesId=municipalitiesId;}
    this.setTypeOfContractId = function (typeOfContractId) {this.typeOfContractId=typeOfContractId;}
    this.setUserId = function (userId) {this.userId=userId;}
}