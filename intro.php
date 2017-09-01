<?php
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'meta.php';?>
<link href="css/demo.min.css" rel="stylesheet">
<link href="css/typeahead.min.css" rel="stylesheet">
<style>
body{
  background: #f1f4f9;
}
</style>
<body ng-app="main" ng-controller="introController">
<?php include 'header.php';?>

<section class="intro">
    <div class="container">
     <div class="row">
       <div class="col-lg-12 text-center">
        <h1 class="big bold-text green-text"> Welcome</h1>
       </div>
       <div class="col-lg-12 ">
        <p class="general-text"> A typical restaurant's menu is often compounded. Seeing a list of dishes that a user may or may not prefer is uninspiring
        in making proper choices. Below, we share menus of two restaurants (Indian and International restaurants)</p>
       </div>
        </div>
        <div class="row">
       <div class="col-md-6">
         <h3 class="mid text-center"> Indian restaurant</h3>
         <div class="menu-box ">
           <div class="menu" >
            <h3 class="menu-title"> Starters  </h3>
            <hr class="small-line">
            <ul class="menu-list">
              <li class="" ng-repeat="starter in indian.Starters">
                  <img class="" ng-if="starter.dish_nature == 1 || starter.dish_nature == 4" style="margin-right:20px;max-width:17px; opacity: 0.7;filter: alpha(opacity=70);" src="images/veg.png">
                  <img class="" ng-if="starter.dish_nature == 3" style="margin-right:20px;max-width:17px; opacity: 0.7;filter: alpha(opacity=70);" src="images/non-veg.png">
                  <img class="" ng-if="starter.dish_nature == 2" style="margin-right:20px;max-width:17px; opacity: 0.7;filter: alpha(opacity=70);" src="images/egg.png">
                 {{starter.name}}</li>
            </ul>

            <h3 class="menu-title"> Mains  </h3>
            <hr class="small-line">
            <ul class="menu-list">
              <li class="" ng-repeat="main in indian.Mains">
                <img class="" ng-if="main.dish_nature == 1 || main.dish_nature == 4" style="margin-right:20px;max-width:17px; opacity: 0.7;filter: alpha(opacity=70);" src="images/veg.png">
                <img class="" ng-if="main.dish_nature == 3" style="margin-right:20px;max-width:17px; opacity: 0.7;filter: alpha(opacity=70);" src="images/non-veg.png">
                <img class="" ng-if="main.dish_nature == 2" style="margin-right:20px;max-width:17px; opacity: 0.7;filter: alpha(opacity=70);" src="images/egg.png">
                 {{main.name}}</li>
            </ul>

            <h3 class="menu-title"> Sides  </h3>
            <hr class="small-line">
            <ul class="menu-list">
              <li class="" ng-repeat="side in indian.Sides">
                <img class="" ng-if="side.dish_nature == 1 || side.dish_nature == 4" style="margin-right:20px;max-width:17px; opacity: 0.7;filter: alpha(opacity=70);" src="images/veg.png">
                <img class="" ng-if="side.dish_nature == 3" style="margin-right:20px;max-width:17px; opacity: 0.7;filter: alpha(opacity=70);" src="images/non-veg.png">
                <img class="" ng-if="side.dish_nature == 2" style="margin-right:20px;max-width:17px; opacity: 0.7;filter: alpha(opacity=70);" src="images/egg.png">
                {{side.name}}</li>
            </ul>

            <h3 class="menu-title"> Desserts  </h3>
            <hr class="small-line">
            <ul class="menu-list">
              <li class="" ng-repeat="dessert in indian.Desserts">
                <img class="" ng-if="dessert.dish_nature == 1 || dessert.dish_nature == 4" style="margin-right:20px;max-width:17px; opacity: 0.7;filter: alpha(opacity=70);" src="images/veg.png">
                <img class="" ng-if="dessert.dish_nature == 3" style="margin-right:20px;max-width:17px; opacity: 0.7;filter: alpha(opacity=70);" src="images/non-veg.png">
                <img class="" ng-if="dessert.dish_nature == 2" style="margin-right:20px;max-width:17px; opacity: 0.7;filter: alpha(opacity=70);" src="images/egg.png">
                 {{dessert.name}}</li>
            </ul>

            <h3 class="menu-title"> Drinks  </h3>
            <hr class="small-line">
            <ul class="menu-list">
              <li class="" ng-repeat="drink in indian.Drinks">
                <img class="" ng-if="drink.dish_nature == 1 || drink.dish_nature == 4" style="margin-right:20px;max-width:17px; opacity: 0.7;filter: alpha(opacity=70);" src="images/veg.png">
                <img class="" ng-if="drink.dish_nature == 3" style="margin-right:20px;max-width:17px; opacity: 0.7;filter: alpha(opacity=70);" src="images/non-veg.png">
                <img class="" ng-if="drink.dish_nature == 2" style="margin-right:20px;max-width:17px; opacity: 0.7;filter: alpha(opacity=70);" src="images/egg.png">
                {{drink.name}}</li>
            </ul>
           </div>
         </div>
       </div>
       <div class="col-md-6">
         <h3 class="mid text-center"> International restaurant</h3>
         <div class="menu-box ">
           <div class="menu" >
            <h3 class="menu-title"> Starters  </h3>
            <hr class="small-line">
            <ul class="menu-list">
              <li class="" ng-repeat="starter_int in international.Starters">
                <img class="" ng-if="starter_int.dish_nature == 1 || starter_int.dish_nature == 4" style="margin-right:20px;max-width:17px; opacity: 0.7;filter: alpha(opacity=70);" src="images/veg.png">
                <img class="" ng-if="starter_int.dish_nature == 3" style="margin-right:20px;max-width:17px; opacity: 0.7;filter: alpha(opacity=70);" src="images/non-veg.png">
                <img class="" ng-if="starter_int.dish_nature == 2" style="margin-right:20px;max-width:17px; opacity: 0.7;filter: alpha(opacity=70);" src="images/egg.png">
                 {{starter_int.name}}</li>
            </ul>

            <h3 class="menu-title"> Mains  </h3>
            <hr class="small-line">
            <ul class="menu-list">
              <li class="" ng-repeat="main_int in international.Mains">
                <img class="" ng-if="main_int.dish_nature == 1 || main_int.dish_nature == 4" style="margin-right:20px;max-width:17px; opacity: 0.7;filter: alpha(opacity=70);" src="images/veg.png">
                <img class="" ng-if="main_int.dish_nature == 3" style="margin-right:20px;max-width:17px; opacity: 0.7;filter: alpha(opacity=70);" src="images/non-veg.png">
                <img class="" ng-if="main_int.dish_nature == 2" style="margin-right:20px;max-width:17px; opacity: 0.7;filter: alpha(opacity=70);" src="images/egg.png">
                {{main_int.name}}</li>
            </ul>



            <h3 class="menu-title"> Desserts  </h3>
            <hr class="small-line">
            <ul class="menu-list">
              <li class="" ng-repeat="dessert_int in international.Desserts">
                <img class="" ng-if="dessert_int.dish_nature == 1 || dessert_int.dish_nature == 4" style="margin-right:20px;max-width:17px; opacity: 0.7;filter: alpha(opacity=70);" src="images/veg.png">
                <img class="" ng-if="dessert_int.dish_nature == 3" style="margin-right:20px;max-width:17px; opacity: 0.7;filter: alpha(opacity=70);" src="images/non-veg.png">
                <img class="" ng-if="dessert_int.dish_nature == 2" style="margin-right:20px;max-width:17px; opacity: 0.7;filter: alpha(opacity=70);" src="images/egg.png">
                 {{dessert_int.name}}</li>
            </ul>

            <h3 class="menu-title"> Drinks  </h3>
            <hr class="small-line">
            <ul class="menu-list">
              <li class="" ng-repeat="drink_int in international.Drinks">
                <img class="" ng-if="drink_int.dish_nature == 1 || drink_int.dish_nature == 4" style="margin-right:20px;max-width:17px; opacity: 0.7;filter: alpha(opacity=70);" src="images/veg.png">
                <img class="" ng-if="drink_int.dish_nature == 3" style="margin-right:20px;max-width:17px; opacity: 0.7;filter: alpha(opacity=70);" src="images/non-veg.png">
                <img class="" ng-if="drink_int.dish_nature == 2" style="margin-right:20px;max-width:17px; opacity: 0.7;filter: alpha(opacity=70);" src="images/egg.png">
                {{drink_int.name}}</li>
            </ul>
           </div>
         </div>
       </div>
       <div class="col-lg-12 ">
        <p class="general-text"> At dishq, we ensure that every meal is delicious by making smart food recommendatios.
          Simply put dishq is personalised food discovery platform that diner trust</p>
          <p class="general-text"> Let us show you how we make our recommendations that caters the need of every user in a unique fashion.</p>
          <p class="text-center">
          <a class="start-button " href="{{demo_url}}"> Let's get started <i class="fa fa-icon fa-long-arrow-right green-text"></i> </a>
        </p>
       </div>
      </div>
    </div>
</section>





<div class="" >
<?php include 'footer.php';?>
</div>
<script
  src="https://code.jquery.com/jquery-1.12.4.min.js"
  integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
  crossorigin="anonymous"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script>
    $(".playstore").fadeIn();
</script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>

<script>
       var app = angular.module('main', []);
       app.controller('introController', function($scope, $http, $timeout) {
       $scope.indian = [];
       $scope.slug=getParameterByName('slug', '');
       $scope.demo_url = 'demo.php?slug='+$scope.slug;
       $scope.international = [];
       $scope.searchMenu = function(){
            var url = "api/get_restaurant.php?q="+$scope.search;
          $http({
              method: 'get',
              url: url
          }).
           success(function(status) {
              var data = status.data;
              $scope.indian = data[0].menu;
              $scope.international = data[1].menu;
              console.log($scope.international);
          }).
          error(function(status) {
          // console.log(status);
          });
      }

       $scope.searchMenu();

      function getParameterByName(name) {
      url = window.location.href;
      name = name.replace(/[\[\]]/g, "\\$&");
      var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
          results = regex.exec(url);
      if (!results) return null;
      if (!results[2]) return '';
      return decodeURIComponent(results[2].replace(/\+/g, " "));
      }

});




  </script>
</body>
</html>
