(function(){
  angular.module("buscoPiso").controller("LoginController", ['$scope', '$http', '$translate', 'Domain', '$window', function($scope, $http, $translate, Domain, $window) {
  
    $scope.register = Domain + "views/registerForm.html";
    $scope.resetPassword = Domain + "views/resetPassword.html";

    this.login = function () {
      $scope.flag;
      $http.post(Domain + 'api/public/users/login/', {"email" : $scope.email, "password" : $scope.password}).then(function (response) {
        if (response.data.length>0) {
          $scope.user = new Users();
          sessionStorage.setItem("userLogged", JSON.stringify(response.data[0]));
          var userObj = JSON.parse(sessionStorage.userLogged);
          $scope.user.construct(userObj.users_id_user,
                                userObj.users_name,
                                userObj.users_firstname,
                                userObj.users_lastname,
                                userObj.users_email,  
                                userObj.users_password,
                                userObj.users_phone,
                                userObj.users_description,
                                userObj.state,
                                userObj.last_login,
                                userObj.grups_groups_id_group,
                                userObj.business_office_idoffice,
                                userObj.additional_features_users_idadditional_features_users
          );          
          $scope.flag = true;
          $window.open(Domain + 'views/clientMainPage.html', "_self");
          return $scope.flag;
        }
        else{
          $scope.flag = false;
          return $scope.flag;
        }
      });      
    };
  }]);
})();