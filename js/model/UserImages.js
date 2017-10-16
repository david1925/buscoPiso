function UserImages() {
    this.userImagesId;
    this.name;
    this.userId;
    
    this.construct = function (userImagesId, name, userId) {
        this.setUserImagesId(userImagesId);
        this.setName(name);
        this.setUserId(userId);
    }

    this.getUserImagesId = function () {return this.userImagesId;}
    this.getName = function () {return this.name;}
    this.getUserId = function () {return this.userId;}

    this.setUserImagesId = function (userImagesId) {this.userImagesId=userImagesId;}
    this.setName = function (name) {this.name=name;}
    this.setUserId = function (userId) {this.userId=userId;}
}