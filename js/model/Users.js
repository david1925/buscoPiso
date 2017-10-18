function OfficesUsers() {    
    this.userId;
    this.name;
    this.firstname;
    this.lastname;
    this.email;
    this.password;
    this.phone;
    this.description;
    this.state;
    this.lastLogin;
    this.groupId;
    this.businessOfficeId;
    this.additionalFeaturesId;

    this.construct = function (typeOfBuildingId, name) {
        this.setTypeOfBuildingId(typeOfBuildingId);
        this.setName(name);
        this.setFirstname(firstname);
        this.setLastname(lastname);
        this.setEmail(email);
        this.setPassword(password);
        this.setPhone(phone);
        this.setDescription(description);
        this.setState(state);
        this.setLastLogin(lastLogin);
        this.setGroupId(groupId);
        this.setBusinnessOfficeId(businessOfficeId);
        this.setAdditionalFeaturesId(additionalFeaturesId);
    }
    
    function getUserId() {return this.userId;}
    function getName() {return this.name;}
    function getFirstname() {return this.firstname;}
    function getLastname() {return this.lastname;}
    function getEmail() {return this.email;}
    function getPassword() {return this.password;}
    function getPhone() {return this.phone;}
    function getDescription() {return this.description;}
    function getState() {return this.state;}
    function getLastLogin() {return this.lastLogin;}
    function getGroupId() {return this.groupId;}
    function getBusinnessOfficeId() {return this.businessOfficeId;}
    function getAdditionalFeaturesId() {return this.additionalFeaturesId;}

    function setUserId(userId) {this.userId=userId;}
    function setName(name) {this.name=name;}
    function setFirstname(firstname) {this.firstname=firstname;}
    function setLastname(lastname) {this.lastname=lastname;}
    function setEmail(email) {this.email=email;}
    function setPassword(password) {this.password=password;}
    function setPhone(phone) {this.phone=phone;}
    function setDescription(description) {this.description=description;}
    function setState(state) {this.state=state;}
    function setLastLogin(lastLogin) {this.lastLogin=lastLogin;}
    function setGroupId(groupId) {this.groupId=groupId;}
    function setBusinnessOfficeId(businessOfficeId) {this.getBusinnessOfficeId=$businessOfficeId;}
    function setAdditionalFeaturesId(additionalFeaturesId) {this.additionalFeaturesId=$additionalFeaturesId;}
}