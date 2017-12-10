(function(){
    angular.module("buscoPiso").controller("HeaderAndFooterController", ['$scope', '$http', '$translate', 'Domain', '$window', function($scope, $http, $translate, Domain, $window) {

        $scope.index    = Domain;
        $scope.login    = Domain + "views/login.html";
        $scope.mainPage = Domain + "views/mainPage.html";
        $scope.services = Domain + "views/services.html";
        $scope.contact  = Domain + "views/contact.html";
        $scope.faq      = Domain + "views/faq.html";
        
        $http.get(Domain + "api/public/users/login/check")
            .then(function(response) {

                $scope.isLoged = response.data;

                if ($scope.isLoged == "true") {
                    $scope.user = new User();
                    var userObj = JSON.parse(sessionStorage.userLogged);
                    $scope.user.construct(
                        userObj.users_id_user,
                        userObj.users_username,
                        userObj.users_name,
                        userObj.users_firstname,
                        userObj.users_lastname,
                        userObj.users_email,
                        userObj.users_phone,
                        userObj.users_image,
                        userObj.users_summary,
                        userObj.users_address,
                        userObj.users_profile,
                        userObj.users_status,
                        userObj.users_language
                    );
                }
            }
        );

        this.logOut = function() {
            $scope.user = new Users();
            var userObj = JSON.parse(sessionStorage.userLogged);
            $scope.user.construct(userObj.users_id_user, userObj.users_username, userObj.users_name, userObj.users_firstname, userObj.users_lastname, userObj.users_email, userObj.users_phone, userObj.users_image, userObj.users_summary, userObj.users_address, userObj.users_profile, userObj.users_status, userObj.users_language);
            //Unset user session on server
            $http.get(Domain + "api/public/users/logout/" + $scope.user.getId())
                .then(function(response) {
                    $scope.users = response.data;
                });
            sessionStorage.removeItem("userLogged");
            //window.open(Domain, "_self");
        };
    }]);
})();