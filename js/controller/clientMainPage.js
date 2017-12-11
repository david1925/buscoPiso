(function(){
    angular.module("buscoPiso").controller("ClientMainPageController", ['$scope', '$http', '$translate', 'Domain', '$window', function($scope, $http, $translate, Domain, $window) {

        $http.get(Domain + "api/public/users/login/check")
            .then(function(response) {
                $scope.isLogged = response.data;
                if ($scope.isLogged == "true") {
                    $scope.user = new Users();
                    var userObj = JSON.parse(sessionStorage.userLogged);
                    $scope.user.construct(
                        userObj.users_id_user,
                        userObj.users_name,
                        userObj.users_firstname,
                        userObj.users_lastname,
                        userObj.users_email,
                        userObj.users_phone,
                        userObj.floor_description,
                        userObj.state,
                        userObj.last_login,
                        userObj.groups_groups_id_group,
                        userObj.business_office_idoffice,
                        userObj.additional_features_users_idadditional_features_users
                    );
                }
            }
        );
        
    }]);
})();