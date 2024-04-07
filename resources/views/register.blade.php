<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Home Property | Register</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset("House_Hunting\House_hunting/Home_Property/img/favicon.ico")}}" type="image/x-icon">
    
    <!-- Font awesome -->
    <link href="{{ asset("House_Hunting\House_hunting/Home_Property/css/font-awesome.css")}}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{ asset("House_Hunting\House_hunting/Home_Property/css/bootstrap.css")}}" rel="stylesheet">   
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="{{ asset("House_Hunting\House_hunting/Home_Property/css/slick.css")}}">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="{{ asset("House_Hunting\House_hunting/Home_Property/css/nouislider.css")}}">
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="{{ asset("House_Hunting\House_hunting/Home_Property/css/jquery.fancybox.css")}}" type="text/css" media="screen" /> 
    <!-- Theme color -->
    <link id="switcher" href="{{ asset("House_Hunting\House_hunting/Home_Property/css/theme-color/default-theme.css")}}" rel="stylesheet">     

    <!-- Main style sheet -->
    <link href="{{ asset("House_Hunting\House_hunting/Home_Property/css/style.css")}}" rel="stylesheet">      

   
    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css'>    
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  

  </head>
  <body class="aa-price-range">  
    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-angle-double-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->
  <header id="aa-header">  
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-header-area">
            <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="aa-header-left">
                  <div class="aa-telephone-no">
                    <span class="fa fa-phone"></span>
                    +254-797-920-404
                  </div>
                  <div class="aa-email hidden-xs">
                    <span class="fa fa-envelope-o"></span> info@housequest.com
                  </div>
                </div>              
              </div>
              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="aa-header-right">
                  <a href="index" class="aa-register">Home</a>
                  <a href="contact" class="aa-register">Contact</a>
                  <a href="about" class="aa-register">About Us</a>
                  <!--<a href="signin" class="aa-login">Login</a> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header> 
  <section id="aa-signin">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-signin-area">
            <div class="aa-signup-form">
              <div class="aa-signup-form-title">
                <h4>Create your account and Advertise with us</h4>
              </div>
              <form class="contactform" method="POST" action="register-user"> 
              @csrf                                                
                <div class="aa-single-field">
                  <label for="name">Name <span class="required">*</span></label>
                  <input type="text" required="required" aria-required="true" value="" name="name">

                  @error('name')
                  <p class="text-red-500 text-xs mt-1">Field can not be empty</p>
                  @enderror
                </div>
                <div class="aa-single-field">
                  <label for="email">Email <span class="required">*</span></label>
                  <input type="email" required="required" aria-required="true" value="" name="email">

                  @error('email')
                  <p class="text-red-500 text-xs mt-1">Invalid Email Address</p>
                  @enderror
                </div>
                <div class="aa-single-field">
                  <label for="email">National Id Number <span class="required">*</span></label>
                  <input type="text" required="required" aria-required="true" value="" name="national_id_number">

                  @error('national_id_number')
                  <p class="text-red-500 text-xs mt-1"></p>
                  @enderror
                </div>
                <div class="aa-single-field">
                  <label for="password">Password <span class="required">*</span></label>
                  <input type="password" name="password"> 

                  @error('password')
                  <p class="text-red-500 text-xs mt-1">password does not match</p>
                  @enderror
                </div>
                <div class="aa-single-field">
                  <label for="password">Confirm Password <span class="required">*</span></label>
                  <input type="password" name="password_confirmation"> 

                  @error('password_confirmation')
                  <p class="text-red-500 text-xs mt-1">password does not match</p>
                  @enderror
                </div>
                <div class="aa-single-field">
                    <div class="checkbox-container">
                      <input type="checkbox" id="confirmation" name="confirmation" required> I certify that I am the legal owner of the property and that the provided details are accurate and verifiable.<br>
                    </div>
                    <div class="checkbox-container">
                      <input type="checkbox" id="confirmation" name="confirmation" required> I confirm that any house(s) I upload to this platform belong to me and not to anyone else.
                    </div>
                    @error('confirmation')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="aa-single-submit">
                  <input type="submit" value="Create Account" name="submit"> 
                  <p>Already have an Account? <a href="signin">Signin!</a></p> 
                </div>                  
              </form>
            </div>
          </div>
          <div class="aa-logo-container">
            <img src="{{("House_Hunting\House_hunting/Home_Property/img/apple-touch-icon.png")}}" alt="logo">
            <a class="aa-logo" href="index.blade.php"> House <span>Quest</span></a>
          </div>
        </div>
      </div>
    </div>
  </section> 

  <script>
  $(document).ready(function(){
    $(window).scroll(function(){
      if ($(this).scrollTop() > 100) {
        $('.scrollToTop').fadeIn();
      } else {
        $('.scrollToTop').fadeOut();
      }
    });

    $('.scrollToTop').click(function(){
      $("html, body").animate({ scrollTop: 0 }, 600);
      return false;
    });
  });
</script>
   <!-- jQuery library -->
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
  <script src="{{asset("House_Hunting\House_hunting/Home_property/js/jquery.min.js")}}"></script>   
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="{{asset("House_Hunting\House_hunting/Home_property/js/bootstrap.js")}}"></script>   
  <!-- slick slider -->
  <script type="text/javascript" src="{{asset("House_Hunting\House_hunting/Home_property/js/slick.js")}}"></script>
  <!-- Price picker slider -->
  <script type="text/javascript" src="{{asset("House_Hunting\House_hunting/Home_property/js/nouislider.js")}}"></script>
   <!-- mixit slider -->
  <script type="text/javascript" src="{{asset("House_Hunting\House_hunting/Home_property/js/jquery.mixitup.js")}}"></script>
  <!-- Add fancyBox -->        
  <script type="text/javascript" src="{{asset("House_Hunting\House_hunting/Home_property/js/jquery.fancybox.pack.js")}}"></script>
  <!-- Custom js -->
  <script src="{{asset("House_Hunting\House_hunting/Home_property/js/custom.js")}}"></script> 
  
  </body>
</html>