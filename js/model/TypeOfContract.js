function TypeOfContract() {
    this.typeOfContractId;
    this.name;

    this.construct = function (typeOfContractId, name) {
        this.setTypeOfContractId(typeOfContractId);
        this.setName(name);
    }

    this.getTypeOfContractId = function () {return this.typeOfContractId;}
    this.getName = function () {return this.name;}

    this.setTypeOfContractId = function (typeOfContractId) {this.typeOfContractId=typeOfContractId;}
    this.setName = function (name) {this.name=name;}
    
}