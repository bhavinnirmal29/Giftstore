<!DOCTYPE html>
<?php

$flag=0;
// Create connection
$conn = new mysqli('localhost','root', '', 'giftstore');
// Check connection
if ($conn->connect_error)
 {
    die("Connection failed: " . $conn->connect_error);
}
?>
<html>
   <head>
      <title>GiftStore</title>
      <meta name="viewport" content="width=device-width, initial-scale=1"> 
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
        body{
          background-image:url("images/space.jpg");
          background-size:cover;
          /*background-repeat:no-repeat;*/
        }
        .container{
          opacity:0.6;
        }
        .material-icons{
          font-weight:bold;
        }
		    /* Class for placement of error messages for jQuery Validate */
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
      </style>
   </head>
   
   <body>
    <!--navbar-->
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
                  <li><a href="index.html" class="navlink">Home</a></li>
                  <li><a href="#" class="dropdown-trigger navlink" data-activates="categories1">Categories<i class="material-icons right">arrow_drop_down</i></a></li>
                  <li><a href="aboutus.html" class="navlink">About Us</a></li>
                  <li><a href="contactus.html" class="navlink">Contact Us</a></li>
                  <li><a href="signup.php" class="active navlink">Sign Up</a></li>  
               </ul>
               <ul class="side-nav" id="mobile-demo">
                <li><a href="index.html" class="side_logo left-align">GiftStore</a></li>
                <hr>
                <li><a href="index.html" class="side_nav">Home</a></li>
                <li><a href="aboutus.html" class="side_nav">About Us</a></li>
                <li><a href="contactus.html" class="side_nav">Contact Us</a></li>
                <li><a href="signup.php" class="side_nav">SignUp</a></li>
            </ul>
          </div>
        </nav>
      </div>
      <div class="container" style="margin-top:-20px;">
        <div class = "row">
           <div class = "col s12 m12 l12" class="center-align">
              <div class = "card blue-grey lighten-4 black-text" style="font-weight: bold;">
                 <div class = "card-content"> 
                  <div class="center-align signuptitle"><span class="blue-text text-lighten-2">S</span>ign <span class="blue-text text-lighten-2">U</span>p</div>
                  <hr/>
                    <div class = "row">
                      <form class = "col s12 center-align" id="signupForm" method="POST" action="#">
                        <div class = "row signupcardpadding">
                          <div class = "input-field col s12 m12 l6">
                            <i class="material-icons prefix">account_circle</i>               
                            <input  name = "fname" type = "text"/>
                            <label for = "fname">First Name</label>
                          </div>
                          <div class = "input-field col s12 m12 l6">
                            <i class="material-icons prefix">account_circle</i>                
                            <input name = "lname" type = "text"/>
                            <label for = "lname">Last Name</label>
                          </div>
                        </div>
                        <div class = "row signupcardpadding">
                          <div class = "input-field col s12 m12 l6">
                            <i class="material-icons prefix">email</i>
                            <input name = "email" type = "email" />
                            <label for = "email">Email</label>
                          </div>
                          <div class = "input-field col s12 m12 l6">
                            <i class="material-icons prefix">phone</i>                
                            <input name = "phone11" type = "number" />
                            <label for = "phone">Phone</label>
                          </div>
                        </div>
                        <div class = "row signupcardpadding">
                          <div class = "input-field col s12 m12 l6">
                            <i class="material-icons prefix">account_box</i>
                            <input name = "uname11" type = "text"/>
                            <label for = "uname">Username</label>
                          </div>
                          <div class = "input-field col s12 m12 l6">
                            <i class="material-icons prefix" style="font-weight: bold;">fingerprint</i>             
                            <input name = "pwd" type = "password"/>
                            <label for = "pwd">Password</label>
                          </div>
                        </div>
                        <div class="row center-align signupcardpadding">
                          <div class="col s12 m12 l12">
                            <h5 class="black-text" style="font-weight: bold;">Already have an account ? <a href="login.php" class="loginlink">Login</a></h4>
                          </div>
                        </div>
                        <div class="row signupcardpadding">
                          <div class="col s12 m12 l12">
                            <h5 class="center-align">
                              <button type="submit" name="submit" class="waves-effect waves-light btn black lighten-1 white-text" style="border-radius: 10px;font-weight: bold;">
                                Submit
                              </button>
                            </h5>
                          </div>
                        </div>
                        <!-- After Submit Database Success Message Modal Popup -->
                        <?php
                          if(isset($_POST['submit'])){
                            $fname=$_POST['fname'];
                            $lname=$_POST['lname'];
                            $email=$_POST['email'];
                            $phone=$_POST['phone11'];
                            $uname=$_POST['uname11'];
                            $pwd1=$_POST['pwd'];
                            $salt="8DC_9Kl?";
                            $enpw=md5($pwd1.$salt);

                          $sql="INSERT INTO signup (fname,lname,email,phone,uname,pwd) VALUES('$fname','$lname','$email','$phone','$uname','$enpw')";

                          if ($conn->query($sql) === TRUE) {
                            $flag=1;
                          } else {
                              $flag=0;
                          }

                          $conn->close();
                          }
                        ?>
                      </form>       
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--Success Modal -->
        <div id="modal1" class="modal green lighten-2">
          <div class="modal-content">
            <h4>Success Message</h4>
            <p>You have successfully registered.</p>
          </div>
          <div class="modal-footer green lighten-2">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat black">OK</a>
          </div>
        </div>
        <div id="modal2" class="modal red lighten-2">
          <div class="modal-content">
            <h4>Failure Message</h4>
            <p>Registration Unsuccessful.Data Already Exists.</p>
          </div>
          <div class="modal-footer red lighten-2">
            <a href="#!" class="modal-close waves-effect waves-red btn-flat black">OK</a>
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
                     <a href="contactus.html" class="link">Contact Us<span class="white-text"> |</span></a>
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
         function successModal(){
          $(document).ready(function(){
            $("#modal1").openModal();
          });
        }
        function failureModal(){
          $(document).ready(function(){
            $("#modal2").openModal();
          });
        }
        <?php
          if($flag==1){
            ?>successModal();
            <?php
          }
          else{
            if(isset($_POST['submit'])){
           ?>failureModal();
           <?php 
         }
          }
          $flag=0;
        ?>
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
        

      $("#signupForm").validate({
              rules: {
                  fname:  {
                      required: true,
                      pattern: /^[a-zA-Z ]+$/,
                      maxlength: 10
                  },
                  lname:  {
                      required: true,
                      pattern: /^[a-zA-Z ]+$/,
                      maxlength: 16
                  },
				          uname11:  {
                      required: true,
                      pattern: /^[a-zA-Z0-9]+$/,
					            minlength:6,
                      maxlength: 16
                  },
                  phone11: {
                      required: true,
                      digits: true,
                      minlength: 10,
                      maxlength: 10
                  },
                  email: {
                      required: true,
                      email: true,
                      pattern: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
                      maxlength: 32
                  },                  
                  pwd: {
                      required: true,
                      minlength: 6,
                      maxlength: 32
                  }
              }
          });

      </script>
</html>