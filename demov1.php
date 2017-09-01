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
<body ng-app="main" ng-controller="searchController">
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
          <!-- <a class="start-button " href="{{demo_url}}"> Let's get started <i class="fa fa-icon fa-long-arrow-right green-text"></i> </a> -->
        </p>
       </div>
      </div>
    </div>
</section>

<section class="intro">
    <div class="container">
     <div class="row">
       <div class="col-lg-6 text-center">
        <h3 class="big"> Enter 6 dishes you like.</h3>
        <input class="search-box" placeholder="Example: Butter Chicken, Pasta" autocomplete="off" ng-model="search" ng-change="searchDishes(0)"  ng-blur="hideDropdown()"></input>
        <span class="tt-dropdown-menu"  ng-show="showResult">

                <div class="tt-dataset-2" style="display: block;">
                  <span class="tt-suggestions" style="display: block;">
                    <div class="tt-suggestion" style="white-space: nowrap; cursor: pointer;" ng-repeat="x in dishes| limitTo:7" ng-class="{'tt-is-under-cursor': hover}" ng-mouseenter="hover = true" ng-mouseleave="hover = false" ng-click="favsAdd(x)">


                      <p style="white-space: normal; text-align: left; color:#444;font-size:0.9em; " ng-cloak>{{x.dish_name}}
                        <span class="full-right" style="float:left;margin-right:20px;" ng-if="x.dish_nature == 1 || x.dish_nature == 4 "> <img class="" style="max-width:17px; opacity: 0.7;filter: alpha(opacity=70);" src="images/veg.png">
                        </span>
                        <span class="full-right" style="float:left;margin-right:20px;" ng-if="x.dish_nature == 2"> <img style="max-width:17px;opacity: 0.7;filter: alpha(opacity=70);" class="" src="images/egg.png">
                        </span>
                        <span class="full-right" style="float:left;margin-right:20px;" ng-if="x.dish_nature == 3"> <img style="max-width:17px;opacity: 0.7;filter: alpha(opacity=70);" class="" src="images/non-veg.png">
                        </span>
                      </p>
                    </div>

                  </span>
                </div>
              </span>
        <h4 class="mid"> <span class="count"> {{favCount}} </span>  {{fav_text}}  </h4>

        <div class="tag-box">
          <span class="tags" ng-repeat="f in fav"> {{f.dish_name}}  <a  class="close-x" ng-click="del_fav($index)">x</a></span>
        </div>

       </div>
       <div class="col-lg-6 text-center">
        <h3 class="big"> Enter the dishes you dislike.</h3>
        <input class="search-box" placeholder="Example: Butter Chicken, Pasta" autocomplete="off" ng-model="search_d" ng-change="searchDishes(1)"  ng-blur="hideDropdown_d()"></input>
        <span class="tt-dropdown-menu"  ng-show="showResult_d">
                <div class="tt-dataset-2" style="display: block;">
                  <span class="tt-suggestions" style="display: block;">
                    <div class="tt-suggestion" style="white-space: nowrap; cursor: pointer;" ng-repeat="y in dishes| limitTo:7" ng-class="{'tt-is-under-cursor': hover}" ng-mouseenter="hover = true" ng-mouseleave="hover = false" ng-click="dislikeAdd(y)">
                      <p style="white-space: normal; text-align: left; color:#444;font-size:0.9em; " ng-cloak>{{y.dish_name}}
                        <span class="full-right" style="float:left;margin-right:20px;" ng-if="y.dish_nature == 1 || y.dish_nature == 4 "> <img class="" style="max-width:17px; opacity: 0.7;filter: alpha(opacity=70);" src="images/veg.png">
                        </span>
                        <span class="full-right" style="float:left;margin-right:20px;" ng-if="y.dish_nature == 2"> <img style="max-width:17px;opacity: 0.7;filter: alpha(opacity=70);" class="" src="images/egg.png">
                        </span>
                        <span class="full-right" style="float:left;margin-right:20px;" ng-if="y.dish_nature == 3"> <img style="max-width:17px;opacity: 0.7;filter: alpha(opacity=70);" class="" src="images/non-veg.png">
                        </span>
                      </p>
                    </div>

                  </span>
                </div>
              </span>
        <h4 class="mid">  {{dislike_text}}<span class="count"> {{dislikeCount}}</span>   </h4>
        <div class="tag-box">
          <span class="tags" ng-repeat="d in dislikes"> {{d.dish_name}} <a  class="close-x" ng-click="del_dislikes($index)">x</a></span>
        </div>

       </div>
        <div class="col-lg-12 text-center">
          <a href="" class="btn btn-primary go-button" ng-disabled="go" ng-click="personalise()"> Generate personalised menu</a>
        </div>
    </div>
    </div>
</section>

<section class="intro" ng-show="menu">
    <div class="container">
     <div class="row row-fluid">
       <div class="col-lg-12 text-center">
         <h1 class="big green-text"> Your personalised menu</h1>
       </div>

        <div class="row">
           <div class="col-lg-6">
       <h3 class="big " style="width:100%;"> {{rest1_name}}</h3>
       <div class="col-lg-12" ng-repeat="r1 in rest1">
         <div class="white-card">
           <div class="card-title">
             <div class="row">
             <div class="col-lg-9 bound">
             <h3 class="dish"> <span class="num">{{$index+1}}. </span> {{r1.name}}  </h3>
            </div>
            <div class=" col-lg-3 bound text-center" >
              <p class="a-num"> {{r1.match_score.aggregated_score | number : 0}}</p>
              <p class="a-text"> Aggregate</p>
            </div>
           </div>
           </div>
           <div class="card-area">
             <table cellspacing="0" cellpadding="0" class="t-dish" style="width:100%">
               <tr>
                 <td class="first" width="40%"><p class="match">Flavour category distribution matchscore </td>
                 <td class="second"><div class="progress">
                   <div class="progress-bar green-bar" role="progressbar" aria-valuenow="70"
                   aria-valuemin="0" aria-valuemax="100" style="width:{{r1.match_score.flavor_category_distribution_match_score * 100 | number : 0}}%">

                    </div>
                  </div>
                </td>
               </tr>
               <tr>
                 <td class="first" width="40%"><p class="match">Ingredient pair  matchscore </td>
                 <td class="second"><div class="progress">
                   <div class="progress-bar green-bar" role="progressbar" aria-valuenow="70"
                   aria-valuemin="0" aria-valuemax="100" style="width:{{r1.match_score.ingredient_pair_match_score * 100 | number : 0}}%">
                    </div>
                  </div>
                </td>
               </tr>
               <tr>
                 <td class="first" width="40%"><p class="match">Ingredient cooking style matchscore  </td>
                 <td class="second"><div class="progress">
                   <div class="progress-bar green-bar" role="progressbar" aria-valuenow="70"
                   aria-valuemin="0" aria-valuemax="100" style="width:{{r1.match_score.ingredient_cooking_style_match_score * 100 | number : 0}}%">

                    </div>
                  </div>
                </td>
               </tr>
               <tr>
                 <td class="first" width="40%"><p class="match">Ingredient Matchscore </td>
                 <td class="second"><div class="progress">
                   <div class="progress-bar green-bar" role="progressbar" aria-valuenow="70"
                   aria-valuemin="0" aria-valuemax="100" style="width:{{r1.match_score.ingredient_match_score * 100 | number : 0}}%">

                    </div>
                  </div>
                </td>
               </tr>
             </table>
           </div>
         </div>
       </div>
       </div>
       <div class="col-lg-6">
        <h3 class="big " style="width:100%;"> {{rest2_name}}</h3>

       <div class="col-lg-12" ng-repeat="r2 in rest2">
         <div class="white-card">
           <div class="card-title">
             <div class="row">
             <div class="col-lg-9 bound">
             <h3 class="dish"> <span class="num">{{$index+1}}. </span> {{r2.name}}  </h3>
            </div>
            <div class=" col-lg-3 bound text-center" >
              <p class="a-num"> {{r2.match_score.aggregated_score | number : 0}}</p>
              <p class="a-text"> Aggregate</p>
            </div>
           </div>
           </div>
           <div class="card-area">
             <table cellspacing="0" cellpadding="0" class="t-dish" style="width:100%">
               <tr>
                 <td class="first" width="40%"><p class="match">Flavour category distribution matchscore </td>
                 <td class="second"><div class="progress">
                   <div class="progress-bar green-bar" role="progressbar" aria-valuenow="70"
                   aria-valuemin="0" aria-valuemax="100" style="width:{{r2.match_score.flavor_category_distribution_match_score * 100 | number : 0}}%">

                    </div>
                  </div>
                </td>
               </tr>
               <tr>
                 <td class="first" width="40%"><p class="match">Ingredient pair  matchscore </td>
                 <td class="second"><div class="progress">
                   <div class="progress-bar green-bar" role="progressbar" aria-valuenow="70"
                   aria-valuemin="0" aria-valuemax="100" style="width:{{r2.match_score.ingredient_pair_match_score * 100 | number : 0}}%">

                    </div>
                  </div>
                </td>
               </tr>
               <tr>
                 <td class="first" width="40%"><p class="match">Ingredient cooking style matchscore  </td>
                 <td class="second"><div class="progress">
                   <div class="progress-bar green-bar" role="progressbar" aria-valuenow="70"
                   aria-valuemin="0" aria-valuemax="100" style="width:{{r2.match_score.ingredient_cooking_style_match_score * 100 | number : 0}}%">

                    </div>
                  </div>
                </td>
               </tr>
               <tr>
                 <td class="first" width="40%"><p class="match">Ingredient Matchscore </td>
                 <td class="second"><div class="progress">
                   <div class="progress-bar green-bar" role="progressbar" aria-valuenow="70"
                   aria-valuemin="0" aria-valuemax="100" style="width:{{r2.match_score.ingredient_match_score * 100 | number : 0}}%">

                    </div>
                  </div>
                </td>
               </tr>
             </table>
           </div>
         </div>
       </div>
       </div>



     </div>
     </div>
     <!-- <div class="row">
       <div class="col-lg-6">
         <div class="white-card">
           <div class="card-title">
             <div class="row">
             <div class="col-lg-9 bound">
             <h3 class="dish"> <span class="num">1. </span> Dish name  </h3>
            </div>
            <div class=" col-lg-3 bound text-center">
              <p class="a-num"> 362</p>
              <p class="a-text"> Aggregate</p>
            </div>
           </div>
           </div>
           <div class="card-area">
             <table cellspacing="0" cellpadding="0" class="t-dish" style="width:100%">
               <tr>
                 <td class="first" width="40%"><p class="match">Flavour category distribution matchscore </td>
                 <td class="second"><div class="progress">
                   <div class="progress-bar green-bar" role="progressbar" aria-valuenow="70"
                   aria-valuemin="0" aria-valuemax="100" style="width:70%">
                    </div>
                  </div>
                </td>
               </tr>
               <tr>
                 <td class="first" width="30%"><p class="match">Ingredient pair  matchscore </td>
                 <td class="second"><div class="progress">
                   <div class="progress-bar green-bar" role="progressbar" aria-valuenow="70"
                   aria-valuemin="0" aria-valuemax="100" style="width:80%">
                    </div>
                  </div>
                </td>
               </tr>
               <tr>
                 <td class="first" width="30%"><p class="match">Ingredient cooking style matchscore </td>
                 <td class="second"><div class="progress">
                   <div class="progress-bar green-bar" role="progressbar" aria-valuenow="70"
                   aria-valuemin="0" aria-valuemax="100" style="width:30%">
                    </div>
                  </div>
                </td>
               </tr>
               <tr>
                 <td class="first" width="30%"><p class="match">Ingredient Matchscore </td>
                 <td class="second"><div class="progress">
                   <div class="progress-bar green-bar" role="progressbar" aria-valuenow="70"
                   aria-valuemin="0" aria-valuemax="100" style="width:66%">
                    </div>
                  </div>
                </td>
               </tr>

             </table>
           </div>
         </div>
       </div>


    </div> -->
    </div>
</section>



<div class="modal fade" id="myModal" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg">

      <!-- Modal content-->
      <div class="modal-content">

        <div class="modal-body">
          <h1 class="mod-text"> Please wait while we create your personalised menu.</h1>
          <p class="text-center"><img src="images/dishq-loader.gif"></p>
        </div>

      </div>

    </div>
  </div>

<div class="" style="bottom:0px; margin-top:20%; ">
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
       app.controller('searchController', function($scope, $http, $timeout) {


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

        var restaurant;
        var restaurant_id;
        var id = 0;
        $scope.fav_text = 'more to go';
        $scope.dislike_text = 'Need atleast';
        $scope.slug = getParameterByName('slug', '');
        $scope.go = true;
        $scope.showResult = false;
        $scope.fav = [];
        $scope.favCount = 6;
        $scope.dislikeCount = 1;
        $scope.dislikes = [];
        $scope.dishes = [];
        $scope.isOpen = true;
        $scope.searchterm = '';
          $scope.rest1 = [];
          $scope.rest2 = [];
          $scope.rest1_name = '';
          $scope.rest2_name = '';
          $scope.menu = false;
          $scope.searchDishes = function(h){
          if(h == 0){
            var url = "api/get_dishes.php?q="+$scope.search;
          }else{
            var url = "api/get_dishes.php?q="+$scope.search_d;
          }

          $http({
              method: 'get',
              url: url
          }).
           success(function(status) {
              var data = status.data;

           if(data.length > 0){
              $scope.dishes = data;
           }
           if(id == 0){
              if(h == 0){
                setTimeout(suggest($scope.dishes), 10 );
              }else{
                setTimeout(suggest_d($scope.dishes), 10 );

              }
             }

          }).
          error(function(status) {
          // console.log(status);

          });
      }

      $scope.favsAdd = function(data){
        var newEntry = 0;
        for (var i = 0; i < $scope.fav.length; i++) {

          if($scope.fav[i].generic_dish_id == data.generic_dish_id){
            newEntry++;

          }
        }
        if(newEntry==0){
        $scope.fav.push(data);
        $scope.favCount--;
        $scope.check();
        }
        clear();
        $scope.hideDropdown();
      }
      $scope.dislikeAdd = function(data){
        var newEntry = 0;
        for (var i = 0; i < $scope.dislikes.length; i++) {
          if($scope.dislikes[i].generic_dish_id == data.generic_dish_id){
            newEntry++;
          }
        }
        if(newEntry==0){
          $scope.dislikes.push(data);
          $scope.dislikeCount--;
          $scope.check();
        }
          clear();
          $scope.hideDropdown_d();
      }

      function suggest(dishes){
        $scope.suggest = dishes;
        $scope.showResult = true;
        $scope.isHideBrand = true;
       }
       function suggest_d(dishes){
         $scope.suggest_d = dishes;
         $scope.showResult_d = true;
         $scope.isHideBrand = true;
        }

       $scope.del_fav = function(index){
        $scope.fav.splice(index, 1);
        $scope.favCount++;
        $scope.check();
       }
       $scope.del_dislikes = function(index){
        $scope.dislikes.splice(index, 1);
        $scope.dislikeCount++;
        $scope.check();
       }

      function clear(){
          id = 0;
          $scope.search = '';
          $scope.search_d = '';
          $scope.dishes = [];
       }


      $scope.hideDropdown = function(){
        $timeout(function() {
           // console.log('new');
       $scope.showResult = false;
       $scope.isHideBrand = true;
       $scope.$digest();
     }, 300);

      }
      $scope.hideDropdown_d = function(){
        $timeout(function() {
           // console.log('new');
       $scope.showResult_d = false;
       $scope.isHideBrand = true;
       $scope.$digest();
     }, 300);

      }

      $scope.check = function(){
        if ($scope.fav.length >= 6 && $scope.dislikes.length >= 1){
          $scope.go = false;
        }else{
          $scope.go = true;
        }
        $scope.favCount = 6 - $scope.fav.length;
        $scope.dislikeCount = 1 - $scope.dislikes.length;

        if ($scope.fav.length >= 6){
          $scope.fav_text = 'You are free to select more';
          $scope.favCount = '';
        }else{
          $scope.fav_text = 'more to go';
        }
        if ($scope.dislikes.length >= 1){
          $scope.dislike_text = 'You are free to select more';
          $scope.dislikeCount = '';
        }else{
          $scope.dislike_text = 'Need atleast';
        }



      }

      $scope.personalise = function(){
        if ($scope.fav.length >= 6 && $scope.dislikes.length >= 1){
          $scope.update();
        }else{

        }

      }

      $scope.update = function() {

        $('#myModal').modal('show');
        var fav = []
        var dislike = [];
        for (var i = 0; i < $scope.fav.length; i++) {
          var item = $scope.fav[i];
          fav.push(item.generic_dish_id);

        }
        for (var i = 0; i < $scope.dislikes.length; i++) {
          var item = $scope.dislikes[i];
          dislike.push(item.generic_dish_id);
        }

        var slug = $scope.slug;
        var url = 'api/update_profile.php?slug='+$scope.slug+'/';
        var parameter = JSON.stringify({fav:fav, dislike: dislike});


        $http.post(url, parameter).then(function successCallback(response){
            if(response.status == 200){
              $timeout(function() {
                $scope.get_recommendations();
            }, 10400);

            }else{

            }
        }, function errorCallback(response) {
            console.log(response);
        });


      }


      $scope.get_recommendations = function(){
        console.log('calling');
        var url = 'api/recommendations.php?slug='+$scope.slug+'/';

        $http.get(url).then(function successCallback(response){
            var new_data = response.data;
            if(response.status == 200){
              if(new_data.data.length == 0){

                $timeout(function() {
                    $scope.get_recommendations();
              }, 2500);

              }else{
                $('#myModal').modal('hide');
                $scope.menu = true;
                window.scrollBy(0,500);
                if(new_data.data[0].menu.length > 0){
                  $scope.rest1 = new_data.data[0].menu;
                  $scope.rest1_name = new_data.data[0].name;
                }
                if(new_data.data[1].menu.length > 0){
                  $scope.rest2 = new_data.data[1].menu;
                  $scope.rest2_name = new_data.data[1].name;
                }
              }



            }else{

            }
        }, function errorCallback(response) {
            console.log(response);
        });

      }

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
