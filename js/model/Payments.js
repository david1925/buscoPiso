function Payments() {   
    this.paymentId;
    this.paymentDate;
    this.paymentDateOfExpiry;
    this.price;
    this.iva;
    this.userId;
    this.businessOfficeId;
    this.paymentTypeId;
    this.paymentMethodsId;
    
    this.construct = function (paymentId, paymentDate, paymentDateOfExpiry, price, iva, userId, businessOfficeId, paymentTypeId, paymentMethodsId) {
        this.setPaymentId(paymentId);
        this.setPaymentDate(paymentDate);
        this.setPaymentDateOfExpiry(paymentDateOfExpiry);
        this.setPrice(price);
        this.setIva(iva);
        this.setUserId(userId);
        this.setBusinessOfficeId(businessOfficeId);
        this.setPaymentTypeId(paymentTypeId);
        this.setPaymentMethodsId(paymentMethodsId);
    }
    
    function getPaymentId() {return this.paymentId;}
    function getPaymentDate() {return this.paymentDate;}
    function getPaymentDateOfExpiry() {return this.paymentDateOfExpiry;}
    function getPrice() {return this.price;}
    function getIva() {return this.iva;}
    function getUserId() {return this.userId;}
    function getBusinessOfficeId() {return this.businessOfficeId;}
    function getPaymentTypeId() {return this.paymentTypeId;}
    function getPaymentMethodsId() {return this.paymentMethodsId;}
    
    function setPaymentId(paymentId) {this.paymentId=paymentId;}
    function setPaymentDate(paymentDate) {this.paymentDate=paymentDate;}
    function setPaymentDateOfExpiry(paymentDateOfExpiry) {this.paymentDateOfExpiry=paymentDateOfExpiry;}
    function setPrice(price) {this.price=price;}
    function setIva(iva) {this.iva=iva;}
    function setUserId(userId) {this.userId=userId;}
    function setBusinessOfficeId(businessOfficeId) {this.businessOfficeId=businessOfficeId;}
    function setPaymentTypeId(paymentTypeId) {this.paymentTypeId=paymentTypeId;}
    function setPaymentMethodsId(paymentMethodsId) {this.paymentMethodsId=paymentMethodsId;}
}