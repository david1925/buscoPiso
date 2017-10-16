function AdditionalFeaturesUsers() {
    this.additionalFeaturesUsersId;
    this.description;
    this.courses;
    this.status;
    this.workPosition;
    
    this.construct = function (additionalFeaturesUsersId, description, courses, status, workPosition) {
        this.setAdditionalFeaturesUsersId(additionalFeaturesUsersId);
        this.setDescription(description);
        this.setCourses(courses);
        this.setStatus(status);
        this.setWorkPosition(workPosition);
    }

    this.getAdditionalFeaturesUsersId = function () {return this.additionalFeaturesUsersId;}
    this.getDescription = function () {return this.description;}
    this.getCourses = function () {return this.courses;}
    this.getStatus = function () {return this.status;}
    this.getWorkPosition = function () {return this.workPosition;}

    this.setAdditionalFeaturesUsersId = function (additionalFeaturesUsersId) {this.additionalFeaturesUsersId=additionalFeaturesUsersId;}
    this.setDescription = function (description) {this.description=description;}
    this.setCourses = function (courses) {this.courses=courses;}
    this.setStatus = function (status) {this.status=status;}
    this.setWorkPosition = function (workPosition) {this.workPosition=workPosition;}
}