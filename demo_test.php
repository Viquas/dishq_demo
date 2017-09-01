
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="dishq">
<meta name="description" content="Power great food experiences"/>
<meta name="robots" content="noodp"/>
<link rel="canonical" href="http://dishq.in/" />
<link href="images/favicon.png" rel="shortcut icon" />
<meta property="og:locale" content="en_GB" />
<meta property="og:type" content="website" />
<meta property="og:title" content="dishq - Power great food experiences" />
<meta property="og:description" content="Power great food experiences" />
<meta property="og:url" content="http://dishq.in/" />
<meta property="og:site_name" content="dishq - Power great food experiences" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:description" content="Power great food experiences" />
<meta name="twitter:title" content="dishq - Power great food experiences" />
<title>dishq - Power great food experiences</title>


  <!-- Bootstrap Core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
    <!-- <link href="css/screen.min.css" rel="stylesheet"> -->
  <link href="css/dishq.min.css" rel="stylesheet">
  <link href="css/demo.min.css" rel="stylesheet">

  <!-- <link href="css/menu.css" rel="stylesheet"> -->
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <style>
  body {
    padding-top: 70px;
    /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
  }
  </style>

  <!--Google Analyti -->
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-72767972-1', 'auto');
  ga('send', 'pageview');
  </script>

</head>
<body ng-app="demoApp" ng-controller="myCtrl">
<!-- Navigation -->

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="about.php">About</a>
  <!-- <a href="developer.php">Developers</a> -->
  <a href="career.php">Careers</a>
  <a href="press.php">Press</a>
  <a href="/blog">Blog</a>
  <hr/>


  <div class="side-nav">
    <ul class="link-bottom">
      <!-- <a href="home.php" class="c-link">Foodies</a>
      <a href="business.php" class="c-link">Business</a> -->
      <!-- <a href="home.php" class="c-link">Business</a> -->
      <li class="hidden-lg hidden-md">
          <a href="https://www.facebook.com/dishqit" target="_blank" class="white"><i class="fa fa-facebook-square fa-lg green" aria-hidden="true"></i></a>
      </li>
      <li class="hidden-lg hidden-md">
          <a href="https://www.linkedin.com/company/dishq" target="_blank"><i class="fa fa-linkedin-square fa-lg green" aria-hidden="true"></i></a>
      </li>
      <li class="hidden-lg hidden-md">
          <a href="https://www.instagram.com/dishqit/" target="_blank"><i class="fa fa-instagram fa-lg green" aria-hidden="true"></i></a>
      </li>
      <li class="hidden-lg hidden-md">
          <a href="https://twitter.com/dishqit" target="_blank"><i class="fa fa-twitter-square fa-lg green" aria-hidden="true"></i></a>
      </li>
    </ul>
  </div>
</div>
<div class="navbar navbar-inverse navbar-fixed-top">
<div class="navbar-header">
  <ul class="navbar-icons  pull-left">
      <li class="">
        <span  onclick="openNav()" class="ham">
          <i class="fa fa-bars fa-lg" aria-hidden="true"></i>
        </span>
      </li>
  </ul>

  <p class="text-center logo">
  <a class="navbar-brand" href="index.php">
    <img src="images/logo.png" alt="Dispute Bills" class="img-logo">
  </a>
  </p>
  <ul class="navbar-icons  pull-right">
      <li class="hidden-xs hidden-sm">
          <a href="https://www.facebook.com/dishqit" target="_blank" class="white"><i class="fa fa-facebook-square fa-3x" aria-hidden="true"></i></a>
      </li>
      <li class="hidden-xs hidden-sm">
          <a href="https://www.linkedin.com/company/dishq" target="_blank" class="white"><i class="fa fa-linkedin-square fa-3x" aria-hidden="true"></i></a>
      </li>
      <li class="hidden-xs hidden-sm">
          <a href="https://www.instagram.com/dishqit/" target="_blank" class="white"><i class="fa fa-instagram fa-3x" aria-hidden="true"></i></a>
      </li>
      <li class="hidden-xs hidden-sm">
          <a href="https://twitter.com/dishqit" target="_blank" class="white"><i class="fa fa-twitter-square fa-3x " aria-hidden="true"></i></a>
      </li>
      <!-- <li >
           <a href="https://play.google.com/store/apps/details?id=version1.dishq.dishq" target="_blank">
            <img class="playstore" src="images/playstore.png" id="fade-in">
          </a>
      </li> -->

  </ul>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
<section>
    <div class="container-fluid">
     <div class="row">
       <div class="col-md-4">
         <h3 class="">Select the restaurant</h3>
         <select ng-model="selectedRestaurants" ng-change="resSelected()">
           <option ng-repeat="restaurant in restaurants" value="{{restaurant.id}}">{{restaurant.name}}</option>
         </select>
       </div>
       <div class="col-md-4">
          <h3 class="">Select the Dishes</h3>
         <select ng-model="selectedStarter" multiple="" >
           <optgroup label="Starters">
           <option ng-repeat="Starters in restaurantMenu.Starters" value="{{Starters.generic_dish_id}}">{{Starters.name}}</option>
           </optgroup>
           <optgroup label="Desserts">
           <option ng-repeat="Desserts in restaurantMenu.Desserts" value="{{Desserts.generic_dish_id}}">{{Desserts.name}}</option>
           </optgroup>
           <optgroup label="Mains">
           <option ng-repeat="Mains in restaurantMenu.Mains" value="{{Mains.generic_dish_id}}">{{Mains.name}}</option>
           </optgroup>
           <optgroup label="Sides">
           <option ng-repeat="Sides in restaurantMenu.Sides" value="{{Sides.generic_dish_id}}">{{Sides.name}}</option>
           </optgroup>
           <optgroup label="Drinks">
           <option ng-repeat="Drinks in restaurantMenu.Drinks" value="{{Drinks.generic_dish_id}}">{{Drinks.name}}</option>
           </optgroup>
         </select>
       </div>
       <div class="col-md-4">
        <button class="" ng-click="update();"> Update</button>
        <button class="" ng-click="recommendations();"> Recommendations</button>
      </div>
    </div>
  </div>
</section>


<script>
var app = angular.module('demoApp', []);
app.controller('myCtrl', function($scope,$http, $timeout) {
    $scope.slug = getParameterByName('slug', '');
    $scope.firstName= "John";
    $scope.lastName= "Doe";
    $scope.restaurants = [];
    $scope.restaurantMenu = [];

    $scope.all_restuarants = function(){
             $http({
                method: 'get',
                dataType: 'jsonp',
                headers: {
                  "Authorization": 'Token bcc55eb53b1fb196ab98e1701f911b0a5e9266a0'
                },
                url: 'api/get_restaurant.php'
            }).then(function successCallback(response){
              var status = response.data;
              // this callback will be called asynchronously
              // when the response is available
               if(status.response == "Success"){
                  $scope.restaurants = status.data;
               }
            }, function errorCallback(response) {
                console.log(response);
              // called asynchronously if an error occurs
              // or server returns response with an error status.
            });

        }
          $scope.all_restuarants();

          $scope.resSelected = function() {
            for (var i = 0; i < $scope.restaurants.length; i++) {
              if($scope.restaurants[i].id == $scope.selectedRestaurants){
                $scope.restaurantMenu = $scope.restaurants[i].menu;

              }
            }

          }
          $scope.update = function() {
            var fav = [15806, 877, 878, 881];
            var dislike = [882,949];
            var slug = $scope.slug;
            var url = 'api/update_profile_working.php?slug='+slug+'/';
            var parameter = JSON.stringify({fav:fav, dislike: dislike});

            $http.post(url, parameter).then(function successCallback(response){
                console.log(response.data);
            }, function errorCallback(response) {
                console.log(response);

            });

          }

          $scope.recommendations = function() {
            var url = 'http://api.dishq.tech/v1/demo/recommendations/'+$scope.slug+'/';

            $http({
               method: 'get',
               dataType: 'jsonp',
               headers: {
                 "Authorization": 'Token bcc55eb53b1fb196ab98e1701f911b0a5e9266a0'
               },
               url: url
           }).then(function successCallback(response){
             console.log(response);
           }, function errorCallback(response) {
               console.log(response);
             // called asynchronously if an error occurs
             // or server returns response with an error status.
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







<!-- Footer -->

<footer>
  <div class="container-fluid">
    <div class="footer-section">
      <div class="col-sm-3">


        <div class="left-link pull-down">
          <ul class="left-list">
          <li>
              <a href="https://www.facebook.com/dishqit" target="_blank" class="white"><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></a>
          </li>
          <li>
              <a href="https://www.linkedin.com/company/dishq" target="_blank" class="white"><i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i></a>
          </li>
          <li>
              <a href="https://www.instagram.com/dishqit/" target="_blank" class="white"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
          </li>
          <li>
              <a href="https://twitter.com/dishqit" target="_blank" class="white"><i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i></a>
          </li>
          </ul>
          <p class="email white">+91 8105 266 343</p>
            <p class="email white">help@dishq.in</p>
          <!-- <p class="privacy hidden-xs hidden-sm">

          </p> -->
        </div>
      </div>
      <div class="col-sm-3 ">
        <div class="middle-link pull-down">

          <p class="address white">
          <b>  Bangalore: </b><br/>
#549, 1st Floor, 14th Main Road, <br/>
HSR Layout, Sector 7 <br/>Bengaluru, Karnataka, 560 102</p>
        </div>

      </div>
      <div class="col-sm-3">
        <div class="middle-link">

          <p class="address white">
            <b>  London: </b><br/>
Cygnus Business Center, <br/>
Dalmeyer road <br/>London, NW 10 2XA, UK</p>
        </div>

      </div>
      <div class="col-sm-3 ">
        <div class="right-link">
  <p class="privacy"> <a href="privacy.php" class="links white" >Privacy Policy</a><br/>
    <a href="terms.php" class="links white" > Terms of Use</a></p>
  <p class="privacy white "> ©2017 dishq </p>
        </div>
      </div>
    </div>
  </div>
</footer>

  </ul>
</div>
</div>
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "300px";

}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script>
    $(".playstore").fadeIn();
</script>

</body>
</html>
