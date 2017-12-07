(function(){
    angular.module("buscoPiso").controller("ResetPasswordController", ['$scope', '$http', '$translate', 'Domain', '$window', function($scope, $http, $translate, Domain, $window) {
        
        $scope.register = Domain + "views/registerForm.html";

    }]);
})();