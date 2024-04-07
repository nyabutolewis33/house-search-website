<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Form</title>
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

    <link href="{{ asset("House_Hunting\House_hunting/Home_Property/css/style.css")}}" rel="stylesheet">
    <!-- Main style sheet -->
    <link href="{{ asset("House_Hunting\House_hunting/Home_Property/css/theme-color/dashboard.css")}}" rel="stylesheet">     

   
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

</head>

<body>
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
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
<form action="{{ route('upload.store')}}" method="POST" enctype="multipart/form-data" class="form-container">
    @csrf
    <div>
        <label for="title">Title</Title>:</label>
        <textarea name="title" id="title" cols="30" rows="5"></textarea>
    </div>
    <div>
        <label for="description">Description:</label>
        <textarea name="description" id="description" cols="30" rows="5"></textarea>
    </div>
    <div>
    <label for="thumbnail">Thumbnail:</label>
        <input type="file" class="form-control" id="thumbnail" name="thumbnail" onchange="previewThumbnail(event)">
        <img id="thumbnail-preview" src="#" alt="Thumbnail Preview" style="display: none; max-width: 200px; max-height: 200px;">
    </div>
    <div>
    <label for="images">Upload House Images:</label>
        <input type="file" class="form-control" id="images" name="images[]" multiple onchange="previewImages(event)">
        <div id="image-previews"></div>
    </div>
    <button type="submit">Upload</button>
</form>

<script>
    function previewThumbnail(event) {
        const thumbnailPreview = document.getElementById('thumbnail-preview');
        thumbnailPreview.style.display = 'block';
        thumbnailPreview.src = URL.createObjectURL(event.target.files[0]);
    }

    function previewImages(event) {
        const imagePreviews = document.getElementById('image-previews');
        imagePreviews.innerHTML = '';

        for (let i = 0; i < event.target.files.length; i++) {
            const file = event.target.files[i];
            const img = document.createElement('img');
            const span = document.createElement('span');

            img.src = URL.createObjectURL(file);
            img.alt = 'Image Preview';
            img.style.maxWidth = '80px';
            img.style.maxHeight = '80px';
            span.textContent = file.name;

            const container = document.createElement('div');
            container.appendChild(img);
            container.appendChild(span);

            imagePreviews.appendChild(container);
        }
    }
</script>

</body>
</html>

