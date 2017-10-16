function AutonomousCommunity() {
    this.autonomousCommunityId;
    this.name;
    this.countryId;

    this.construct = function (autonomousCommunityId, name, countryId) {
        this.setAutonomousCommunityId(autonomousCommunityId);
        this.setName(name);
        this.setCountryId(countryId);
    }

    this.getAutonomousCommunityId = function () {return this.autonomousCommunityId;}
    this.getName = function () {return this.name;}
    this.getCountryId = function () {return this.countryId;}

    this.setAutonomousCommunityId = function (autonomousCommunityId) {this.autonomousCommunityId=autonomousCommunityId;}
    this.setName = function (name) {this.name=name;}
    this.setCountryId = function (countryId) {this.countryId=countryId;}
}