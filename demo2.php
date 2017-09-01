<?php
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'meta.php';?>
<link href="css/demo.min.css" rel="stylesheet">
<link href="css/demo1.css" rel="stylesheet">

<link href="css/typeahead.min.css" rel="stylesheet">
<style>
body{
  background: #f1f4f9;
}
</style>
<body ng-app="main" ng-controller="searchController">
<?php include 'header.php';?>


    <div class="container">
     <div class="row">
       <div class="col-lg-6 col-lg-offset-3 ">
         <div class="feature-showcase-android text-center" >
          <iframe src="{{p_url}}" class="lazy-hidden"></iframe>
        </div>
       </div>
     </div>
    </div>



  <!-- <div class="feature-showcase">
        <div class="feature-showcase-android">
          <iframe src="https://onsenui.github.io/showcase-todo/?platform=android" class="lazy-hidden"></iframe>
        </div>

        <div class="feature-showcase-ios">
          <iframe src="https://onsenui.github.io/showcase-todo/" class="lazy-hidden"></iframe>
        </div>
      </div> -->





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
         $scope.p_url = 'http://localhost/mob_demo/personalise.html?slug='+$scope.slug;
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
