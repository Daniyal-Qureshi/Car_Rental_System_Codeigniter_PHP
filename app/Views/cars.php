<!doctype html>
<html lang="en">

  <head>
    <title>Car's Service  </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">

  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    
    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>



      <header class="site-navbar site-navbar-target" role="banner">

        <div class="container">
          <div class="row align-items-center position-relative">

            <div class="col-3 ">
              <div class="site-logo">
              <h2 style="color:white">Dany's Car Service</h2>
   
              </div>
            </div>

            <div class="col-9  text-right">
              

              <span class="d-inline-block d-lg-none"><a href="#" class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span class="icon-menu h3 text-white"></span></a></span>

              

              <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
              <ul class="site-menu main-menu js-clone-nav ml-auto ">
                  <li ><a href="CarRental" class="nav-link">Home</a></li>
                  <li><a href="service_controller" class="nav-link">Services</a></li>
                  <li class="active"><a href="car_controller" class="nav-link">Cars</a></li>
                  <li><a href="about_controller" class="nav-link">About</a></li>
                  <li><a href="logout_controller" class="nav-link">Log out</a></li>
                  
               
                </ul>
              </nav>
            </div>

            
          </div>
        </div>

      </header>

    <div class="ftco-blocks-cover-1">
      <div class="ftco-cover-1 overlay innerpage" style="background-image: url('images/hero_2.jpg')">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 text-center">
              <h1>A Comfortable Collection of Cars</h1>
              <p>The best cars we have</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="item-1">
                <a href="#"><img src="images/img_1.jpg" alt="Image" class="img-fluid"></a>
                <div class="item-1-contents">
                  <div class="text-center">
                  <h3><a href="#">Aston Martin</a></h3>
                  <div class="rating">
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                  </div>
                  <div class="rent-price"><span>$350/</span>day</div>
                  </div>
                  <ul class="specs">
                    <li>
                      <span>Doors</span>
                      <span class="spec">4</span>
                    </li>
                    <li>
                      <span>Seats</span>
                      <span class="spec">5</span>
                    </li>
                    <li>
                      <span>Transmission</span>
                      <span class="spec">Automatic</span>
                    </li>
                    <li>
                      <span>Minium age</span>
                      <span class="spec">18 years</span>
                    </li>
                    <li>
                      <span>Status</span>
                      <span class="spec"><?php  echo $_SESSION["car"]["Aston Martin"];?></span>
                    </li>

                  </ul>
                  <div class="d-flex action">
                  <?php  
                    $status=$_SESSION["car"]["Aston Martin"];
                  if($status=="Available") {?>
                 <a  href="rent_controller/rent?Name=Aston Martin&Status=Wait for Approval&Price=$350&Image=images/img_1.jpg"  class="btn btn-primary">Rent Now</a>
                 
                   <?php } 
                   
                   else {?>
                    <button  class="btn btn-primary" disabled>Rent Now</button>
                 
                      <?php }?>

                 
                 
                 
                  </div>
                </div>
              </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="item-1">
                <a href="#"><img src="images/img_2.jpg" alt="Image" class="img-fluid"></a>
                <div class="item-1-contents">
                  <div class="text-center">
                  <h3><a href="#">Ferrari</a></h3>
                  <div class="rating">
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                  </div>
                  <div class="rent-price"><span>$350/</span>day</div>
                  </div>
                  <ul class="specs">
                    <li>
                      <span>Doors</span>
                      <span class="spec">4</span>
                    </li>
                    <li>
                      <span>Seats</span>
                      <span class="spec">5</span>
                    </li>
                    <li>
                      <span>Transmission</span>
                      <span class="spec">Automatic</span>
                    </li>
                    <li>
                      <span>Minium age</span>
                      <span class="spec">18 years</span>
                    </li>
                    <li>
                      <span>Status</span>
                      <span class="spec"><?php  echo $_SESSION["car"]["Ferrari"]?></span>
                    </li>

                  </ul>
                  <div class="d-flex action">
                  <?php  
                    $status=$_SESSION["car"]["Ferrari"];
                  if($status=="Available") {?>
                   <a  href="rent_controller/rent?Name=Ferrari&Status=Wait for Approval&Price=$350&Image=images/img_2.jpg"  class="btn btn-primary">Rent Now</a>
                
                   <?php } 
                   
                   else {?>
                    <button  class="btn btn-primary" disabled>Rent Now</button>
                 
                      <?php }?>

                  </div>

                </div>
              </div>
          </div>


          <div class="col-lg-4 col-md-6 mb-4">
            <div class="item-1">
                <a href="#"><img src="images/img_3.jpg" alt="Image" class="img-fluid"></a>
                <div class="item-1-contents">
                  <div class="text-center">
                  <h3><a href="#">Rolls Royce</a></h3>
                  <div class="rating">
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                  </div>
                  <div class="rent-price"><span>$450/</span>day</div>
                  </div>
                  <ul class="specs">
                    <li>
                      <span>Doors</span>
                      <span class="spec">4</span>
                    </li>
                    <li>
                      <span>Seats</span>
                      <span class="spec">5</span>
                    </li>
                    <li>
                      <span>Transmission</span>
                      <span class="spec">Automatic</span>
                    </li>
                    <li>
                      <span>Minium age</span>
                      <span class="spec">18 years</span>
                    </li>
                    <li>
                      <span>Status</span>
                      <span class="spec"><?php  echo $_SESSION["car"]["Rolls Royce"]?></span>
                    </li>

                  </ul>
                  <div class="d-flex action">
                  <?php  
                    $status=$_SESSION["car"]["Rolls Royce"];
                  if($status=="Available") {?>
                  <a  href="rent_controller/rent?Name=Rolls Royce&Status=Wait for Approval&Price=$450&Image=images/img_1.jpg"  class="btn btn-primary">Rent Now</a>
                
                   <?php } 
                   
                   else {?>
                    <button  class="btn btn-primary" disabled>Rent Now</button>
                 
                      <?php }?>

                  </div>

                </div>
              </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="item-1">
                <a href="#"><img src="images/img_1.jpg" alt="Image" class="img-fluid"></a>
                <div class="item-1-contents">
                  <div class="text-center">
                  <h3><a href="#">Toyota</a></h3>
                  <div class="rating">
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                  </div>
                  <div class="rent-price"><span>$550/</span>day</div>
                  </div>
                  <ul class="specs">
                    <li>
                      <span>Doors</span>
                      <span class="spec">4</span>
                    </li>
                    <li>
                      <span>Seats</span>
                      <span class="spec">5</span>
                    </li>
                    <li>
                      <span>Transmission</span>
                      <span class="spec">Automatic</span>
                    </li>
                    <li>
                      <span>Minium age</span>
                      <span class="spec">18 years</span>
                    </li>
                    <li>
                      <span>Status</span>
                      <span class="spec"><?php  echo $_SESSION["car"]["Toyota"]?></span>
                    </li>

                  </ul>
                  <div class="d-flex action">
                  
                  <?php  
                    $status=$_SESSION["car"]["Toyota"];
                  if($status=="Available") {?>
                    <a  href="rent_controller/rent?Name=Toyota&Status=Wait for Approval&Price=$550&Image=images/img_1.jpg"  class="btn btn-primary">Rent Now</a>
                
                   <?php } 
                   
                   else {?>
                    <button  class="btn btn-primary" disabled>Rent Now</button>
                 
                      <?php }?>

                  </div>
                    

                </div>
              </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="item-1">
                <a href="#"><img src="images/img_2.jpg" alt="Image" class="img-fluid"></a>
                <div class="item-1-contents">
                  <div class="text-center">
                  <h3><a href="#">Lexus</a></h3>
                  <div class="rating">
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                  </div>
                  <div class="rent-price"><span>$600/</span>day</div>
                  </div>
                  <ul class="specs">
                    <li>
                      <span>Doors</span>
                      <span class="spec">4</span>
                    </li>
                    <li>
                      <span>Seats</span>
                      <span class="spec">5</span>
                    </li>
                    <li>
                      <span>Transmission</span>
                      <span class="spec">Automatic</span>
                    </li>
                    <li>
                      <span>Minium age</span>
                      <span class="spec">18 years</span>
                    </li>
                    <li>
                      <span>Status</span>
                      <span class="spec"><?php  echo $_SESSION["car"]["Lexus"]?></span>
                    </li>

                  </ul>
                  <div class="d-flex action">
                  <?php  
                    $status=$_SESSION["car"]["Lexus"];
                  if($status=="Available") {?>
                 <a  href="rent_controller/rent?Name=Lexus&Status=Wait for Approval&Price=$600&Image=images/img_2.jpg"  class="btn btn-primary">Rent Now</a>
                 
                   <?php } 
                   
                   else {?>
                    <button  class="btn btn-primary" disabled>Rent Now</button>
                 
                      <?php }?>

                  </div>                  
                  
                </div>
              </div>
          </div>


          <div class="col-lg-4 col-md-6 mb-4">
            <div class="item-1">
                <a href="#"><img src="images/img_3.jpg" alt="Image" class="img-fluid"></a>
                <div class="item-1-contents">
                  <div class="text-center">
                  <h3><a href="#">Ford Mustang</a></h3>
                  <div class="rating">
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                  </div>
                  <div class="rent-price"><span>$650/</span>day</div>
                  </div>
                  <ul class="specs">
                    <li>
                      <span>Doors</span>
                      <span class="spec">4</span>
                    </li>
                    <li>
                      <span>Seats</span>
                      <span class="spec">5</span>
                    </li>
                    <li>
                      <span>Transmission</span>
                      <span class="spec">Automatic</span>
                    </li>
                    <li>
                      <span>Minium age</span>
                      <span class="spec">18 years</span>
                    </li>
                    <li>
                      <span>Status</span>
                      <span class="spec"><?php  echo $_SESSION["car"]["Ford Mustang"]?></span>
                    </li>

                  </ul>
                  <div class="d-flex action">
                  <?php  
                    $status=$_SESSION["car"]["Ford Mustang"];
                  if($status=="Available") {?>
                   <a  href="rent_controller/rent?Name=Ford Mustang&Status=Wait for Approval&Price=$650&Image=images/img_3.jpg"  class="btn btn-primary">Rent Now</a>
                 
                   <?php } 
                   
                   else {?>
                    <button  class="btn btn-primary" disabled>Rent Now</button>
                 
                      <?php }?>

                  </div>                  
            
                </div>
              </div>
          </div>


          <div class="col-12">
            <span class="p-3">1</span>
            <a href="#" class="p-3">2</a>
            <a href="#" class="p-3">3</a>
            <a href="#" class="p-3">4</a>
          </div>
        </div>
      </div>
    </div>

  

    

    <footer class="site-footer">
      <div class="container">
        
          <div class="col-md-12">
            <div class="border-top pt-1">
              <p>
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Dany's Car Service</a>
          </p>
            </div>
          </div>
      </div>
    </footer>


    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/aos.js"></script>

    <script src="js/main.js"></script>

  </body>

</html>

