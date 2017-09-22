function Province() {
    this.provinceId;
    this.name;
    this.autonomousCommunityId;

    this.construct = function (provinceId, name, autonomousCommunityId) {
        this.setProvinceId(name);
        this.setName(name);
        this.setAutonomousCommunityId(autonomousCommunityId);
    }

    this.getProvinceId = function () {return this.provinceId;}
    this.getName = function () {return this.name;}
    this.getAutonomousCommunityId = function () {return this.autonomousCommunityId;}

    this.setProvinceId = function (provinceId) {this.provinceId=provinceId;}
    this.setName = function (name) {this.name=name;}
    this.setAutonomousCommunityId = function (autonomousCommunityId) {this.autonomousCommunityId=autonomousCommunityId;}
    
}