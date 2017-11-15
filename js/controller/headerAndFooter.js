(function(){
    angular.module("buscoPiso").controller("HeaderAndFooterController", ['$scope', '$http', '$translate', 'Domain', '$window', function($scope, $http, $translate, Domain, $window) {

        $scope.index    = Domain;
        $scope.login    = Domain + "views/login.html";
        $scope.mainPage = Domain + "views/mainPage.html";
        $scope.services = Domain + "views/services.html";
        $scope.contact  = Domain + "views/contact.html";
        $scope.faq      = Domain + "views/faq.html";

    }]);
})();