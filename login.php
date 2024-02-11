<!DOCTYPE html>
<?php
session_start();
?>
<html>
   <head>
      <title>GiftStore</title>
      <meta name="viewport" content="width=device-width, initial-scale=1"> 
      <!-- Chrome, Firefox OS and Opera -->
      <meta name="theme-color" content="#2196F3">
      <!-- Windows Phone -->
      <meta name="msapplication-navbutton-color" content="#2196F3">
      <!-- iOS Safari -->
      <meta name="apple-mobile-web-app-capable" content="yes">
      <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
      <!-- FONTS      -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">  
      <!-- Font Awesome Bootstrap -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <!--Materialized CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
      <!-- CSS -->
      <link rel="stylesheet" href="css/go_to.css">

      <link rel="stylesheet" href="css/style1.css">

      <style>
        .slider_adjust{
          width:100%;
          height:100%;
          position: absolute; 
          z-index: -1;
          left:0;
          margin-top:0px;
        }
        .errorMessage {
             font-size: 18px;
        }
        .errorMessage i,
        .errorMessage [class^="mdi-"], .breadcrumb [class*="mdi-"],
        .errorMessage i.material-icons {
            display: inline-block;
            float: left;
            font-size: 24px;
        }
        .errorMessage:before {
            color: rgba(255, 255, 255, 0.7);
            vertical-align: top;
            display: inline-block;
            font-family: 'Material Icons';
            font-weight: normal;
            font-style: normal;
            font-size: 25px;
            margin: 0 10px 0 8px;
            -webkit-font-smoothing: antialiased;
        }
        .errorMessage:first-child:before {
            display: none;
        }
        .invalid {
          color: red;
          font-size: 1em;
        }
        body{
          background-image:url("images/space.jpg");
          background-size:cover;
          background-repeat:no-repeat;
        }
        .container{
          opacity:0.6;
        }
        .material-icons{
          font-weight:bold;
        }
      </style>
   </head>
   
   <body>
      <div class="row navbar-fixed">
        <nav class="black">
          <div class="nav-wrapper">
               <a href="#" class="brand-logo">GiftStore</a>
               <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
               <ul id="categories1" class="dropdown-content" databeloworigin="true">
                  <li><a href="category1.html" class="dropdown_link">One</a></li>
                  <li><a href="category2.html" class="dropdown_link">Two</a></li>
                  <li class="divider"></li>
                  <li><a href="category3.html" class="dropdown_link">Three</a></li>
                  <li><a href="category4.html" class="dropdown_link">Four</a></li>
               </ul>
               <ul id="nav-mobile" class="right hide-on-med-and-down">
                  <?php
                    if(isset($_SESSION['userid'])){
                    ?>
                          <li><a href="index.html" class="navlink">Home</a></li>
                          <li><a href="#" class="dropdown-trigger navlink" data-activates="categories1">Categories<i class="material-icons right">arrow_drop_down</i></a></li>
                          <li><a href="aboutus.html" class="navlink">About Us</a></li>
                          <li><a href="contactus.html" class="navlink">Contact Us</a></li>
                          <li><a class="dropdown-button" data-beloworigin="true" href="#!" data-activates="dropdown2"><?php echo $_SESSION['userid']?><i class="material-icons right">arrow_drop_down</i></a></li>
                  <ul id="dropdown2" class="dropdown-content dropdown_link">
                    <li><a href="logout.php">Logout</a></li>
                  </ul>
                  <?php
                  }
                  else{
                  ?>
                    <li><a href="index.html" class="navlink">Home</a></li>
                    <li><a href="#" class="dropdown-trigger navlink" data-activates="categories1">Categories<i class="material-icons right">arrow_drop_down</i></a></li>
                    <li><a href="aboutus.html" class="navlink">About Us</a></li>
                    <li><a href="contactus.html" class="navlink">Contact Us</a></li>
                    <li><a href="signup.html" class="active navlink">Sign Up</a></li>
                  <?php
                  }
                  ?>
                  
                   
               </ul>
               <ul class="side-nav" id="mobile-demo">
                <li><a href="index.html" class="side_logo left-align">GiftStore</a></li>
                <hr>
                <li><a href="index.html" class="side_nav">Home</a></li>
                <li><a href="aboutus.html" class="side_nav">About Us</a></li>
                <li><a href="contactus.html" class="side_nav">Contact Us</a></li>
                <li><a href="SignUp.html" class="side_nav">SignUp</a></li>
            </ul>
          </div>
        </nav>
      </div>
        <div class="container" style="height:100vh;">
          <div class="row">
            <div class="col s12 m12 l12">
              <div class="card blue-grey lighten-4" style="margin:0;margin-top:20px;">
                <div class="card-content black-text">
                  <div class="card-title center-align"><h3><span class="blue-text">L</span>ogin</h3></div>
                    <div class="row">
                      <form id="loginForm" class="col s12" method="POST" action="loginpage.php">
                        <div class="row signupcardpadding">
                          <div class="input-field col s12 m12 l12">
                            <i class="material-icons prefix">account_circle</i>
                            <input type="text" name="username" class="validate">
                            <label for="username">Username</label>
                          </div>
                        </div>
                        <div class="row signupcardpadding">
                          <div class="input-field col s12 m12 l12">
                            <i class="material-icons prefix">fingerprint</i>
                            <input name="pwd1" type="password" class="validate">
                            <label for="pwd">Password</label>
                          </div>
                        </div>
                        <div class="row center-align signupcardpadding">
                          <div class="col s12 m12 l12">
                            <button type="submit" class="waves-effect waves-light btn black white-text" value="submit" style="border-radius: 10px;">Submit
                            </button>
                            <h5>Don't Have An Account ? <a href="signup.html" class="loginlink">SignUp</a></h5>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      <!-- Page Footer -->
      <div class="row" style="margin-top:-20px;">
        <footer class="page-footer black white-text">
            <div class="row center-align">
                <div class="col s12 m12 l12">
                  <h4><a href="index.html" class="footerlogo">GiftStore</a></h4>
                  <!-- <p class="white-text">Information will be provided soon.</p> -->
                </div>
            </div>
            <div class="row center-align">
              <div class="col s12 m12 l12">
                    <a href="index.html" class="link">Home<span class="white-text"> |</span></a> 
                    <a href="aboutus.html" class="link">About Us<span class="white-text"> |</span></a> 
                     <a href="ContactUs.html" class="link">Contact Us<span class="white-text"> |</span></a> 
                  </div>
              </div> 
              <div class="row center-align">
                <div id="social">
                  <a class="facebookBtn smGlobalBtn" href="#!"></a>
                  <a class="googleplusBtn smGlobalBtn" href="#!"></a>
                </div>
              </div>
              <div class="row center-align marginReduce footer-copyright" style="margin-bottom:-20px;">
                <div id="footertext" class="col s12 m12 l12">
                  &copy 2018 Copyright Text .All Rights reserved.
                </div>
              </div>
          </footer>
      </div>
      <!-- Preloader -->
      <div id="loader-wrapper">
         <div id="loader"></div>

         <div class="loader-section section-left"></div>
         <div class="loader-section section-right"></div>

      </div>
      <!-- Go To Top -->
      <div id="go-top" style="display: none;">
         <a title="Back to Top" href="#"><i class="fa fa-long-arrow-up" aria-hidden="true"></i></a>
      </div>
   </body>
      <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script> 
      <script src="js/jquery.validate.min.js"></script>
      <script src="js/additional-methods.min.js"></script>
      <script src="js/init.js"></script>
      <script>
        //Slider
        $(document).ready(function(){
          $('.slider').slider();
        });
         //Dropdown Trigger
         $(document).ready(function(){
            $('.dropdown-trigger').dropdown({
               belowOrigin:true
            });
         });
         $(document).ready(function(){
            $('#go-top').click(function(){
            $("html, body").animate({ scrollTop: 0 }, 600);
            return false;
          });
        });

         //Preloader 
         $(document).ready(function() {
            $(window).load(function(){
                setTimeout(function(){
                    $('body').addClass('loaded');
                }, 1000);
            });
         }); 
         //Go Top 
            var pxShow = 100; // height on which the button will show
            var fadeInTime = 400; // how slow/fast you want the button to show
            var fadeOutTime = 400; // how slow/fast you want the button to hide

            // Show or hide the sticky footer button
            jQuery(window).scroll(function() {

               if (jQuery(window).scrollTop() >= pxShow) {
                  jQuery("#go-top").fadeIn(fadeInTime);
               } else {
                  jQuery("#go-top").fadeOut(fadeOutTime);
               }

           });
        //jQuery Validate defaults
        jQuery.validator.setDefaults({
            errorClass: 'errorMessage invalid',
            validClass: "valid",
            errorElement : 'div',
            errorPlacement: function(error, element) {
                var placement = $(element).data('error');
                if (placement) {
                    $(placement).append(error)
                } else {
                    error.insertAfter(element);
                }
            }
        });
        $("#loginForm").validate({
              rules: {
                  username:  {
                      required: true,
                      pattern: /^[a-zA-Z0-9]+$/,
                      minlength:6,
                      maxlength: 16
                  },                 
                  pwd1: {
                      required: true,
                      minlength: 6,
                      maxlength: 32
                  }
              }
          });
      </script>
</html>