function Municipality() {
    this.municipalityId;
    this.provinceId;
    this.municipalityCode;
    this.dc;
    this.name;

    this.construct = function (municipalityId, provinceId, municipalityCode, dc, name) {
        this.setMunicipalityId(municipalityId);
        this.setProvinceId(provinceId);
        this.setMunicipalityCode(municipalityCode);
        this.setDc(dc);
        this.setName(name);        
    }

    this.getMunicipalityId = function () {return this.municipalityId;}
    this.getProvinceId = function () {return this.provinceId;}
    this.getMunicipalityCode = function () {return this.municipalityCode;}
    this.getDc = function () {return this.dc;}
    this.getName = function () {return this.name;}    

    this.setMunicipalityId = function (municipalityId) {this.municipalityId=municipalityId;}
    this.setProvinceId = function (provinceId) {this.provinceId=provinceId;}
    this.setMunicipalityCode = function (municipalityCode) {this.municipalityCode=municipalityCode;}
    this.setDc = function (dc) {this.dc=dc;}
    this.setName = function (name) {this.name=name;}    
    
}