function Countries() {
    this.countriesId;
    this.name;
    
    this.construct = function (countriesId, name) {
        this.countriesId(countriesId);
        this.setName(name);
    }

    this.getCountriesId = function () {return this.countriesId;}
    this.getName = function () {return this.name;}

    this.setCountriesId = function (countriesId) {this.countriesId=countriesId;}
    this.setName = function (name) {this.name=name;}
}