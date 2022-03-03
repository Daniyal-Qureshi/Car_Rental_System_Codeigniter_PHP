
<!DOCTYPE html>
<html lang="en">
  <head>
  <script>

    function send(name,price){
        var xmlhttp =new XMLHttpRequest();
        xmlhttp.open("GET","order_controller/addtocart?name="+name+"&price="+price,true);
        xmlhttp.send();
        alert("Item has been added successfully");


    }

  </script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="themes/assets/ico/favicon.ico">
    <title>SIBA Cafe</title>

    <!-- Bootstrap core CSS -->
    <link href="themes/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="themes/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="themes/assets/css/carousel.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body>

    <div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-inverse navbar-static-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="cafe">Sukkur IBA Cafe</a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="cafe">Home</a></li>
                <li><a href="logout_controller">Sign out</a></li>
                <li><a href="signin_controller">Sign in</a></li>
                <li><a href="order_controller">Orders</a></li>
				
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>


  
	

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

	

	
	
	<div class="introSection" style="margin-top:100px">
		<div class="container">
		<div class="row">
			<div class="col-lg-12">
        <h1 class="cntr">Welcome <?php
      
        if(!isset($_SESSION['Fullname']))
           $_SESSION['Fullname']="";

        echo $_SESSION["Fullname"];?> 
        
        <br> Providing cafe services to students and faculty memebers</h1>
			</div>
		</div>
		</div>
	</div>
	
	
	

	
	<div class="container marketing">
    <h2 class="itemsTitle"> Cafe Services</h2>
	<div id="myCarousel2" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <div class="carousel-inner">
        <div class="item active">
         <div class="row">
        <div class="col-lg-4">
           <img src="themes/assets/images/colddrink.png" alt="Generic placeholder image">
          <h4>Cold drink</h4>
          <p><a class="btn btn-default"onclick="send('Cold drink',35)"  role="button">Add to cart &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
         <img src="themes/assets/images/sandwich.png" alt="Generic placeholder image">
          <h4>Sandwich</h4>
          <p><a class="btn btn-default" onclick="send('Sandwich',70)" role="button">Add to cart &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="themes/assets/images/chocalte1.png" alt="Generic placeholder image">
          <h4>Chocolates</h4>
          <p><a class="btn btn-default" onclick="send('Chocolate',30)" role="button">Add to cart &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
		 
        </div>
     
     
        <div class="item">
          <div class="row">
        <div class="col-lg-4">
          <img  src="themes/assets/images/biscuit1.png"  alt="Generic placeholder image">
          <h4>Biscuits</h4>
          <p><a class="btn btn-default" onclick="send('Biscuit',20)"   role="button">Add to cart &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img  src="themes/assets/images/tea1.png" alt="Generic placeholder image">
          <h4>Tea</h4>
          <p><a class="btn btn-default"  onclick="send('Tea',50)" role="button">Add to cart &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img  src="themes/assets/images/coffe1.png" alt="Generic placeholder image">
          <h4>Coffee</h4>
          <p><a class="btn btn-default" role="button" onclick="send('Coffee',40)">Add to cart &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel2" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel2" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->
	</div>
	
	

	      



   <div class="container marketing">
   <div id="myCarousel4" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <div class="carousel-inner">
      <div class="item active">
      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Drink pure <span class="text-muted">Safe and healthy</span></h2>
          <p class="lead">Finding the purest and unfilthy water is the cumbersome task ,SIBA Cafe provides clean and safe water and soft drinks with reasonable prices.</p>
        </div>
        <div class="col-md-5">
          <img src="themes/assets/images/drinks.png" alt="Fish and Chips">
        </div>
      </div>
      </div>

      
	<div class="item">
      <div class="row featurette">
        <div class="col-md-5">
          <img src="themes/assets/images/burger.png" alt="Generic placeholder image">
        </div>
        <div class="col-md-7">
          <h2 class="featurette-heading">Very nice <span class="text-muted">Sandwich.</span></h2>
          <p class="lead">Providing chicken sandwich  with cheese and mayonese toppings ,order from anywhere and get your sandwich instantly.</p>
        </div>
      </div>
      </div>


	  </div><!-- /.carousel -->	  
    </div><!-- /.container -->
      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
		<div class="container">
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2014 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
		</div>
      </footer>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="themes/dist/js/bootstrap.min.js"></script>
    <script src="themes/assets/js/holder.js"></script>
  </body>
</html>
