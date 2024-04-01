<!-- resources/views/dashboard.blade.php -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Home Property | Properties</title>

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
    <link href="{{ asset("House_Hunting\House_hunting/Home_Property/css/theme-color/dashboard.css")}}" rel="stylesheet">    

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
  <!-- End header section -->
    
    </section>
    <section id="aa-menu-area">
    <nav class="navbar navbar-default main-navbar" role="navigation">  
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- LOGO -->                                               
          <!-- Text based logo -->
           <a class="navbar-brand aa-logo" href="index.blade.php"> House <span>Quest</span></a>
           <!-- Image based logo -->
           <!--<a class="navbar-brand aa-logo-img" href="index.blade.php"><img src="{{("House_Hunting\House_hunting/Home_Property/img/logo.png")}}" alt="logo"></a>-->
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <!-- Button to navigate to image upload page -->
                <li style="background-color: #007bff; margin-right: 20px"><a href="upload">Upload House</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="background-color: #007bff;">{{ $userName }}
                        <i class="fa fa-user-circle-o" aria-hidden="true"></i> <!-- Human-like head icon -->
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" style="background-color: #007bff;">
                        <li><a href="#" style="background-color: #007bff;">{{ $userEmail }}</a></li> <!-- Display user's email -->
                        <li role="separator" class="divider"></li>
                        <li><a href="#" style="background-color: #007bff;">Logout</a></li> <!-- Logout option -->
                    </ul>
                </li>
            </ul>
        </div><!--/.nav-collapse -->    
      </div>          
    </nav> 
  </section>
  <!-- End menu section -->
  <section id="aa-latest-property">
    <div class="container">
      <div class="aa-latest-property-area">
        <div class="aa-title">
          <h2>Latest Properties</h2>
          <span></span>         
        </div>
        <div class="aa-latest-properties-content">
          <div class="row">
            <div class="image-container">
                @if (!empty($images))
                    <div>
                        <h2>Your Uploaded Images:</h2>
                        @foreach ($images as $image) 
                            <div class="image-card">
                                <a href="{{ route('image.show', ['id' => $image->id]) }}">
                                    <img src="{{ asset($image->thumbnail) }}" alt="{{ $image->title }}">
                                </a>
                                <div class="image-info">
                                    <a href="{{ route('image.show', ['id' => $image->id]) }}">
                                        <h3>{{ $image->title }}</h3>
                                    </a>
                                </div>
                                <p class="image-time">Created at: {{ $image->created_at }}</p>
                            </div>
                        @endforeach
                    </div>
                @else
                    <p>No listings yet.</p>
                @endif
            </div>
            
            
          </div>
        </div>
      </div>
    </div>
  </section>


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
