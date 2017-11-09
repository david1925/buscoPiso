function Users() {    
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

    this.construct = function (userId, name, firstname, lastname, email, password, phone, description, state, lastLogin, groupId, businessOfficeId, additionalFeaturesId) {
        this.setUserId(userId);
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
        this.setBusinessOfficeId(businessOfficeId);
        this.setAdditionalFeaturesId(additionalFeaturesId);
    }

    this.setUserId = function(userId) {this.userId=userId;}
    this.setName = function(name) {this.name=name;}
    this.setFirstname = function(firstname) {this.firstname=firstname;}
    this.setLastname = function(lastname) {this.lastname=lastname;}
    this.setEmail = function(email) {this.email=email;}
    this.setPassword = function(password) {this.password=password;}
    this.setPhone = function(phone) {this.phone=phone;}
    this.setDescription = function(description) {this.description=description;}
    this.setState = function(state) {this.state=state;}
    this.setLastLogin = function(lastLogin) {this.lastLogin=lastLogin;}
    this.setGroupId = function(groupId) {this.groupId=groupId;}
    this.setBusinessOfficeId = function(businessOfficeId) {this.getBusinnessOfficeId=businessOfficeId;}
    this.setAdditionalFeaturesId = function(additionalFeaturesId) {this.additionalFeaturesId=additionalFeaturesId;}
    
    this.getUserId = function() {return this.userId;}
    this.getName = function() {return this.name;}
    this.getFirstname = function() {return this.firstname;}
    this.getLastname = function() {return this.lastname;}
    this.getEmail = function() {return this.email;}
    this.getPassword = function() {return this.password;}
    this.getPhone = function() {return this.phone;}
    this.getDescription = function() {return this.description;}
    this.getState = function() {return this.state;}
    this.getLastLogin = function() {return this.lastLogin;}
    this.getGroupId = function() {return this.groupId;}
    this.getBusinessOfficeId = function() {return this.businessOfficeId;}
    this.getAdditionalFeaturesId = function() {return this.additionalFeaturesId;}
}