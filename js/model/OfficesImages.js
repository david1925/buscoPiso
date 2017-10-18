function OfficesImages() {
    this.officeImagesId;
    this.price;
    this.officeId;

    this.construct = function (officeImagesId, price, officeId) {
        this.setOfficeImagesId(officeImagesId);
        this.setPrice(price);
        this.setOfficeId(officeId);
    }

    this.getOfficeImagesId = function () {return this.officeImagesId;}
    this.getPrice = function () {return this.price;}
    this.getOfficeId = function () {return this.officeId;}

    this.setOfficeImagesId = function (officeImagesId) {this.officeImagesId=officeImagesId;}
    this.setPrice = function (price) {this.price=price;}
    this.setOfficeId = function (officeId) {this.officeId=officeId;}
}