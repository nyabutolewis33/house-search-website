<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Home Property | Home</title>
    
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
  <!-- Pre Loader -->
  <div id="aa-preloader-area">
    <div class="pulse"></div>
  </div>
  <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-angle-double-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->

  <!-- Start header section -->
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
                    +254 - 797 - 920 - 404
                  </div>
                  <div class="aa-email hidden-xs">
                    <span class="fa fa-envelope-o"></span> info@housequest.com
                  </div>
                </div>              
              </div>
              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="aa-header-right">
                  <a href="register" class="aa-register">Register</a>
                  <a href="signin" class="aa-login">Login</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- End header section -->

  <!-- Start menu section -->
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
          <ul id="top-menu" class="nav navbar-nav navbar-right aa-main-nav">
            <li class="active"><a href="index">HOME</a></li>
            <li class="active"><a href="contact">CONTACT</a></li>
            <li class="active"><a href="about">ABOUT US</a></li>
          </ul>                            
        </div><!--/.nav-collapse -->       
      </div>          
    </nav> 
  </section>
  <!-- End menu section -->

  <!-- Advance Search -->
  <section id="aa-advance-search">
    <div class="container">
      <div class="aa-advance-search-area">
        <div class="form">
         <div class="aa-advance-search-top">
            <div class="row">
              <div class="col-md-4">
                <div class="aa-single-advance-search">
                  <input type="text" placeholder="Type Your Location">
                </div>
              </div>
              <div class="col-md-2">
                <div class="aa-single-advance-search">
                  <select>
                   <option value="0" selected>Category</option>
                    <option value="1">Flat</option>
                    <option value="2">Land</option>
                    <option value="3">Plot</option>
                    <option value="4">Commercial</option>
                  </select>
                </div>
              </div>
              <div class="col-md-2">
                 <div class="aa-single-advance-search">
                  <select>
                    <option value="0" selected>Type</option>
                    <option value="1">Flat</option>
                    <option value="2">Land</option>
                    <option value="3">Plot</option>
                    <option value="4">Commercial</option>
                  </select>
              </div>
              </div>
              <div class="col-md-2">
                 <div class="aa-single-advance-search">
                  <select>
                    <option value="0" selected>Type</option>
                    <option value="1">Flat</option>
                    <option value="2">Land</option>
                    <option value="3">Plot</option>
                    <option value="4">Commercial</option>
                  </select>
              </div>
              </div>
              <div class="col-md-2">
                <div class="aa-single-advance-search">
                  <input class="aa-search-btn" type="submit" value="Search">
                </div>
              </div>
            </div>
          </div>
         <div class="aa-advance-search-bottom">
           <div class="row">
            <div class="col-md-6">
              <div class="aa-single-filter-search">
                <span>AREA (SQ)</span>
                <span>FROM</span>
                <span id="skip-value-lower" class="example-val">30.00</span>
                <span>TO</span>
                <span id="skip-value-upper" class="example-val">100.00</span>
                <div id="aa-sqrfeet-range" class="noUi-target noUi-ltr noUi-horizontal noUi-background">
                </div>                  
              </div>
            </div>
            <div class="col-md-6">
              <div class="aa-single-filter-search">
                <span>PRICE ($)</span>
                <span>FROM</span>
                <span id="skip-value-lower2" class="example-val">30.00</span>
                <span>TO</span>
                <span id="skip-value-upper2" class="example-val">100.00</span>
                <div id="aa-price-range" class="noUi-target noUi-ltr noUi-horizontal noUi-background">
                </div>      
              </div>
            </div>
          </div>  
         </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Advance Search -->

  <!-- Latest property -->
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
                @if (!empty($imageData))
                    <div>
                        <h2>Your Uploaded Images:</h2>
                        @foreach ($imageData as $image)
                            <div class="image-card">
                                <img src="{{ asset($image['path']) }}" alt="{{ $image['title'] }}">
                                <div class="image-details">
                                    <p>Title: <strong>{{ $image['title'] }}</strong></p>
                                    <p class="image-description">Description: {{ $image['description'] }}</p>
                                    <p class="image-time">Posted at: {{ $image['posted_at'] }}</p>
                                </div>
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
  <!-- / Latest property -->

  <!-- Service section -->
  <section id="aa-service">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-service-area">
            <div class="aa-title">
              <h2>Our Service</h2>
              <span></span>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum sit ea nobis quae vero voluptatibus.</p>
            </div>
            <!-- service content -->
            <div class="aa-service-content">
              <div class="row">
                <div class="col-md-3">
                  <div class="aa-single-service">
                    <div class="aa-service-icon">
                      <span class="fa fa-home"></span>
                    </div>
                    <div class="aa-single-service-content">
                      <h4><a href="#">Property Sale</a></h4>
                      <p>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="aa-single-service">
                    <div class="aa-service-icon">
                      <span class="fa fa-check"></span>
                    </div>
                    <div class="aa-single-service-content">
                      <h4><a href="#">Property Rent</a></h4>
                      <p>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="aa-single-service">
                    <div class="aa-service-icon">
                      <span class="fa fa-crosshairs"></span>
                    </div>
                    <div class="aa-single-service-content">
                      <h4><a href="#">Property Development</a></h4>
                      <p>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="aa-single-service">
                    <div class="aa-service-icon">
                      <span class="fa fa-bar-chart-o"></span>
                    </div>
                    <div class="aa-single-service-content">
                      <h4><a href="#">Market Analysis</a></h4>
                      <p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Service section -->

  <!-- Promo Banner Section -->
  <section id="aa-promo-banner">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-promo-banner-area">
            <h3>Find Your Best Property</h3>
            <p>
            <a href="#" class="aa-view-btn">View Details</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Promo Banner Section -->

  <!-- Our Agent Section-->
  <section id="aa-agents">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-agents-area">
            <div class="aa-title">
              <h2>Our Agents</h2>
              <span></span>
              <p>
            </div>
            <!-- agents content -->
            <div class="aa-agents-content">
              <ul class="aa-agents-slider">
                <li>
                  <div class="aa-single-agents">
                    <div class="aa-agents-img">
                      <img src="{{("House_Hunting\House_hunting/Home_Property/img/agents/agent-1.png")}}" alt="agent member image">
                    </div>
                    <div class="aa-agetns-info">
                      <h4><a href="#">Philip Smith</a></h4>
                      <span>Top Agent</span>
                      <div class="aa-agent-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="aa-single-agents">
                    <div class="aa-agents-img">
                      <img src="{{("House_Hunting\House_hunting/Home_Property/img/agents/agent-5.png")}}" alt="agent member image">
                    </div>
                    <div class="aa-agetns-info">
                      <h4><a href="#">Adam Barney</a></h4>
                      <span>Expert Agent</span>
                      <div class="aa-agent-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="aa-single-agents">
                    <div class="aa-agents-img">
                      <img src="{{("House_Hunting\House_hunting/Home_Property/img/agents/agent-3.png")}}" alt="agent member image">
                    </div>
                    <div class="aa-agetns-info">
                      <h4><a href="#">Paul Walker</a></h4>
                      <span>Director</span>
                      <div class="aa-agent-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="aa-single-agents">
                    <div class="aa-agents-img">
                      <img src="{{("House_Hunting\House_hunting/Home_Property/img/agents/agent-4.png")}}" alt="agent member image">
                    </div>
                    <div class="aa-agetns-info">
                      <h4><a href="#">John Smith</a></h4>
                      <span>Jr. Agent</span>
                      <div class="aa-agent-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                      </div>
                    </div>
                  </div>
                </li>
                 <li>
                  <div class="aa-single-agents">
                    <div class="aa-agents-img">
                      <img src="{{("House_Hunting\House_hunting/Home_Property/img/agents/agent-1.png")}}" alt="agent member image">
                    </div>
                    <div class="aa-agetns-info">
                      <h4><a href="#">Philip Smith</a></h4>
                      <span>Top Agent</span>
                      <div class="aa-agent-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="aa-single-agents">
                    <div class="aa-agents-img">
                      <img src="{{("House_Hunting\House_hunting/Home_Property/img/agents/agent-5.png")}}" alt="agent member image">
                    </div>
                    <div class="aa-agetns-info">
                      <h4><a href="#">Adam Barney</a></h4>
                      <span>Expert Agent</span>
                      <div class="aa-agent-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="aa-single-agents">
                    <div class="aa-agents-img">
                      <img src="{{("House_Hunting\House_hunting/Home_Property/img/agents/agent-3.png")}}" alt="agent member image">
                    </div>
                    <div class="aa-agetns-info">
                      <h4><a href="#">Paul Walker</a></h4>
                      <span>Director</span>
                      <div class="aa-agent-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="aa-single-agents">
                    <div class="aa-agents-img">
                      <img src="{{("House_Hunting\House_hunting/Home_Property/img/agents/agent-4.png")}}" alt="agent member image">
                    </div>
                    <div class="aa-agetns-info">
                      <h4><a href="#">John Smith</a></h4>
                      <span>Jr. Agent</span>
                      <div class="aa-agent-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Our Agent Section-->

  <!-- Client Testimonial -->
  <section id="aa-client-testimonial">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-client-testimonial-area">
            <div class="aa-title">
              <h2>What Client Say</h2>
              <span></span>
              <p>
            </div>
            <!-- testimonial content -->
            <div class="aa-testimonial-content">
              <!-- testimonial slider -->
              <ul class="aa-testimonial-slider">
                <li>
                    <div class="aa-testimonial-bio">
                      <p>David Muller</p>
                      <span>Web Designer</span>
                    </div>
                  </div>
                </li>
                 <li>
                  <div class="aa-testimonial-single">
                    <div class="aa-testimonial-img">
                      <img src="{{("House_Hunting\House_hunting/Home_Property/img/testimonial-3.png")}}" alt="testimonial img">
                    </div>
                    <div class="aa-testimonial-info">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate consequuntur ducimus cumque iure modi nesciunt recusandae eligendi vitae voluptatibus, voluptatum tempore, ipsum nisi perspiciatis. Rerum nesciunt fuga ab natus, dolorem?</p>
                    </div>
                    <div class="aa-testimonial-bio">
                      <p>David Muller</p>
                      <span>Web Designer</span>
                    </div>
                  </div>
                </li>
                 <li>
                  <div class="aa-testimonial-single">
                    <div class="aa-testimonial-img">
                      <img src="{{("House_Hunting\House_hunting/Home_Property/img/testimonial-2.png")}}" alt="testimonial img">
                    </div>
                    <div class="aa-testimonial-info">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate consequuntur ducimus cumque iure modi nesciunt recusandae eligendi vitae voluptatibus, voluptatum tempore, ipsum nisi perspiciatis. Rerum nesciunt fuga ab natus, dolorem?</p>
                    </div>
                    <div class="aa-testimonial-bio">
                      <p>David Muller</p>
                      <span>Web Designer</span>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Client Testimonial -->

  <!-- Client brand -->
  <section id="aa-client-brand">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-client-brand-area">
            <ul class="aa-client-brand-slider">
              <li>
                <div class="aa-client-single-brand">
                  <img src="{{("House_Hunting\House_hunting/Home_Property/img/client-brand-1.png")}}" alt="brand image">
                </div>
              </li>
              <li>
                <div class="aa-client-single-brand">
                  <img src="{{("House_Hunting\House_hunting/Home_Property/img/client-brand-2.png")}}" alt="brand image">
                </div>
              </li>
              <li>
                <div class="aa-client-single-brand">
                  <img src="{{("House_Hunting\House_hunting/Home_Property/img/client-brand-3.png")}}" alt="brand image">
                </div>
              </li>
              <li>
                <div class="aa-client-single-brand">
                  <img src="{{("House_Hunting\House_hunting/Home_Property/img/client-brand-5.png")}}" alt="brand image">
                </div>
              </li>
              <li>
                <div class="aa-client-single-brand">
                  <img src="{{("House_Hunting\House_hunting/Home_Property/img/client-brand-4.png")}}" alt="brand image">
                </div>
              </li>
               <li>
                <div class="aa-client-single-brand">
                  <img src="{{("House_Hunting\House_hunting/Home_Property/img/client-brand-1.png")}}" alt="brand image">
                </div>
              </li>
              <li>
                <div class="aa-client-single-brand">
                  <img src="{{("House_Hunting\House_hunting/Home_Property/img/client-brand-2.png")}}" alt="brand image">
                </div>
              </li>
              <li>
                <div class="aa-client-single-brand">
                  <img src="{{("House_Hunting\House_hunting/Home_Property/img/client-brand-3.png")}}" alt="brand image">
                </div>
              </li>
              <li>
                <div class="aa-client-single-brand">
                  <img src="{{("House_Hunting\House_hunting/Home_Property/img/client-brand-5.png")}}" alt="brand image">
                </div>
              </li>
              <li>
                <div class="aa-client-single-brand">
                  <img src="{{("House_Hunting\House_hunting/Home_Property/img/client-brand-4.png")}}" alt="brand image">
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Client brand -->

  <!-- Latest blog -->
  <section id="aa-latest-blog">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-latest-blog-area">
            <div class="aa-title">
              <h2>Latest News</h2>
              <span></span>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe magni, est harum repellendus. Accusantium, nostrum!</p>
            </div>
            <div class="aa-latest-blog-content">
              <div class="row">
                <!-- start single blog -->
                <div class="col-md-4">
                  <article class="aa-blog-single">
                    <figure class="aa-blog-img">
                      <a href="#"><img src="{{("House_Hunting\House_hunting/Home_Property/img/blog-img-1.jpg")}}" alt="img"></a>
                      <span class="aa-date-tag">15 April, 16</span>
                    </figure>
                    <div class="aa-blog-single-content">
                      <h3><a href="#">Lorem ipsum dolor sit amet, consectetur.</a></h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio est quaerat magnam exercitationem voluptas, voluptatem sed quam ab laborum voluptatum tempore dolores itaque, molestias vitae.</p>
                      <div class="aa-blog-single-bottom">
                        <a href="#" class="aa-blog-author"><i class="fa fa-user"></i> Admin</a>
                        <a href="#" class="aa-blog-comments"><i class="fa fa-comment-o"></i>6</a>
                      </div>
                    </div>
                   
                  </article>
                </div>
                <!-- start single blog -->
                <div class="col-md-4">
                  <article class="aa-blog-single">
                    <figure class="aa-blog-img">
                      <a href="#"><img src="{{("House_Hunting\House_hunting/Home_Property/img/blog-img-2.jpg")}}" alt="img"></a>
                      <span class="aa-date-tag">15 April, 16</span>
                    </figure>
                    <div class="aa-blog-single-content">
                      <h3><a href="#">Lorem ipsum dolor sit amet, consectetur.</a></h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio est quaerat magnam exercitationem voluptas, voluptatem sed quam ab laborum voluptatum tempore dolores itaque, molestias vitae.</p>
                      <div class="aa-blog-single-bottom">
                        <a href="#" class="aa-blog-author"><i class="fa fa-user"></i> Admin</a>
                        <a href="#" class="aa-blog-comments"><i class="fa fa-comment-o"></i>6</a>
                      </div>
                    </div>                   
                  </article>
                </div>
                <!-- start single blog -->
                <div class="col-md-4">
                  <article class="aa-blog-single">
                    <figure class="aa-blog-img">
                      <a href="#"><img src="{{("House_Hunting\House_hunting/Home_Property/img/blog-img-3.jpg")}}" alt="img"></a>
                      <span class="aa-date-tag">15 April, 16</span>
                    </figure>
                    <div class="aa-blog-single-content">
                      <h3><a href="#">Lorem ipsum dolor sit amet, consectetur.</a></h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio est quaerat magnam exercitationem voluptas, voluptatem sed quam ab laborum voluptatum tempore dolores itaque, molestias vitae.</p>
                      <div class="aa-blog-single-bottom">
                        <a href="#" class="aa-blog-author"><i class="fa fa-user"></i> Admin</a>
                        <a href="#" class="aa-blog-comments"><i class="fa fa-comment-o"></i>6</a>
                      </div>
                    </div>                   
                  </article>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Latest blog -->

  <!-- Footer -->
  <footer id="aa-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
        <div class="aa-footer-area">
          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="aa-footer-left">
               <p>Designed by <a rel="nofollow" href="http://www.markups.io/">MarkUps.io</a></p>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="aa-footer-middle">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
                <a href="#"><i class="fa fa-youtube"></i></a>
              </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
              <div class="aa-footer-right">
                <a href="#">Home</a>
                <a href="#">Support</a>
                <a href="#">License</a>
                <a href="#">FAQ</a>
                <a href="#">Privacy & Term</a>
              </div>
            </div>            
          </div>
        </div>
      </div>
      </div>
    </div>
  </footer>
  <!-- / Footer -->

 
  
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