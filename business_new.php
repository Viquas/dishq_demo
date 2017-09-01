<?php
?>
<!DOCTYPE html>
<html lang="en">
<?php
?>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="dishq">
  <meta name="description" content="Powering great food experiences through personalisation"/>
  <meta name="robots" content="noodp"/>
  <link rel="canonical" href="http://dishq.in/" />
  <link href="images/favicon.png" rel="shortcut icon" />
  <meta property="og:locale" content="en_GB" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="dishq - Powering great food experiences through personalisation" />
  <meta property="og:description" content="Powering great food experiences through personalisation. Download the dishq app!" />
  <meta property="og:url" content="http://dishq.in/" />
  <meta property="og:site_name" content="dishq - Powering great food experiences through personalisation" />
  <meta name="twitter:card" content="summary" />
  <meta name="twitter:description" content="Powering great food experiences through personalisation. Download the dishq app!" />
  <meta name="twitter:title" content="dishq - Powering great food experiences through personalisation" />
  <title>dishq - Powering Great Food Experiences Through Personalisation</title>

  <!-- Bootstrap Core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
    <!-- <link href="css/screen.min.css" rel="stylesheet"> -->
  <link href="css/dishq.min.css" rel="stylesheet">
  <link href="css/home.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/jquery.fullPage.css" />

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
  <link rel="stylesheet"  href="css/lightslider.css"/>
     <style>
     	ul{
 			list-style: none outside none;
 		    padding-left: 0;
             margin: 0;
 		}
          .item{
             margin-bottom: 60px;
         }
 		.content-slider li{
 		    /*background-color: #ed3020;*/
 		    text-align: center;
 		    color: #FFF;
 		}
 		.content-slider h3 {
 		    margin: 0;
 		    padding: 70px 0;
 		}
 		/*.demo{
 			width:100%;
 		}*/
    .slider-img{
      width:80px;
    }
    #container {
      margin-left: 10%;
  margin-top: 20%;
    margin-bottom: -20%;
  width: 150px;
  height: 150px;
  position: relative;
}
     </style>

</head>

<body>

<style>
body{
  padding-top: 0px;
  background-color: white;
}
</style>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="about.php">About</a>
  <!-- <a href="developer.php">Developers</a> -->
  <a href="career.php">Careers</a>
  <a href="/blog">Blog</a>
  <hr/>


  <div class="side-nav">
    <ul class="link-bottom">
      <a href="home.php" class="c-link">Foodies</a>
      <a href="business.php" class="c-link">Business</a>
      <!-- <a href="home.php" class="c-link">Business</a> -->
      <li class="hidden-lg hidden-md">
          <a href="https://www.facebook.com/dishqit" target="_blank"><i class="fa fa-facebook-square fa-lg green" aria-hidden="true"></i></a>
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
      <!-- <li class="hidden-xs hidden-sm">
          <a href="https://www.facebook.com/dishqit" target="_blank"><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></a>
      </li>
      <li class="hidden-xs hidden-sm">
          <a href="https://www.linkedin.com/company/dishq" target="_blank"><i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i></a>
      </li> -->
      <li >
          <a href="mailto:help@dishq.in?subject=Request for Demo"  class="btn  demo  hidden-md hidden-lg"  id="fade-in"><span>Demo</span></a>
      </li>
      <li >
          <a href="mailto:help@dishq.in?subject=Request for Demo"  class="btn gray thin-shadow btn-right hidden-sm hidden-xs" style="margin-left: 5px;margin-right: 5px" id="fade-in"><span>Schedule a demo</span></a>
      </li>

  </ul>
</div>
</div>

  <div id="fullpage">
      <div class="section business" id="section0">
<div class="" style="margin-top: 0px;">

    <div class="jumbotron">

        <div id="maintagline">
            <span class="jumbotron-title">
            <span class="roboto-text black-text">Personalisation <br/>

              Just Got <div class="top-green"> </div>
              <br/>
              <div class="bottom-green"> </div> Tasty</span>
            </span>
            <p class="sub black-text" >Our API understands your user’s tastes and makes intelligent recommendations
            </p>
          <div class="row">
            <div class="col-sm-8 col-sm-offset-2">

           <div class="item">
                <ul id="content-slider" class="content-slider">
                    <li>
                      <img src="images/slider/1.png" class="slider-img"/>
                    </li>
                    <li>
                      <img src="images/slider/2.png" class="slider-img"/>
                    </li>
                    <li>
                      <img src="images/slider/3.png" class="slider-img"/>
                    </li>
                    <li>
                      <img src="images/slider/4.png" class="slider-img"/>
                    </li>
                    <li>
                      <img src="images/slider/5.png" class="slider-img"/>
                    </li>
                    <li>
                      <img src="images/slider/6.png" class="slider-img"/>
                    </li>

                    <li>
                      <img src="images/slider/7.png" class="slider-img"/>
                    </li>
                    <li>
                      <img src="images/slider/8.png" class="slider-img"/>
                    </li>
                    <li>
                      <img src="images/slider/9.png" class="slider-img"/>
                    </li>
                    <li>
                      <img src="images/slider/10.png" class="slider-img"/>
                    </li>
                    <li>
                      <img src="images/slider/11.png" class="slider-img"/>
                    </li>
                    <li>
                      <img src="images/slider/12.png" class="slider-img"/>
                    </li>
                    <li>
                      <img src="images/slider/13.png" class="slider-img"/>
                    </li>
                    <li>
                      <img src="images/slider/14.png" class="slider-img"/>
                    </li>
                    <li>
                      <img src="images/slider/15.png" class="slider-img"/>
                    </li>

                </ul>
            </div>
            </div>
          </div>

            <a href="mailto:help@dishq.in?subject=Request for Demo" class="btn blue thin-shadow up" style="margin-left: 5px;margin-right: 5px"><span>Schedule a demo</span></a>
        </div>
    </div>
</div>
</div>

    <div class="section business" id="section1">
      <!-- <section class="business"> -->
      <div class="centering">
          <div class="row">
            <div class="col-sm-10 col-sm-offset-1">

        <p class="quote-details">
            <span class="big-quote left"> "</span>
          dishq is a <b>food AI</b> company.<br/>
           We help food businesses provide great food experiences through<b> personalisation.</b><br/>
            We empower them with <b>search & recommendation</b> capabilities.<br/>
            Our unique technology uses <b>food science and rich dish data</b><br/> to deliver highly relevant results to your <b>users.</b><br/>
             Each time our algorithms<b> analyse food content and user behaviour,</b><br/> they naturally <b>learn and grow</b> stronger. <br/> <span class="big-quote right"> "</span>
        </p>
      </div>
      </div>
    </div>
      </div>
      <!-- </section> -->
    <div class="section " id="section1">

      <div class="row">
      <div class="col-sm-2 ">
            <img src="images/l1.png" class="left-icon hidden-sm hidden-xs" id="left-fix">
      </div>
      <div class="col-sm-5 ">
          <p class="black-point"> Reduce your dependence upon offers and discounts by delivering a wow experience</p>
      </div>
      <div class="col-sm-5">
        <p class="text-center">
            <img src="images/p1.png" class="right-icon">
          </p>
      </div>
    </div>

  </div>
  <div class="section " id="section2">

    <div class="row">
    <div class="col-sm-2 ">
          <!-- <img src="images/l2.png" class="left-icon hidden-sm hidden-xs"> -->
    </div>
    <div class="col-sm-5 ">
        <p class="black-point"> See brand engagement and loyalty by showing your users how well you understand their needs.</p>
    </div>
    <div class="col-sm-5">
      <p class="text-center">
          <img src="images/p2.png" class="right-icon">
        </p>
    </div>
  </div>

</div>
<div class="section " id="section3">

  <div class="row">
  <div class="col-sm-2 ">
        <!-- <img src="images/l3.png" class="left-icon hidden-sm hidden-xs"> -->
  </div>
  <div class="col-sm-5 ">
      <p class="black-point"> Convert more users, more frequently adding real value to your top line.</p>
  </div>
  <div class="col-sm-5">
    <p class="text-center">
        <img src="images/p3.png" class="right-icon">
      </p>
  </div>
</div>

</div>
<div class="section " id="section4">

  <div class="row">
  <div class="col-sm-2 ">
        <!-- <img src="images/l4.png" class="left-icon hidden-sm hidden-xs"> -->
  </div>
  <div class="col-sm-5 ">
      <p class="black-point"> Break free from the need for user generated content (e.g. ratings & reviews) and replace it with intelligent generated content.</p>
  </div>
  <div class="col-sm-5">
    <p class="text-center">
        <img src="images/p4.png" class="right-icon">
      </p>
  </div>
</div>

</div>
<div class="section full-black " id="section4">

  <div class="row">
    <div class="col-sm-10 col-sm-offset-1">
      <div class="vcenter">

        <h3 class="white-big">We Teach Machines To Understand Taste & How It Influences Food Decisions </h3>
        <p class="text-center"><img src="images/conveyor-belt.gif" class="conveyor-image"></p>
        <p class="light-white" >
          Taste is personal, that’s no secret. But dissecting food preferences down to the individual level is complex.<br/> In addition to taste, food choices are contextual, emotional, and sometimes even irrational.<br/> We build technology that understands all of this <br/>and makes smart suggestions. Years of research in machine learning, <br/>food science, and behavioural analysis are packed into our technology.
        </p>


  </div>
    </div>
  </div>
</div>
<div class="section " id="section5">
  <div class="row">
    <div class="col-sm-10 col-sm-offset-1">
      <div class="white-card">
  <div class="row">
    <div class="col-sm-8 col-sm-offset-2">
        <h2 class="big-title  black-text" > Innovative Food Businesses Choose dishq </h2>
        <hr class="green"></hr>
        <p class="sub-details-lite black-text"><br/>
          Whether you’re a cloud kitchen, tech savvy restaurant or online food aggregator, we have the intelligent solutions for your search and recommendation needs using personalisation.
          <br/><br/>Learn how Petoo and HungerBox benefited by integrating our API:
        </p>
        <div class="b-image">
          <img src="images/petoo.png" class="b-logo"></img>
          <img src="images/hungrybox.png" class="b-logo hunger"></img>
        </div>
        <div class="f_button">
          Case studies coming soon
        </div>
      </div>
      </div>
    </div>
  </div>
  </div>

</div>


<div class="section" id="section6">
    <div class="slide" id="slide1" data-anchor="slide1">
    <div class="intro">
      <div class="row">


        <div class="col-sm-6">
          <div class="cases">
            <div class="bck-gray">
            <h1 class="green-number">
              01
            </h1>
            </div>
            <p class="text-center hidden-lg hidden-md">
              <img src="images/notify.png" class="case_mobile"></img>
            </p>
            <img src="images/notify.png" class="case_mobile hidden-sm hidden-xs"></img>
          </div>
        </div>
        <div class="col-sm-4">
          <p class="light-text mid1">
            Notifications truly personalised to drive engagement
          </p>
        </div>

      </div>
    </div>
  </div>

    <div class="slide" id="slide2" data-anchor="slide2">
      <div class="row">
        <div class="col-sm-4 col-sm-offset-2 hidden-sm hidden-xs">
          <p class="light-text mid1 text-center " >
              <img src="images/mood.gif" class="mood"></img>
              <br/>
            Discovery based upon mood
          </p>
        </div>
        <div class="col-sm-6">
          <div class="cases">
            <div class="back-ay">
            <h1 class="green-number">
              02
            </h1>
            </div>
            <p class="text-center hidden-lg hidden-md">
              <img src="images/mob2.png" class="case_mobile"></img>
            </p>
            <img src="images/mob2.png" class="case_mobile hidden-sm hidden-xs"></img>
          </div>
        </div>
        <div class="col-sm-4 col-sm-offset-2 hidden-lg hidden-md">
          <p class="light-text mid1">

            Discovery based upon mood
          </p>
        </div>
      </div>
  </div>

  <div class="slide" id="slide3" data-anchor="slide3">
    <div class="row">
      <div class="col-sm-6">
        <div class="cases">
          <div class="bac-gray">

          <h1 class="green-number">
            03
          </h1>
          </div>
          <p class="text-center hidden-lg hidden-md">
              <img src="images/mob4.png" class="case_mobile"></img>
          </p>
          <img src="images/mob4.png" class="case_mobile hidden-sm hidden-xs"></img>
        </div>
      </div>
      <div class="col-sm-4">
          <div id="container" class="hidden-sm hidden-xs"></div>
        <p class="light-text mid1 mar40">
          Recommendations intelligently matched to taste
        </p>
      </div>

    </div>
  </div>
  <div class="slide" id="slide3" data-anchor="slide3">
    <div class="row">
      <div class="col-sm-3 col-sm-offset-3 hidden-xs hidden-sm">

        <p class="light-text mid1 pull-right mar80 ">
          Restaurant menus curated and organised
        </p>
      </div>
      <div class="col-sm-6">
        <div class="cases">
          <div class="backgray">
          <h1 class="green-number">
            04
          </h1>
          </div>
          <p class="text-center hidden-lg hidden-md">
            <img src="images/mob3.png" class="case_mobile"></img>
          </p>
          <img src="images/mob3.png" class="case_mobile hidden-sm hidden-xs"></img>
        </div>
      </div>
      <div class="col-sm-4 col-sm-offset-2 hidden-lg hidden-md">
        <p class="light-text mid1 ">
        Restaurant menus curated and organised
        </p>
      </div>
    </div>
  </div>
  <!-- <div class="slide" id="slide3" data-anchor="slide3">
    <h1>Slide 5</h1>
  </div> -->
</div>
<div class="section full-black" id="section6">
  <div class="row">
    <div class="col-sm-8 col-sm-offset-2">
      <div class="mar-left">
        <h2 class="big-title  white-text" > Custom Solution </h2>
        <hr class="green"></hr>
        <p class="sub-details-lite light-white"><br/>
          Looking for something in particular? Let's work together to design a solution for your problem then access it from the API.
        </p>

      </div>
      </div>
      </div>
</div>

<div class="section" id="section7">
  <div class="row">
    <div class="col-sm-8 col-sm-offset-2">
      <div class="mar-left">
        <h2 class="big-title  black-text" > Easy To Integrate & Operate </h2>
        <hr class="green"></hr>
        <p class="sub-details-lite black-text"><br/>
          Our technologies are available through a REST API. Scalability, maintenance & constant improvement, we take care of everything.
        </p>
        <p class="text-center">
            <a href="mailto:help@dishq.in?subject=Request for Demo" class="btn blue thin-shadow" style="margin-left: 5px;margin-right: 5px"><span>Schedule a demo</span></a>
        </p>

        <!-- <a href="mailto:help@dishq.in?subject=Request for Demo" class="btn blue thin-shadow hidden-sm hidden-xs" style="margin-left: 5px;margin-right: 5px"><span>Schedule a demo</span></a> -->


      </div>  </div>
      </div>
      <div style="bottom:0px;position:absolute;width:100%;" class="hidden-sm hidden-xs">
      <?php include 'footer.php';?>
    </div>
</div>
<div class="section  hidden-lg hidden-md fp-auto-height" id="section8" >
  <div style="bottom:0px;width:100%;" >
    <br/>
    <br/>
    <br/>
    <br/>

  <?php include 'footer.php';?>

</div>
</div>




</div>
<style>
footer{
  background-color: #8ac651;
}
</style>


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
<script src="js/lightslider.js"></script>
<script>
  $(document).ready(function() {
 $("#content-slider").lightSlider({
   gallery:true,
   item:5,
   thumbItem:15,
   slideMargin: 0,
   speed:1000,
   auto:true,
   loop:true,
        });
        $('#image-gallery').lightSlider({
            gallery:true,
            item:1,
            thumbItem:15,
            slideMargin: 0,
            speed:1000,
            auto:true,
            loop:true,
            onSliderLoad: function() {
                $('#image-gallery').removeClass('cS-hidden');
            }
        });
});
</script>
<script src="https://rawgit.com/kimmobrunfeldt/progressbar.js/1.0.0/dist/progressbar.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
    // $(".playstore").fadeIn();
    (function($) {
  $('a[href^=mailto]').each(function() {

    var href = $(this).attr('href');
    $(this).click(function() {
      console.log("ff");
      var t;
      var self = $(this);

      $(window).blur(function() {
        // The browser apparently responded, so stop the timeout.
        clearTimeout(t);
      });

      t = setTimeout(function() {
        alert("Looks like your Email client is not setup. No worries, your can mail us your queries at help@dishq.in");
      }, 500);
    });
  });
})(jQuery);
</script>
<!-- <script type="text/javascript" src="../vendors/scrolloverflow.js"></script> -->

<script type="text/javascript" src="js/jquery.fullPage.js"></script>
<!-- <script type="text/javascript" src="examples.js"></script> -->



<script type="text/javascript">
    $(document).ready(function() {
        $('#fullpage').fullpage({
          autoScrolling:false,
            verticalCentered: true,
            afterLoad: function (anchor, index) {
            if(index == 3){
              $('#left-fix').removeClass('fixit');
              $('#left-fix').addClass('fixit');
              $('#left-fix').attr("src", 'images/l1.png');
            }else if(index == 4){
              $('#left-fix').removeClass('fixit');
              $('#left-fix').addClass('fixit');
              $('#left-fix').attr("src", 'images/l2.png');
            }else if(index == 5){
              $('#left-fix').removeClass('fixit');
              $('#left-fix').addClass('fixit');
              $('#left-fix').attr("src", 'images/l3.png');
            }else if(index == 6){
              $('#left-fix').removeClass('fixit');
              $('#left-fix').addClass('fixit');
              $('#left-fix').attr("src", 'images/l4.png');
            }else{
              $('#left-fix').removeClass('fixit');
            }
          }
        });

    var bar = new ProgressBar.Circle(container, {
  color: '#aaa',
  // This has to be the same size as the maximum width to
  // prevent clipping
  strokeWidth: 4,
  trailWidth: 1,
  easing: 'easeInOut',
  duration: 1400,
  text: {
    autoStyleContainer: false
  },
  from: { color: '#ff0000 ', width: 1 },
    to: { color: '#8ac651 ', width: 4 },
  // Set default step function for all animate calls
  step: function(state, circle) {
    circle.path.setAttribute('stroke', state.color);
    circle.path.setAttribute('stroke-width', state.width);

    var value = Math.round(circle.value() * 100);
    if (value === 0) {
      circle.setText('');
    } else {
      circle.setText(value);
    }

  }
});
bar.text.style.fontFamily = '"Raleway", Helvetica, sans-serif';
bar.text.style.fontSize = '2rem';



animateNow();
function animateNow(){
  var val = Math.random().toFixed(2)
  bar.animate(val);
  setTimeout(repeat, 3000);

}

function repeat(){
  animateNow();
}

  });


</script>

</body>
</html>
