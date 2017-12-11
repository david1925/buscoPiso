(function(){
    angular.module("buscoPiso").controller("HeaderAndFooterController", ['$scope', '$http', '$translate', 'Domain', '$window', function($scope, $http, $translate, Domain, $window) {

        $scope.index    = Domain;
        $scope.login    = Domain + "views/login.html";
        $scope.mainPage = Domain + "views/mainPage.html";
        $scope.services = Domain + "views/services.html";
        $scope.contact  = Domain + "views/contact.html";
        $scope.faq      = Domain + "views/faq.html";

        if (sessionStorage.userLogged != null) {
            $scope.isLogged = 1;
        } else {
            $scope.isLogged = 0;
        }

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

        this.logOut = function() {
            $scope.user = new Users();
            var userObj = JSON.parse(sessionStorage.userLogged);
            $scope.user.construct(
                userObj.users_id_user,
                userObj.users_name,
                userObj.users_firstname,
                userObj.users_lastname,
                userObj.users_email,
                userObj.users_password,
                userObj.users_phone,
                userObj.floor_description,
                userObj.state,
                userObj.last_login,
                userObj.groups_groups_id_group,
                userObj.business_office_idoffice,
                userObj.additional_features_users_idadditional_features_users
            );            
            $http.get(Domain + "api/public/users/logout/" + $scope.user.getUserId())
                .then(function(response) {
                    $scope.users = response.data;
                }
            );
            sessionStorage.removeItem("userLogged");
        };

    }]);
})();