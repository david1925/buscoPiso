function Distributions() {
    this.distributionsId;
    this.name;
    
    this.construct = function (distributionsId, name) {
        this.setDistributionsId(distributionsId);
        this.setName(name);
    }

    this.getDistributionsId = function () {return this.distributionsId;}
    this.getName = function () {return this.name;}

    this.setDistributionsId = function (distributionsId) {this.distributionsId=distributionsId;}
    this.setName = function (name) {this.name=name;}
}