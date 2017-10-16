function Contract() {
    this.contractId;
    this.tradeName;
    this.taxName;
    this.cifNif;
    this.contactPerson;
    this.email;
    this.domicile;
    this.postalCode;
    this.phone;
    this.fax;
    this.billingEmail;
    this.billingAccountNumber;
    this.businessOfficeId;
    
    this.construct = function (contractId, tradeName, taxName, cifNif, contactPerson, email, domicile, postalCode, phone, fax, billingEmail, billingAccountNumber, businessOfficeId) {
        this.setContractId(contractId);
        this.setTradeName(tradeName);
        this.setTaxName(taxName);
        this.setCifNif(cifNif);
        this.setContactPerson(contactPerson);
        this.setEmail(email);
        this.setDomicile(domicile);
        this.setPostalCode(postalCode);
        this.setPhone(phone);
        this.setFax(fax);
        this.setBillingEmail(billingEmail);
        this.setBillingAccountNumber(billingAccountNumber);
        this.setBusinessOfficeId(businessOfficeId);
    }

    this.getContractId = function () {return this.contractId;}
    this.getTradeName = function () {return this.tradeName;}
    this.getTaxName = function () {return this.taxName;}
    this.getCifNif = function () {return this.cifNif;}
    this.getContactPerson = function () {return this.contactPerson;}
    this.getEmail = function () {return this.email;}
    this.getDomicile = function () {return this.domicile;}
    this.getPostalCode = function () {return this.postalCode;}
    this.getPhone = function () {return this.phone;}
    this.getFax = function () {return this.fax;}
    this.getBillingEmail = function () {return this.billingEmail;}
    this.getBillingAccountNumber = function () {return this.billingAccountNumber;}
    this.getBusinessOfficeId = function () {return this.businessOfficeId;}

    this.setContractIdc = function (contractId) {this.contractId=contractId;}
    this.setTradeName = function (tradeName) {this.tradeName=tradeName;}
    this.setTaxName = function (taxName) {this.taxName=taxName;}
    this.setCifNif = function (cifNif) {this.cifNif=cifNif;}
    this.setContactPerson = function (contactPerson) {this.contactPerson=contactPerson;}
    this.setEmail = function (email) {this.email=email;}
    this.setDomicile = function (domicile) {this.domicile=domicile;}
    this.setPostalCode = function (postalCode) {this.postalCode=postalCode;}
    this.setPhone = function (phone) {this.phone=phone;}
    this.setFax = function (fax) {this.fax=fax;}
    this.setBillingEmail = function (billingEmail) {this.billingEmail=billingEmail;}
    this.setBillingAccountNumber = function (billingAccountNumber) {this.billingAccountNumber=billingAccountNumber;}
    this.setBusinessOfficeId = function (businessOfficeId) {this.businessOfficeId=businessOfficeId;}
}