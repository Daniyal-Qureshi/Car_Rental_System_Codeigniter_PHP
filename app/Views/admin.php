<!doctype html>
<html lang="en">

  <head>
    <title>Car Rent &mdash; Free Website Template by Colorlib</title>
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


  <body  style="background-image: url('images/hero_1.jpg')">

    
<div class="container">
    <div class="row">
     <h1 style="color:white;text-align:center">Admin Panel</h1>  
     
     
     <div class="col-md-9 text-md-right">
     <a class="btn btn-primary" href="logout_controller" style="margin-top:10px">Log out </a> 
       
      </div>
                
            
    </div>

</div>
     
    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
         
          <div class="col-lg-3">
            <h3>Pending Rent Orders</h3>
            <p class="mb-4">Client's Details along with their ordered car's specifications</p>
            <p>
              <a href="#" class="btn btn-primary custom-prev">Previous</a>
              <span class="mx-2">/</span>
              <a href="#" class="btn btn-primary custom-next">Next</a>
            </p>
          </div>
          <div class="col-lg-9">




            <div class="nonloop-block-13 owl-carousel">
             
             <?php for($i=0;$i<count($_SESSION["data"]);$i++) { ?>
              <div class="item-1">
                <a href="#"><img src=<?php echo $_SESSION["data"][$i]["Image"];?> alt="Image" class="img-fluid"></a>
                <div class="item-1-contents">
                  <div class="text-center">
                  <h3><a href="#"><?php echo $_SESSION["data"][$i]["Name"];?> </a></h3>
                  <div class="rating">
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                  </div>
                  <div class="rent-price"><span> <?php echo $_SESSION["data"][$i]["Price"];?> /</span>day</div>
                  </div>
                  <ul class="specs">
                    <li>
                      <span>Client Name</span>
                      <span class="spec"> <?php echo $_SESSION['Email'][$_SESSION['data'][$i]["Email"]] ?></span>
                    </li>
                    <li>
                      <span>Date</span>
                      <span class="spec"><?php echo $_SESSION["data"][$i]["Date"];?></span>
                    </li>
                    
                    <li>
                      <span>Status</span>
                      <span class="spec"><?php  echo $_SESSION["data"][$i]["Status"]?></span>
                    </li>

                    <li>
                      <span>From</span>
                      <span class="spec"><?php  echo $_SESSION["data"][$i]["Address"]?></span>
                    </li>

                    <li>
                      <span>Destination</span>
                      <span class="spec"><?php  echo $_SESSION["data"][$i]["Destination"]?></span>
                    </li>

                    <li>
                      <span>Pickup Date</span>
                      <span class="spec"><?php  echo $_SESSION["data"][$i]["Begin_Date"]?></span>
                    </li>

                    <li>
                      <span>Return Date</span>
                      <span class="spec"><?php  echo $_SESSION["data"][$i]["Return_Date"]?></span>
                    </li>


                  </ul>
                  <div class="d-flex action">
               <?php  $name=$_SESSION["data"][$i]["Name"];
                      $Email=$_SESSION["data"][$i]["Email"];
               ?>    
            
               <a class="btn btn-primary" href="admin_controller/update?Name=<?php echo "$name";?>&Email=<?php echo "$Email";?>&n=1"> Approve </a> &nbsp;&nbsp;
   
               <a class="btn btn-primary" href="admin_controller/update?Name=<?php echo "$name";?>&Email=<?php echo "$Email";?>&n=0"> Reject </a> &nbsp;&nbsp;
             </div>
                </div>
              </div>

                <?php } ?>

              



            </div>
            
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

