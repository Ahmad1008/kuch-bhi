<!DOCTYPE html>
<html lang="en">
<head>
  <title>Kansai Paint</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
      width: 100%;
      height: 350px;
  }
  </style>
</head>
<body>
  <div >
<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="#">
    <img src="logo11.jpg" href="#" alt="lsogo" style="width:40px;">
  </a>
  
  <!-- Links -->
  <ul class="navbar-nav" >
    <li class="nav-item" >
      <a class="nav-link" href="{{url('Front')}}">Home</a>
    </li>
     <li class="nav-item dropdown text-dark">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Products
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Automotive Paints</a>
          <a class="dropdown-item" href="#">Industrial Coatings</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Marine Coatings</a>
        </div>
      </li> 
    <li class="nav-item">
      <a class="nav-link" href="{{url('About')}}">About Us</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('Contact')}}">Contact Us</a>

           
    </li>
    
  </ul>
</nav>
  </div>
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img2.png" alt="Los Angeles" width="1100" height="350">
      <div class="carousel-caption">
        <h3>Customize Your Car</h3>
        <p>Paint for your car</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="Plants.png" alt="Chicago" width="1100" height="350">
      <div class="carousel-caption">
        <h3>Kansai</h3>
        <p>Paint Plant</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="Hall.png" alt="New York" width="1100" height="350">
      <div class="carousel-caption">
        <h3>Furnish Hall</h3>
        <p>Furnish your car</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<br><br><br><br><br><br><br>
<br>
  <div>
  <div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-4">
      <img src="Kansaio.jpg" style="width: 450px;">
    </div> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    <div class="col-sm-5">
     <h3><strong>About Us</strong></h3> <p> Welcome to The Coating Store where you can buy high quality custom car paint products at prices you never thought possible. Follow the links to learn more about us and our products or visit the shopping area of the site to browse our cool custom paint colors including paints and classic car colors.
</p>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br>
    <div class="col-sm-1"></div>
  </div>
  
  </div>
 
 <!-- FOOTER Start -->
 <div id="footer" style="background-color: aqua  ">
      <div class="container">
       <div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-5">
      <img src="Logof.jpg"  style="height: 90px">
     <h3><strong>About Us</strong></h3> <p> Over the past 100 years, Kansai Paint has established itself amongst the top ten paint manufacturers in the world. Based on corporate values revolving around innovation, credibility, respect and stakeholders interest, we have been involved in enhancing economic, environmental and social sustainability across the globe.
</p>
    </div>
          <!-- /.col-lg-3-->
          <div class="col-lg-3 col-md-6">
            <div class="list-unstyled">
            <h4 class="mb-3">Menu</h4>
            <li><a href="{{ url('Front') }}">Home</a></li>      
            <li><a href="{{ url('Contact') }}">Contact Us</a></li>  
            <li><a href="{{ url('About') }}">About Us</a></li>      
            <h5>About Us</h5>
          </div>
            <h5>Login</h5>
            <ul class="list-unstyled">
              <li><a href="{{url('login_Requisioner')}}">Requestioner</a></li>
              <li><a href="{{url('login_DepartmentHead')}}">Head Deparment</a></li>
              <li><a href="{{url('login_sectionhead')}}">Product Buyer</a></li>
            </ul>
       
          </div>
          <!-- /.col-lg-3-->
          <div class="col-lg-3 col-md-6">
            <h4 class="mb-3">Contact Us</h4>
            <p><img src="msgs.jpg">  info@kansaipaint.com.pk<br><img src="phone.jpg"> (042) 111 526 724<br><img src="plane.jpg"> 11-CCA Phase-V DHA Lahore, Pakistan 54600
               <h4 class="mb-3">Get the news</h4>
            <p class="text-muted">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
           
            <hr>
            <h4 class="mb-3">Stay in touch</h4>
          </div>
        
       
          <!-- /.col-lg-3-->
          </div>
        <!-- /.row-->

      </div>
      <!-- /.container-->
    </div>
    <!-- /#footer-->
    <!-- *** FOOTER END ***-->

    <!-- /#footer-->
    <!-- *** FOOTER END ***-->

</body>
</html>
  