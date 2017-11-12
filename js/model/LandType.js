function LandType() {
    this.landTypeId;
    this.urban;
    this.urbanizable;

    this.construct = function (landTypeId, urban, urbanizable) {
        this.setLandTypeId(landTypeId);
        this.setUrban(urban);
        this.setUrbanizable(urbanizable);
    }

    this.getLandTypeId = function () {return this.landTypeId;}
    this.getUrban = function () {return this.urban;}
    this.getUrbanizable = function () {return this.urbanizable;}
    
    this.setLandTypeId = function (landTypeId) {this.landTypeId=landTypeId;}
    this.setUrban = function (urban) {this.urban=urban;}
    this.setUrbanizable = function (urbanizable) {this.urbanizable=urbanizable;}
}