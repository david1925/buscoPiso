function OfficesUsers() {
    this.officeId;
    this.userId;

    this.construct = function (officeId, userId) {
        this.setOfficeId(officeId);
        this.setUserId(userId);
    }

    this.getOfficeId = function () {return this.officeId;}
    this.getUserId = function () {return this.userId;}

    this.setOfficeId = function (officeId) {this.officeId=officeId;}
    this.setUserId = function (userId) {this.userId=userId;}
}