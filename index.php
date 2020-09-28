<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-owesome/3.3.7/css/font-owesome.min.css">
    
    <link rel="stylesheet" href="css/header.css" type="text/css">

    <script type="text/javascript" src="js/myJs.js"></script>
    <script src="https://kit.fontowesome.com/a076d05399.js"></script>


    <title>Home-Isimbi</title>
  </head>

<body>
  <?php include("header.php") ?>
  <br><br><br><br><br><br>

  <!-- carousel slider starts here -->
  <div id="cusCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#cusCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#cusCarousel" data-slide-to="1"></li>
      <li data-target="#cusCarousel" data-slide-to="2"></li>
    </ol>

    <!-- wrapperr for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/slider1.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption text-center">
          <h2>AFRICA INVESTMENT PORTAL</h2>
          <h4 style="font-size:25px" >The gateway to your successful investment in Africa</h4>
        </div> 
      </div>
      <div class="item">
        <img src="images/slider2.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption text-center">
          <h2>AFRICA INVESTMENT PORTAL</h2>
          <h4 style="font-size:25px" >The gateway to your successful investment in Africa</h4>
        </div> 
      </div>
      <div class="item">
        <img src="images/slider3.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption text-center">
          <h2>AFRICA INVESTMENT PORTAL</h2>
          <h4 style="font-size:25px" >The gateway to your successful investment in Africa</h4>
        </div> 
      </div>
    </div>

    <!-- controls -->
    <a class="left carousel-control" href="#cusCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#cusCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <!-- carousel slider ends here -->

  <br>
  <div class="content">
    <p class="content1">We are a socially-motivated management consultancy</p>
    <p class="content2">that brings an ‘owner’s mindset’ to every engagement</p> <br>    
  </div>

  <div class="content3"> <hr class="line1"> </div>

  <div class="container">
    <div class="row">

      <div class='col-xs-12 col-sm-6 col-md-4 col-lg-4'>
        <div class='single-blog text-center'>
          <i class="fa fa-bandcamp" aria-hidden="true"></i>      
          <h2>Our Mission</h2>
          <p>To be a bridge for African investments by connecting people to business/investment opportunities 
            and Business/  investment  opportunity to people from in and outside Africa.</p>
        </div>
      </div>            
              
      <div class='col-xs-12 col-sm-6 col-md-4 col-lg-4'>
        <div class='single-blog text-center'>
          <i class="fa fa-users" aria-hidden="true"></i>
          <h2>Our Vision</h2>
          <p>To be a continental trusted partner and a one stop center for  stress free service delivery
             for all regulatory requirements and compliances for investments in Africa for local and 
             international investors.</p>
        </div>
      </div> 

      <div class='col-xs-12 col-sm-6 col-md-4 col-lg-4'>
        <div class='single-blog text-center'>
          <i class="fa fa-heart-o" aria-hidden="true"></i>
          <h2>Our Motivation</h2>
          <p>The love of Jesus Christ compels us to use our best where the need is greatest.</p>
        </div>
      </div> 

    </div>
  </div>
  <div class="content3"> <hr class="line1"> 
  </div>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>