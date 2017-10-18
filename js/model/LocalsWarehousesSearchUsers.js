function LocalsWarehousesSearchUsers() {
    this.localWarehouseId;
    this.price;
    this.squareMeters;
    this.publicationDate;
    this.locationId;
    this.localWarehouseFeaturesId;
    this.municipalities;
    this.typeOfContract;
    this.userId;

    this.construct = function (localWarehouseId, price, squareMeters, publicationDate, locationId, localWarehouseFeaturesId, municipalities, typeOfContract, userId) {
        this.setLocalWarehouseId(localWarehouseId);
        this.setPrice(price);
        this.setSquareMeters(squareMeters);
        this.setPublicationDate(publicationDate);
        this.setLocationId(locationId);
        this.setLocalWarehouseFeaturesId(localWarehouseFeaturesId);
        this.setMunicipalities(municipalities);
        this.setTypeOfContract(typeOfContract);
        this.setUserId(userId);
    }

    this.getLocalWarehouseId = function () {return this.localWarehouseId;}
    this.getPrice = function () {return this.price;}
    this.getSquareMeters = function () {return this.squareMeters;}
    this.getPublicationDate = function () {return this.publicationDate;}
    this.getLocationId = function () {return this.locationId;}
    this.getLocalWarehouseFeaturesId = function () {return this.localWarehouseFeaturesId;}
    this.getMunicipalities = function () {return this.municipalities;}
    this.getTypeOfContract = function () {return this.typeOfContract;}
    this.getUserId = function () {return this.userId;}

    this.setLocalWarehouseId = function (localWarehouseId) {this.localWarehouseId=localWarehouseId;}
    this.setPrice = function (price) {this.price=price;}
    this.setSquareMeters = function (squareMeters) {this.squareMeters=squareMeters;}
    this.setPublicationDate = function (publicationDate) {this.publicationDate=publicationDate;}
    this.setLocationId = function (locationId) {this.locationId=locationId;}
    this.setLocalWarehouseFeaturesId = function (localWarehouseFeaturesId) {this.localWarehouseFeaturesId=localWarehouseFeaturesId;}
    this.setMunicipalities = function (municipalities) {this.municipalities=municipalities;}
    this.setTypeOfContract = function (typeOfContract) {this.typeOfContract=typeOfContract;}
    this.setUserId = function (userId) {this.userId=userId;}
}