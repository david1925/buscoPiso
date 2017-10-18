function Lands() {
    this.landId;
    this.price;
    this.squareMeters;
    this.landTypeId;
    this.municipalitiesId;
    this.typeOfContractId;
    this.roadTypesId;
    
    this.construct = function (landId, price, squareMeters, landTypeId, municipalitiesId, typeOfContractId, roadTypesId) {
        this.setLandId(landId);
        this.setPrice(price);
        this.setSquareMeters(squareMeters);
        this.setLandTypeId(landTypeId);
        this.setMunicipalities(municipalitiesId);
        this.setTypeOfContractId(typeOfContractId);
        this.setRoadTypesId(roadTypesId);
    }
    
    this.getLandId = function () {return this.landId;}
    this.getPrice = function () {return this.price;}
    this.getSquareMeters = function () {return this.squareMeters;}
    this.getLandTypeId = function () {return this.landTypeId;}
    this.getMunicipalitiesId = function () {return this.municipalitiesId;}
    this.getTypeOfContractId = function () {return this.typeOfContractId;}
    this.getRoadTypesId = function () {return this.roadTypesId;}

    this.setLandId = function (landId) {this.landId=landId;}
    this.setPrice = function (price) {this.price=price;}
    this.setSquareMeters = function (squareMeters) {this.squareMeters=squareMeters;}
    this.setLandTypeId = function (landTypeId) {this.landTypeId=landTypeId;}
    this.setMunicipalities = function (municipalitiesId) {this.municipalitiesId=municipalitiesId;}
    this.setTypeOfContractId = function (typeOfContractId) {this.typeOfContractId=typeOfContractId;}
    this.setRoadTypesId = function (roadTypesId) {this.roadTypesId=roadTypesId;}
}