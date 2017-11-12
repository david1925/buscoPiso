function PaymentMethods() {
    this.paymentMethodId;
    this.name;

    this.construct = function (paymentMethodId, name) {
        this.setPaymentMethodId(paymentMethodId);
        this.setName(name);
    }

    this.getPaymentMethodId = function () {return this.paymentMethodId;}
    this.getName = function () {return this.name;}

    this.setPaymentMethodId = function (paymentMethodId) {this.paymentMethodId=paymentMethodId;}
    this.setName = function (name) {this.name=name;}
}