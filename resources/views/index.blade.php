<!DOCTYPE html>
<html>
<head>
	<title>Kansai @yield('title')</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>
  .img-circle {
   size: 50%;
    border-radius: 100%;
border: 1px solid #aaaaaa;
}
  .container1{
    background-color: yellow;
    height: 300px;
  width: 1350px;
  }
  .top-left {
  position: absolute;
  top: 8px;
  left: 16px;
}
.centered {
  position: absolute;
  top: 8px;
  left: 16px;
}
.bottom-right
{
  position: absolute;
  top: 8px;
  left: 16px;
}
.container2{
    height: 300px;
  width: 1300px;
  }
.container3{
    height: 300px;
  width: 1300px;
  }
  #box
  {
    width: 250px;
  border: 1px ;
  padding: 5px;
  margin: 5px;
  }
  section.pricing {
  background: #007bff;
  background: linear-gradient(to right);
}

.pricing .card {
  border: none;
  border-radius: 1rem;
  transition: all 0.2s;
  box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
}

.pricing hr {
  margin: 1.5rem 0;
}

.pricing .card-title {
  margin: 0.5rem 0;
  font-size: 0.9rem;
  letter-spacing: .1rem;
  font-weight: bold;
}

.pricing .card-price {
  font-size: 3rem;
  margin: 0;
}

.pricing .card-price .period {
  font-size: 0.8rem;
}

.pricing ul li {
  margin-bottom: 1rem;
}

.pricing .text-muted {
  opacity: 0.7;
}

.pricing .btn {
  font-size: 80%;
  border-radius: 5rem;
  letter-spacing: .1rem;
  font-weight: bold;
  padding: 1rem;
  opacity: 0.7;
  transition: all 0.2s;
}

/* Hover Effects on Card */

@media (min-width: 992px) {
  .pricing .card:hover {
    margin-top: -.25rem;
    margin-bottom: .25rem;
    box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.3);
  }
  .pricing .card:hover .btn {
    opacity: 1;
  }
}
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <img src="logo11.jpg" href="Front.html" alt="logo" style="width:40px;">
  </a>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#products">Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"> Contact Us</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Pricing
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Product 1</a>
          <a class="dropdown-item" href="#">Product 2</a>
          <a class="dropdown-item" href="#">Product 3</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
<div class="row">
    <div class="col-sm-1"></div>
<div class="col-sm-10" id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Pic9.jpg" alt="Los Angeles" width="1300" height="350">
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
    <div class="col-sm-1"></div>
</div>

  <div class="container1" class="content-full-width" >
    <div class="row">
      <div class="col-sm-1"></div>
      <div class="col-sm-4" style="margin-top: 60px;">
         <img src="img11.png" style="width: 100px;">
         <div class="bottom-right"><h3><strong>Trained Professionals</strong></h3> </div>
         <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ac ornare felis. Nam</p>
      </div>
      <div class="col-sm-4" style="margin-top: 60px;">
      <img src="img22.png" style="width: 100px;">
      <div class="centered"><h3><strong>Perfect Quality</strong></h3> </div>
       <p> We have perfect quality of various paints......</p>          
      </div>
       <div class="col-sm-3" style="margin-top: 60px;">
      <img src="img33.png" alt="Snow" style="width: 100px;">
      <div class="top-left"><h3><strong>Best Products Used</strong></h3> </div>
       <p> We have best products with perfect quality....</p>          
      </div>
  </div>
  </div>
  <div class="container2" style="margin-bottom: 200px; "style="width: 1800px;" class="content-full-width" >
    <div class="row" >
      <div class="col-sm-1"></div>
      <div class="col-sm-6" style="margin-top: 60px;">
         <div><h3><strong>About <p style="text-decoration-color: yellow;">CarWash</p></strong></h3>
          <h6><p style="text-decoration-color: yellow;">The Car Wash Appointment </p></h6>
          </div>
         <p> Our service is not just a wash as it is a real treatment for your car.  The car gets a rebirth due to our CCS which is truly regenerative therapy. Research has shown, steam pressure cleaning prevents corrosion for a period of 2 years when compared to the regular use of water for cleaning.</p><br>
        <h6><p>Quite and peaceful location near the nature</p></h6><br>
        <h6><p>Shopping and fitness center right inside the complex</p></h6><br>
        <h6><p>Lot of parking places, even for your visitors</p></h6><br>
        
      </div>
      <div class="col-sm-4" style="margin-top: 60px;" style="margin-top: 60px;">
      <img src="img44.jpg" style="width: 350px; height: 420px;">
      </div>
  </div>
  </div>
  <div class="container-fluid" style="border: 0px solid">
  <div class="text-center">
    <div class="jumbotron" style="border: 1px soft;">
    <h1>How We Work</h1>     
    </div>
  </div>
</div>
<div class="container3" style="margin-bottom: 200px; "style="width: 1800px;" class="content-full-width" >
    <div class="row" >
      <div class="col-sm-2"></div>
      <div class="col-md-2 bg-dark text-warning" style="margin-top: 60px;">
         <div class="mt-5"><h5><strong>1. Stage </strong></h5>
              <h3><strong>Contacting Us </strong></h3>          
         <p> Call us for a pickup or drive straight up to our workshop and leave the car under our care. We always exceed your expectations!</p></div><br>
      </div>
      <div class="col-md-2 bg-warning" style="margin-top: 60px;">
         <div class="mt-5"><h5><strong>2. Stage </strong></h5>
              <h3><strong>Car Care System-CCS </strong></h3>          
         <p> Using our state of the art CCS, we will service your car and restore its pristine glory exactly the way it came out of the showroom!</p></div><br>
      </div>
      <div class="col-md-2 bg-dark text-warning" style="margin-top: 60px;">
         <div class="mt-5"><h5><strong>3. Stage </strong></h5>
              <h3><strong>Multiple Point Check </strong></h3>          
         <p> Based on your service requirements, we will attend to your car’s needs and recommend our own template of CCS for management.</p></div><br>
      </div>
      <div class="col-md-2 bg-warning" style="margin-top: 60px;">
         <div class="mt-5"><h5><strong>4. Stage </strong></h5>
              <h3><strong>We Drop Anywhere </strong></h3>          
         <p> Once the service is completed we would deliver your car to your residence or office according to your choice in the shortest possible time!</p></div><br>
      </div>
      <div class="col-sm-2"></div>
  </div>
  </div>
  <div class="container4" style="margin-bottom: 200px; "style="width: 1800px;" class="content-full-width" >
    <div class="row">
      <div class="col-sm-2"></div>
      <div class="col-md-2 bg-warning" class="col-md-2" style="margin-top: 60px;">
         <div class="mt-5">
              <h3><strong>50+ </strong></h3>          
         <p> Trained Staffs</p></div><br>
      </div>
      <div class="col-md-2 bg-dark text-warning" class="col-md-1" style="margin-top: 60px;">
         <div class="mt-5"><h5><strong>20 </strong></h5>
              <p> Brances</p></div><br>
      </div>
      <div class="col-md-2 bg-warning" class="col-md-2" style="margin-top: 60px;">
         <div class="mt-5"><h5><strong>1500 </strong></h5>
         <p> Satisfied Clients</p></div><br>
      </div>
      <div  class="col-md-2 bg-dark text-warning" class="col-md-2" style="margin-top: 60px;">
         <div class="mt-5"><h5><strong>10000 </strong></h5>
         <p> Jobs Done</p></div><br>
      </div>
      <div class="col-sm-2"></div>
  </div>
  </div>
  <div class="container" id="products">
    <div class="row">
      <div class="col-md-4 paint">
        <a href="#"><div><img  class="img-circle" src="pt2.png"></div>
        <div class="justify-content-center text-secondary"><h2>Crystal Silver Pearl</h2></div></a>
      </div>

      <div class="col-md-4">
        <a href="#"><div><img class="img-circle"  src="pt3.png"></div>
        <div class="justify-content-center text-secondary"><h2>San Marino</h2></div></a>
      </div>

      <div class="col-md-4">
         <a href="#"><div><img class="img-circle" src="pt4.png"></div>
        <div class="justify-content-center text-secondary"><h2>Obsidian Blue Pearl </h2></div></a>
      </div>

    </div>

    <div class="row">
      <div class="col-md-4">
         <a href="#"><div><img class="img-circle" src="pt5.png"></div>
        <div class="justify-content-center text-secondary"><h2>Crystal Blue Pearl</h2></div></a>
      </div>

      <div class="col-md-4">
         <a href="#"><div><img class="img-circle" src="pt6.png"></div>
        <div class="justify-content-center text-secondary"><h2>Radiant Silver Metallic </h2></div></a>
      </div>

      <div class="col-md-4">
         <a href="#"><div><img class="img-circle" src="pt7.png"></div>
        <div class="justify-content-center text-secondary"><h2>Still Night Pearl </h2></div></a>
      </div>

    </div>
    
  </div>
    <section class="pricing py-5 bg-dark">
  <div class="container">
    <div class="row">
      <!-- Free Tier -->
      <div class="col-lg-4">
        <div class="card mb-5 mb-lg-0">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">Free</h5>
            <h6 class="card-price text-center">$0<span class="period">/month</span></h6>
            <hr>
            <ul class="fa-ul">
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Single User</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>5GB Storage</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Public Projects</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Community Access</li>
              <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Unlimited Private Projects</li>
              <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Dedicated Phone Support</li>
              <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Free Subdomain</li>
              <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Monthly Status Reports</li>
            </ul>
            <a href="#" class="btn btn-block btn-warning text-uppercase" data-toggle="modal" data-target="#basic">Button</a>
          </div>
        </div>
      </div>
      <div class="modal" id="basic">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Request Form</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <!-- Form -->
        <form class="text-center" style="color: #757575;" action="{{url('/')}}" method="post">
          @csrf
            <!-- Name -->
            <div class="md-form mt-3">
                <label for="materialContactFormName">Name</label>
                <input type="text" id="materialContactFormName" name="name"   class="form-control">
                 </div>

            <!-- E-mail -->
            <div class="md-form">
                <label for="materialContactFormEmail">E-mail</label>
                <input type="email" id="materialContactFormEmail" name="email" class="form-control">
                
            </div>

            <!-- Subject -->
            <span>Subject</span>
            <select class="mdb-select">
                <option value="" disabled>Choose option</option>
                <option value="1" selected>Feedback</option>
                <option value="2">Report a bug</option>
                <option value="3">Feature request</option>
                <option value="4">Feature request</option>
            </select>

            <!--Message-->
            <div class="md-form">
                <textarea id="materialContactFormMessage" name="message" class="form-control md-textarea" rows="3"></textarea>
                <label for="materialContactFormMessage">Message</label>
            </div>

            <!-- Copy -->
            

            <!-- Send button -->
            <button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit">Send</button>

        </form>
        <!-- Form -->

      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
      <!-- Plus Tier -->
      <div class="col-lg-4">
        <div class="card mb-5 mb-lg-0">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">Plus</h5>
            <h6 class="card-price text-center">$9<span class="period">/month</span></h6>
            <hr>
            <ul class="fa-ul">
              <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>5 Users</strong></li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>50GB Storage</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Public Projects</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Community Access</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Private Projects</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Dedicated Phone Support</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Free Subdomain</li>
              <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Monthly Status Reports</li>
            </ul>
            <a href="#" class="btn btn-block btn-warning text-uppercase" data-toggle="modal" data-target="#standard">Button</a>
          </div>
        </div>
      </div>
      <div class="modal" id="standard">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Request Form</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <!-- Form -->
        <form class="text-center" style="color: #757575;" action="{{url('/')}}" method="post">
          @csrf

            <!-- Name -->
            <div class="md-form mt-3">
                <label for="materialContactFormName" >Name</label>
                <input type="text" id="materialContactFormName" name="name" class="form-control">
                </div>

            <!-- E-mail -->
            <div class="md-form">
                
            <label for="materialContactFormEmail">E-mail</label>
            <input type="email" id="materialContactFormEmail" name="email" class="form-control">
            </div>

            <!-- Subject -->
            <span>Subject</span>
            <select class="mdb-select" name="category">
                <option value="" disabled>Choose option</option>
                <option value="1" selected>Feedback</option>
                <option value="2">Report a bug</option>
                <option value="3">Feature request</option>
                <option value="4">Feature request</option>
            </select>

            <!--Message-->
            <div class="md-form">
                <textarea id="materialContactFormMessage" name="message" class="form-control md-textarea" rows="3"></textarea>
                <label for="materialContactFormMessage">Message</label>
            </div>

            <!-- Copy -->
            
            <!-- Send button -->
            <button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit">Send</button>

        </form>
        <!-- Form -->

      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
      <!-- Pro Tier -->
      <div class="col-lg-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">Pro</h5>
            <h6 class="card-price text-center">$49<span class="period">/month</span></h6>
            <hr>
            <ul class="fa-ul">
              <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>Unlimited Users</strong></li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>150GB Storage</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Public Projects</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Community Access</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Private Projects</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Dedicated Phone Support</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>Unlimited</strong> Free Subdomains</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Monthly Status Reports</li>
            </ul>
            <a href="#" class="btn btn-block btn-warning text-uppercase" data-toggle="modal" data-target="#premium">Button</a>
          </div>
        </div>
      </div>
      <div class="modal" id="premium">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Request Form</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <!-- Form -->
        <form class="text-center" style="color: #757575;" action="{{url('/submit')}}" method="post">
          @csrf

            <!-- Name -->
            <div class="md-form mt-3">
                <label for="materialContactFormName">Name</label>
                <input type="text" name="name" id="materialContactFormName" class="form-control">
                
            </div>

            <!-- E-mail -->
            <div class="md-form">
                <label for="materialContactFormEmail">E-mail</label>
                <input type="email" name="email" id="materialContactFormEmail" class="form-control">
                 </div>

            <!-- Subject -->
            <span>Subject</span>
            <select class="mdb-select" name="category">
                <option value="" disabled>Choose option</option>
                <option value="1" selected>Feedback</option>
                <option value="2">Report a bug</option>
                <option value="3">Feature request</option>
                <option value="4">Feature request</option>
            </select>

            <!--Message-->
            <div class="md-form">
                <textarea id="materialContactFormMessage" name="message" class="form-control md-textarea" rows="3"></textarea>
                <label for="materialContactFormMessage">Message</label>
            </div>

            <!-- Copy -->
           

            <!-- Send button -->
            <button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit">Send</button>

        </form>
        <!-- Form -->

     </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
    </div>
  </div>
</section>
<hr>

    <!-- /#footer-->
    <!-- *** FOOTER Start ***-->

 
<div id="footer" class="bg-dark text-light mt-5">
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
            <br>
            <div class="list-unstyled">
            <h4 class="mb-3">Menu</h4>
            <li><a href="Front.html">Home</a></li>      
            <li><a href="Contact.html">Contact Us</a></li>      
            <h5>About Us</h5>
          </div>
            <h5>Login</h5>
            <ul class="list-unstyled">
              <li class="text-light"><a href="category.html">Requestioner</a></li>
              <li class="text-light"><a href="category.html">Head Deparment</a></li>
              <li class="text-light"><a href="category.html">Product Buyer</a></li>
            </ul>
       
          </div>
          <!-- /.col-lg-3-->
          <div class="col-lg-3 col-md-6">
            <br>
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

</body>
</html>