(function(){
    angular.module("buscoPiso").controller("registerFormController", ['$scope', '$http', '$translate', 'Domain', 'accessService', function ($scope, $http, $translate, Domain, accessService) {
     
  	 //jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

$(".next").click(function(){
  if(animating) return false;
  animating = true;
  
  current_fs = $(this).parent();
  next_fs = $(this).parent().next();
  
  //activate next step on progressbar using the index of next_fs
  $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
  
  //show the next fieldset
  next_fs.show(); 
  //hide the current fieldset with style
  current_fs.animate({opacity: 0}, {
    step: function(now, mx) {
      //as the opacity of current_fs reduces to 0 - stored in "now"
      //1. scale current_fs down to 80%
      scale = 1 - (1 - now) * 0.2;
      //2. bring next_fs from the right(50%)
      left = (now * 50)+"%";
      //3. increase opacity of next_fs to 1 as it moves in
      opacity = 1 - now;
      current_fs.css({
        'transform': 'scale('+scale+')',
        'position': 'absolute'
      });
      next_fs.css({'left': left, 'opacity': opacity});
    }, 
    duration: 800, 
    complete: function(){
      current_fs.hide();
      animating = false;
    }, 
    //this comes from the custom easing plugin
    easing: 'easeInOutBack'
  });
});

$(".previous").click(function(){
  if(animating) return false;
  animating = true;
  
  current_fs = $(this).parent();
  previous_fs = $(this).parent().prev();
  
  //de-activate current step on progressbar
  $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
  
  //show the previous fieldset
  previous_fs.show(); 
  //hide the current fieldset with style
  current_fs.animate({opacity: 0}, {
    step: function(now, mx) {
      //as the opacity of current_fs reduces to 0 - stored in "now"
      //1. scale previous_fs from 80% to 100%
      scale = 0.8 + (1 - now) * 0.2;
      //2. take current_fs to the right(50%) - from 0%
      left = ((1-now) * 50)+"%";
      //3. increase opacity of previous_fs to 1 as it moves in
      opacity = 1 - now;
      current_fs.css({'left': left});
      previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
    }, 
    duration: 800, 
    complete: function(){
      current_fs.hide();
      animating = false;
    }, 
    //this comes from the custom easing plugin
    easing: 'easeInOutBack'
  });
});

/*Angular code*/
//Scope variables
$scope.regularExpressionPhone = "Prueba de variable de angular";
$scope.passwordValidation = false;
$scope.password="";
$scope.repeatPassword="";
$scope.stateType= ["Pisos", "Oficinas", "Garages", "Trasteros", "Terrenos"];
$scope.arrayAutonomousCommunities=[];
$scope.arrayAdditionalFeatures=[];
$scope.arrayTypeOfContract=[];
$scope.selectedState="";
$scope.selectedProvince="";
$scope.additionalFeatures = new AdditionalFeatures();

//Methods
this.selectState = function () {

      switch($scope.selectedState){
        case "Pisos": $scope.arrayAdditionalFeatures=["Aire acondicionado", "Armario empotrado", "Ascensor", "Exterior", "Parking", "Jardín", "Piscina", "Terraza", "Trastero", "Zona comunitaria", "Trastero"]; break;
        case "Oficinas": $scope.arrayAdditionalFeatures=["Agua caliente", "Aire acondicionado", "Ascensor", "Calefacción", "Exterior", "Parking", "Seguridad"]; break;
        case "Garages": $scope.arrayAdditionalFeatures=["Plaza de moto", "Puerta automática", "Seguridad"]; break;
        case "Trasteros": $scope.arrayAdditionalFeatures=["Aire acondicionado", "Calefacción", "Esquinero", "Salida de humos"]; break;
        case "Terrenos": $scope.arrayAdditionalFeatures=["Aire acondicionado", "Calefacción", "Esquinero", "Salida de humos"]; break;
      }

      $http.get(Domain + 'api/public/estates/features/' + $scope.selectedState).then(function (response) {

      });

      $http.get(Domain + 'api/public/typeOfContract').then(function (response) {
            for(var i=0; i<response.data.length; i++){
              $scope.typeOfContract= new TypeOfContract();
              $scope.typeOfContract.construct(response.data[i]["idtype_of_contract"],response.data[i]["name"]);
              $scope.arrayTypeOfContract.push($scope.typeOfContract);
            }
        });

      $http.get(Domain + 'api/public/autonomousCommunities').then(function (response) {
            for(var i=0; i<response.data.length; i++){
              $scope.autonomousCommunities= new AutonomousCommunity();
              $scope.autonomousCommunities.construct(response.data[i]["idautonomous_communities"],response.data[i]["name"],response.data[i]["countries_idcountries"]);
              $scope.arrayAutonomousCommunities.push($scope.autonomousCommunities);
            }
        });
    };
this.selectProvince = function (selectedAutonomousCommunity) {
      $http.get(Domain + 'api/public/provinces/' + selectedAutonomousCommunity).then(function (response) {
              $scope.arrayProvinces=[];
              for(var i=0; i<response.data.length; i++){
              $scope.provinces= new Province();
              $scope.provinces.construct(response.data[i]["idprovinces"],response.data[i]["name"],response.data[i]["idautonomous_communities"]);
              $scope.arrayProvinces.push($scope.provinces);
            }            
        });
    };
this.selectMunicipality = function (selectedProvince) {
      $http.get(Domain + 'api/public/municipalities/' + selectedProvince).then(function (response) {
              $scope.arrayMunicipalities=[];
              for(var i=0; i<response.data.length; i++){
              $scope.municipalities= new Municipality();
              $scope.municipalities.construct(response.data[i]["idmunicipalities"],response.data[i]["provinces_idprovinces"],response.data[i]["idautonomous_communities"],response.data[i]["dc"],response.data[i]["name"]);
              $scope.arrayMunicipalities.push($scope.municipalities);
            }
            $scope.selectedProvince = selectedProvince;
        });
    };
        this.validateRegisterForm = function () {
    //Llamada de ajax para registrar al usuario en la base de datos.
    $.ajax({
        type: 'POST',
        async: false,
        url: Domain + 'api/public/users/register/',
        data: {
            'name': $scope.name,
            'firstname': $scope.firstName,
            'lastname': $scope.lastName,
            'phone': $scope.phone,
            'email': $scope.email,
            'password': $scope.password,
            'repeatPassword': $scope.confirmPassword            
        },
        success: function (msg) {
            alert('wow' + msg);
        }
    });

    };
  }]);
/********************************************************************************************************************************************************************/
  angular.module('buscoPiso').directive("locationRegisterFormView", function (){
    return {
      restrict: 'E',
      templateUrl:"location-register-form-view.html",
      controller:function(){

      },
      controllerAs: 'locationRegisterFormView'
    };
  });

  angular.module('buscoPiso').directive("floorsRegisterFormView", function (){
    return {
      restrict: 'E',
      templateUrl:"floors-register-form-view.html",
      controller:function(){

      },
      controllerAs: 'floorsRegisterFormView'
    };
  });

  angular.module('buscoPiso').directive("officesRegisterFormView", function (){
    return {
      restrict: 'E',
      templateUrl:"offices-register-form-view.html",
      controller:function(){

      },
      controllerAs: 'officesRegisterFormView'
    };
  });

  angular.module('buscoPiso').directive("additionalFeaturesRegisterFormView", function (){
    return {
      restrict: 'E',
      templateUrl:"additional-features-register-form-view.html",
      controller:function(){

      },
      controllerAs: 'additionalFeaturesRegisterFormView'
    };
  });
})();