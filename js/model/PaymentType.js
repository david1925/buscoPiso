function PaymentType() {
    this.paymentTypeId;
    this.name;
    this.numberOfUsers;

    this.construct = function (paymentTypeId, name, numberOfUsers) {
        this.setPaymentTypeId(paymentTypeId);
        this.setName(name);
        this.setNumberOfUsers(numberOfUsers);
    }

    this.getPaymentId = function () {return this.paymentTypeId;}
    this.getName = function () {return this.name;}
    this.getNumberOfUsers = function () {return this.numberOfUsers};

    this.setPaymentTypeId = function (paymentTypeId) {this.paymentTypeId=paymentTypeId;}
    this.setName = function (name) {this.name=name;}
    this.setNumberOfUsers = function (numberOfUsers) {this.numberOfUsers=numberOfUsers;}
}