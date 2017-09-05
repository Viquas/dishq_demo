<?php
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'meta.php';?>
<link href="css/demo.css" rel="stylesheet">
<link href="css/demo_new.css" rel="stylesheet">
<link href="css/typeahead.css" rel="stylesheet">

<body ng-app="ngAnimate" ng-controller="searchController" >
<?php include 'header.php';?>


<section class="demo_one" id="sec1" >
  <div class="container">
    <div class="row">
       <div class="col-sm-12" >
         <h1 class="big bold-text green-text">Welcome</h1>
         <p class="general-text text-center"> A typical restaurant's menu is often compounded. Seeing a list of dishes that a user may or may not prefer is uninspiring
        in making proper choices. Below, we share menus of two restaurants (Indian and International restaurants)
        <br/>
        <b>More Context goes here</b>
      </p>
      <p class="text-center">
        <a href="" class="btn g-button" ng-click="start();"> Let's get started </a>
      </p>
       </div>
      </div>
   </div>
</section>

<section class="demo_section" id="sec2">
  <div class="container-fluid">
    <div class="row">
       <div class="col-md-4 col-sm-12 " id="blur1">
         <div class="left-section" id="left">
           <div class="box-1"  >
           <div class="toolbox r">
            <p class="message-box ">
              Scroll the menu type to select the dish types.<br/><br/>
            </p>
              <span class="next " ng-click="step3();" id="next1">Next </span>
          </div>
          </div>

          <div class="help">
            <p class="help-msg" id="help1">
              <b>HELP MESSAGE HERE</b><br/>
              Lorem Ipsumm Neque porro quisquam est qui
               dolorem ipsum quia dolor sit amet,
               consectetur, adipisci velit...
               <br/>
               <br/>

               Lorem Ipsumm Neque porro quisquam est qui
                dolorem ipsum quia dolor sit amet,
                consectetur, adipisci velit...
            </p>
            <p class="text-center" >
              <span class="help-msg" id="p_text">
                If you are done playing around<br/>
                <br/>
                <br/>
              </span>
              <a href="" class="btn g-button hide_now" ng-click="step4();"  id="p_button"> Let's personalise </a>
            </p>
          </div>

         </div>
       </div>
     <div class="col-md-4 col-sm-12 ">
      <div id="rapper">
        <div class="phone view_3" id="phone_1">
          <iframe src="" id="frame_1"></iframe>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-12 " id="blur2">
      <div class="right-section" id="right">
        <div class="box-2">
        <div class="toolbox l ">
          <p class="message-box ">
          You may change restaurant menu from
          (Indian/International) from this tab
        </p>
        <span class="next" ng-click="step2();" id="next2"> Next </span>
        </div>
        </div>

        <p class="help-msg " id="help2">
          <b>HELP MESSAGE HERE</b><br/>
          Lorem Ipsumm Neque porro quisquam est qui
           dolorem ipsum quia dolor sit amet,
           consectetur, adipisci velit...
           <br/>
           <br/>

           Lorem Ipsumm Neque porro quisquam est qui
            dolorem ipsum quia dolor sit amet,
            consectetur, adipisci velit...
        </p>
      </div>
    </div>
</div>
</div>

</section>

<section class="demo_section" id="sec3" >
  <div class="container-fluid">
    <div class="row row-fluid">
      <div class="col-lg-3 like-section" id="like_section">
        <div class="marg-section">
        <h2 class="text-center"> Your like</h2>
          <div class="l-box" ng-repeat="f in fav">
            <div class="row center">
              <div class="col-sm-2">

                <img class=" img-responsive" src="images/veg.png" ng-if="f.dish_nature == 1 || f.dish_nature == 4"></img>
                <img class=" img-responsive" src="images/non-veg.png" ng-if="f.dish_nature == 3"></img>
                <img class=" img-responsive" src="images/egg.png" ng-if="f.dish_nature == 2"></img>

              </div>
              <div class="col-sm-8">
                <p class="l-name"> {{f.dish_name}}</p>
                <span class="l-tags" ng-repeat="t in f.tag">{{t}}</span> <br/>
              </div>
              <div class="col-sm-1">
                <a  class="close-x" ng-click="del_fav($index)">x</a>
              </div>

            </div>
          </div>
        </div>

      </div>

      <div class="col-lg-6   text-center" id="input_section" >
        <div class="" id="like_sec" >
          <h2 class="big"> Enter 6 dishes you like.</h2>
          <h4 class="mid-text text-center"> <span class='count'> {{favCount}}</span> {{fav_text}}</h5>
          <input class="search-box" placeholder="Example: Butter Chicken, Pasta" autocomplete="off" ng-model="search" ng-change="searchDishes(0)"  ng-disabled="fav_done"></input>

          <span class="tt-dropdown-menu"  ng-show="showResult">

                  <div class="tt-dataset-2" style="display: block;">
                    <span class="tt-suggestions" >
                      <div class="tt-suggestion"  ng-repeat="x in dishes| limitTo:7" ng-class="{'tt-is-under-cursor': hover}" ng-mouseenter="hover = true" ng-mouseleave="hover = false" ng-click="favsAdd(x)">

                        <div class="row center">
                          <div class="col-sm-1">
                            <img class="img-responsive" ng-if="x.dish_nature == 1 || x.dish_nature == 4 " src="images/veg.png">
                            <img class="img-responsive" ng-if="x.dish_nature == 3 " src="images/non-veg.png">
                            <img class="img-responsive" ng-if="x.dish_nature == 2 " src="images/egg.png">
                          </div>
                          <div class="col-sm-10">
                            <p class="l-search">{{x.dish_name}}</p>
                            <p class="l-search-tag" ng-repeat="tag in x.tag">{{tag}}</p>
                          </div>
                        </div>
                      </div>

                    </span>
                  </div>
            </span>
            <a href="" class="btn g-button" ng-click="get_dislike();" id="dislike_button"> Let's get your dislikes </a>
          </div>

          <div class="" id="dislike_sec">
            <h3 class="big"> Enter dishes you dislike.</h3>
            <h4 class="mid-text text-center"> <span class='count'> {{dislikeCount}}</span> {{dislike_text}}</h5>
            <input class="search-box" placeholder="Example: Butter Chicken, Pasta" autocomplete="off" ng-model="search_d" ng-change="searchDishes(1)"  ng-disabled="dislike_done"></input>
            <span class="tt-dropdown-menu"  ng-show="showResult_d">
                    <div class="tt-dataset-2" style="display: block;">
                      <span class="tt-suggestions" >
                        <div class="tt-suggestion"  ng-repeat="y in dishes| limitTo:7" ng-class="{'tt-is-under-cursor': hover}" ng-mouseenter="hover = true" ng-mouseleave="hover = false" ng-click="dislikeAdd(y)">
                          <div class="row center">
                            <div class="col-sm-1">
                              <img class="img-responsive" ng-if="y.dish_nature == 1 || y.dish_nature == 4 " src="images/veg.png">
                              <img class="img-responsive" ng-if="y.dish_nature == 3 " src="images/non-veg.png">
                              <img class="img-responsive" ng-if="y.dish_nature == 2 " src="images/egg.png">
                            </div>
                            <div class="col-sm-10">
                              <p class="l-search">{{y.dish_name}}</p>
                              <p class="l-search-tag" ng-repeat="tag in y.tag">{{tag}}</p>
                            </div>
                          </div>
                        </div>

                      </span>
                    </div>
              </span>
              <a href="" class="btn g-button" ng-click="personalise();" id="personalise_button"> Let's personalise </a>
            </div>
         </div>
         <div class="col-lg-3 dislike-section" id="dislike_section">
           <div class="marg-section">
           <h2 class="text-center"> Your Dislike</h2>
             <div class="l-box" ng-repeat="d in dislikes">
               <div class="row center">
                 <div class="col-sm-2">

                   <img class=" img-responsive" src="images/veg.png" ng-if="d.dish_nature == 1 || d.dish_nature == 4"></img>
                   <img class=" img-responsive" src="images/non-veg.png" ng-if="d.dish_nature == 3"></img>
                   <img class=" img-responsive" src="images/egg.png" ng-if="d.dish_nature == 2"></img>

                 </div>
                 <div class="col-sm-8">
                   <p class="l-name"> {{d.dish_name}}</p>
                   <span class="l-tags" ng-repeat="tag in d.tag">{{tag}}</span> <br/>
                 </div>
                 <div class="col-sm-1">
                   <a  class="close-x" ng-click="del_dislikes($index)">x</a>
                 </div>

               </div>
             </div>
           </div>
         </div>
      </div>
    </div>
  </div>
</section>
<!-- <section class="demo_section" id="sec4">
  <div class="container-fluid">
    <div class="row">
     <div class="col-md-4 " >

    </div>
    <div class="col-md-4 ">

    </div>
    <div class="col-md-4" >

    </div>
  </div>
  </div>
</section> -->
<section class="demo_section" id="sec4">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4" >
        <div class="left-section" >
          <div class="box-3"  id="p-left">
          <div class="toolbox r ">
            <p class="message-box ">
            Here is your new personalised tab.
          </p>
          <span class="next" ng-click="step5();" id="next3"> Next </span>
          </div>
          </div>


          <!-- Personalised card -->
          <div class="white-card" id="detail_card">
            <div class="card-title">
              <div class="row">
              <div class="col-lg-9 bound">
              <h3 class="dish"> {{selected_card.name}}  </h3>
             </div>
             <div class=" col-lg-3 bound text-center" >
               <p class="a-num"> {{selected_card.match_score.aggregated_score | number : 0}}</p>
               <p class="a-text"> Aggregate</p>
             </div>
            </div>
            </div>
            <div class="card-area">
              <table cellspacing="0" cellpadding="0" class="t-dish" style="width:100%">
                <tr>
                  <td class="first" width="40%"><p class="match">Flavour  </td>
                  <td class="second"><div class="progress">
                    <div class="progress-bar green-bar" role="progressbar" aria-valuenow="70"
                    aria-valuemin="0" aria-valuemax="100" style="width:{{selected_card.match_score.flavor_category_distribution_match_score * 100 | number : 0}}%">

                     </div>
                   </div>
                 </td>
                </tr>
                <tr>
                  <td class="first" width="40%"><p class="match">Ingredient pair  </td>
                  <td class="second"><div class="progress">
                    <div class="progress-bar green-bar" role="progressbar" aria-valuenow="70"
                    aria-valuemin="0" aria-valuemax="100" style="width:{{selected_card.match_score.ingredient_pair_match_score * 100 | number : 0}}%">
                     </div>
                   </div>
                 </td>
                </tr>
                <tr>
                  <td class="first" width="40%"><p class="match">Cooking style   </td>
                  <td class="second"><div class="progress">
                    <div class="progress-bar green-bar" role="progressbar" aria-valuenow="70"
                    aria-valuemin="0" aria-valuemax="100" style="width:{{selected_card.match_score.ingredient_cooking_style_match_score * 100 | number : 0}}%">
                     </div>
                   </div>
                 </td>
                </tr>
                <tr>
                  <td class="first" width="40%"><p class="match">Ingredient Match Score </td>
                  <td class="second"><div class="progress">
                    <div class="progress-bar green-bar" role="progressbar" aria-valuenow="70"
                    aria-valuemin="0" aria-valuemax="100" style="width:{{selected_card.match_score.ingredient_match_score * 100 | number : 0}}%">

                     </div>
                   </div>
                 </td>
                </tr>
              </table>
            </div>
          </div>



        </div>
      </div>
     <div class="col-md-4 col-sm-12 ">
      <div id="rapper">
        <div class="phone " id="phone_2">
          <iframe src="" id="frame_2"></iframe>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-12 " >
      <div class="right-section" >
        <div class="box-4"  id="p-right">
        <div class="toolbox l ">
          <p class="message-box ">
          Tap on the personalised dishes to know more about the science behind dishq.
        </p>
        <span class="next" ng-click="step6();" id="done"> Done </span>
        </div>
        </div>

      </div>

    </div>
</div>
</div>
</div>
</section>
<div class="" style="bottom:0px; margin-top:20%; " id="footer">
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
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-animate.js"></script>
<script>
       var app = angular.module('ngAnimate', []);
       app.controller('searchController', function($scope, $http, $timeout) {
        $scope.slug=getParameterByName('slug', '');
        var url = "http://localhost/mob_demo/index.html?slug="+$scope.slug;
        var url_stall = "http://localhost/mob_demo/stal.html";
        var url_personalise = "http://localhost/mob_demo/personalise.html?slug="+$scope.slug;
          $("#footer").hide();
          $("#dislike_button").hide();
          $("#dislike_sec").hide();
          $("#personalise_button").hide();
          $("#detail_card").hide();
          $("#dislike_section").hide();
          var iframe = $("#frame_1");
          var iframe_new = $("#frame_2");
         //demo prepare

         function isJSON(text){
           try{
             JSON.parse(text);
             return true;
           }
             catch (error){
               return false;
             }
           }
          $(function(){
               // Create IE + others compatible event handler
               var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
               var eventer = window[eventMethod];
               var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";

               // Listen to message from child window
               eventer(messageEvent,function(e) {


                 if(e.data == true){

                   $scope.demo_start();
                 }else if(e.data == 'personilse_start'){
                   $("#p-left").fadeIn();
                   setTimeout(function() {
                     $('#next3').fadeIn();
                   }, 2000);
                 }

                 if(isJSON(e.data)){
                   var pass_data = JSON.parse(e.data);
                   if(pass_data.hasOwnProperty('restaurant')){
                     $scope.card_data(parseInt(pass_data.restaurant),parseInt(pass_data.dish));
                    $('#detail_card').fadeIn();
                    console.log('yes')
                    }
                 }else{
                   console.log('no')
                 }
               },false);

          });


          $scope.start = function(){
          $('body,html').animate({'scrollTop': 100}, 1000);
            $("#sec1").fadeOut();
            setTimeout(function() {
              iframe.attr("src",url);
              $('#sec2').fadeIn();
            }, 500);
          }



          $scope.demo_start = function(){
            $(".box-2").fadeIn();
            setTimeout(function() {
              $('#next2').fadeIn();
            }, 1000);
          }

          $scope.step2 = function(){
            var iframeWin = document.getElementById("frame_1").contentWindow;
            iframeWin.postMessage('step2', url);
            $(".box-2").fadeOut();
            $(".box-1").fadeIn();
              setTimeout(function() {
            $("#next1").fadeIn();
          }, 2000);
          }

            $scope.step3 = function(){
              var iframeWin = document.getElementById("frame_1").contentWindow;
              iframeWin.postMessage('step3', url);
              $(".box-1").fadeOut();
              //Show the help box on each side for the user
              $("#help2").fadeIn();
              $("#help1").fadeIn();
              setTimeout(function() {
                $('#p_text').fadeIn();
                $('#p_button').fadeIn();
              }, 3000);
            }

            $scope.step4 = function(){
              $('#sec2').fadeOut();
              setTimeout(function() {
                $('#sec3').fadeIn();
              }, 3000);

            }
            $scope.personalise = function(){
              $('#like_section').toggleClass('col-lg-3  col-lg-offset-3 col-lg-3');
              // $('#dislike_section').toggleClass('col-lg-3  col-sm-6');
              $('#input_section').fadeOut();
              $('.close-x').fadeOut();
              $scope.send_data();
            }
            $scope.step5 = function(){
              //Switching from personiled tooltip left to right
              $('#p-left').fadeOut();
              setTimeout(function() {
                $('#p-right').fadeIn();
              }, 1000);
              setTimeout(function() {
                $('#done').fadeIn();
              }, 3000);

            }
            $scope.step6 = function(){
              $('#p-right').fadeOut();
              $('#detail_card').fadeIn();
            }

            $scope.get_dislike = function(){
              $('#like_sec').fadeOut();

              setTimeout(function() {
                $('#dislike_section').fadeIn();
                $('#dislike_sec').fadeIn();
              }, 1000);
              if($scope.dislikes.length != 0){
                $('personalise_button').fadeIn();
              }
            }
            $scope.stal = function(){
              $("#sec3").fadeOut();
              setTimeout(function() {
                iframe_new.attr("src",url_stall);
                $("#sec4").fadeIn();
              },1000);
            }

            //Search dishes section
            $scope.selected_card = [];
            $scope.dishes = [];
            $scope.showResult = true;
            $scope.fav = [];
            $scope.favCount = 6;
            $scope.dislikeCount = 1;
            $scope.dislikes = [];
            $scope.dishes = [];
            $scope.isOpen = true;
            $scope.fav_done = false;
            $scope.dislike_done = false;

            $scope.get_user_profile = function(){
              var url = "api/food_profile.php?slug="+$scope.slug+'/';

              $http.get(url).then(function successCallback(response){

                  var new_data = response.data;
                  if(response.status == 200){

                    if(new_data.data.hasOwnProperty('favourite')){
                      $scope.fav = new_data.data.favourite;

                      angular.forEach($scope.fav, function(value, key) {
                        value.generic_dish_id = value.id;
                        value.dish_name = value.name;
                        delete value.id;
                        delete value.name;

                      })
                      $scope.dislikes = new_data.data.dislike;
                      angular.forEach($scope.dislikes, function(value, key) {
                        value.generic_dish_id = value.id;
                        value.dish_name = value.name;
                        delete value.id;
                        delete value.name;

                      })
                      $("#dislike_button").fadeIn();
                      $("#personalise_button").fadeIn();
                      $scope.check();
                    }
                  }else{

                  }
              }, function errorCallback(response) {

              });

             }
            $scope.get_user_profile();


            // $scope.isHideBrand = true;
            var id = 0;
            $scope.searchDishes = function(h){
               if(h == 0){
                 var url = "api/get_dishes.php?q="+$scope.search;
               }else{
                 var url = "api/get_dishes.php?q="+$scope.search_d;
               }
               $http({
                   method: 'get',
                   url: url
               }).then(function (status){

                var new_data = status.data;
                 if(new_data.data.length > 0){
                  $scope.dishes = new_data.data;

                }else if(new_data.data.length == 0){
                  $scope.dishes = [{generic_dish_id: 0, dish_name: "No results found"}];
                }

               if(id == 0){
                  if(h == 0){
                    setTimeout(suggest($scope.dishes), 10 );
                  }else{
                    setTimeout(suggest_d($scope.dishes), 10 );
                  }
                 }

               },function (error){

               });

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
            $scope.favsAdd = function(data){
              var newEntry = 0;
              for (var i = 0; i < $scope.fav.length; i++) {

                if($scope.fav[i].generic_dish_id == data.generic_dish_id){
                  newEntry++;
                }
              }
              if(newEntry==0 && data.generic_dish_id !=0){
              $scope.fav.push(data);
              $scope.favCount--;
              $scope.check();
              }
              if($scope.fav.length >= 6){
                $("#dislike_button").fadeIn();
                $scope.get_dislike();
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
              if(newEntry==0 && data.generic_dish_id !=0){
                $scope.dislikes.push(data);
                $scope.dislikeCount--;
                $scope.check();
              }
              if($scope.dislikes.length >= 1){
                $("#personalise_button").fadeIn();
              }

                clear();
                $scope.hideDropdown_d();
            }

            $scope.del_fav = function(index){
             $scope.fav.splice(index, 1);
             $scope.favCount++;
             $scope.check();
             if($scope.fav.length < 6){
               $("#dislike_button").fadeOut();
             }
            }
            $scope.del_dislikes = function(index){
             $scope.dislikes.splice(index, 1);
             $scope.dislikeCount++;
             $scope.check();
             if($scope.dislikes.length == 0){
               $("#personalise_button").fadeOut();
             }
            }

            function clear(){
                id = 0;
                $scope.search = '';
                $scope.search_d = '';
                $scope.dishes = [];
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
                 $scope.fav_text = 'You can replace the dish by removing from the list to your left ';
                 $scope.favCount = '';
                  $scope.fav_done = true;
               }else{
                 $scope.fav_text = 'more to go';
                 $scope.fav_done = false;
               }
               if ($scope.dislikes.length >= 1){
                 $scope.dislike_text = 'You can replace the dish by removing from the list to your right';
                 $scope.dislikeCount = '';
                 $scope.dislike_done = true;
               }else{
                 $scope.dislike_text = 'Need atleast';
                  $scope.dislike_done = false;
               }



             }

             $scope.hideDropdown = function(){
               $timeout(function() {
              $scope.showResult = false;
              $scope.isHideBrand = true;
              $scope.$digest();
            }, 300);

             }
             $scope.hideDropdown_d = function(){
               $timeout(function() {
              $scope.showResult_d = false;
              $scope.isHideBrand = true;
              $scope.$digest();
            }, 300);

             }


             $scope.send_data = function(){
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
               var url = 'api/update_profile.php?slug='+$scope.slug+'/';
               var parameter = JSON.stringify({fav:fav, dislike: dislike});


               $http.post(url, parameter).then(function successCallback(response){
                   if(response.status == 200){
                     $timeout(function() {
                       $scope.get_recommendations();
                       $scope.stal();
                   }, 3000);

                   }else{

                   }
               }, function errorCallback(response) {

               });
             }


             $scope.card_data = function(rest_no,dish_no){
               if(rest_no == 0){
                 $scope.selected_card = $scope.rest1[dish_no];
               }else{
                  $scope.selected_card = $scope.rest2[dish_no];
               }
               $scope.$apply();

             }

             $scope.get_recommendations = function(){

               var url = 'api/recommendations.php?slug='+$scope.slug+'/';

               $http.get(url).then(function successCallback(response){

                   var new_data = response.data;
                   if(response.status == 200){
                     if(new_data.data.length == 0){
                       $timeout(function() {
                           $scope.get_recommendations();
                     }, 2500);

                     }else{

                         iframe_new.attr("src",url_personalise);
                       if(new_data.data[0].menu.length > 0){
                         $scope.rest1 = new_data.data[0].menu;

                       }
                       if(new_data.data[1].menu.length > 0){
                         $scope.rest2 = new_data.data[1].menu;
                       }

                       $scope.selected_card = $scope.rest1[0]
                     }
                   }else{

                   }
               }, function errorCallback(response) {

               });

             }


             $scope.check();



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
