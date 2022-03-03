<!DOCTYPE html>
<html lang="en">
<head>
   

	<title>Order Details</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="themes/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="themes/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="themes/vendor/perfect-scrollbar/perfect-scrollbar.css">
	<link rel="stylesheet" type="text/css" href="themes/css/util.css">
	<link rel="stylesheet" type="text/css" href="themes/css/main.css">
	<link href="themes/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="themes/assets/css/carousel.css" rel="stylesheet">
	<link rel="shortcut icon" href="themes/assets/ico/favicon.ico">
    

</head>
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

	
	
	<div class="introSection" style="margin-top:100px">
		<div class="container">
		<div class="row">
			<div class="col-lg-12">
        <h1 class="cntr">Order Details</h1>
			</div>
		</div>
		</div>
	</div>
	
	


    <!-- <div class="limiter" style=" background: white;"> -->
       <!-- <div class="container-table100" > -->
			<div class="wrap-table100" >
				<div class="table100 ver1">
					<div class="table100-firstcol" style="background:black">
						<table >
							<thead >
								<tr class="row100 head">
									<th class="cell100 column1">Product Name</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$duplicate=[];
									
								for($i=0;$i<count($_SESSION["data"]);$i++)  {
									if (!in_array($_SESSION["data"][$i]["product"], $duplicate))			
									{?>
										<tr class="row100 body">
										<td class="cell100 column1"><?php
										$duplicate[]=$_SESSION["data"][$i]["product"];
										echo end($duplicate);
										?> </tr> </td> <?php
									}
								}
									?>
									
								<tr class="row100 body">
								<td class="cell100 column1"> Payable Amount
								</td></tr>
																			
								
							</tbody>
						</table>
					</div>

					<div class="wrap-table100-nextcols js-pscroll" style="background:black">
						<div class="table100-nextcols">
							<table>
								<thead>
									<tr class="row100 head">
										<th class="cell100 column2">Price</th>
										<th class="cell100 column3">Quantity</th>
									</tr>
								</thead>
								<tbody>

								<?php
								$duplicate=[];
								$amount=0;
								for($i=0;$i<count($_SESSION["data"]);$i++)  { 
				
										if (!array_key_exists($_SESSION["data"][$i]["product"],$duplicate)){?>
										<tr class="row100 body">

										<td class="cell100 column2">
										<?php echo $_SESSION["data"][$i]["Price"];?></td>
										<td class="cell100 column3"> <?php 
								
										$duplicate[$_SESSION["data"][$i]["product"]]=array_count_values(array_column($_SESSION["data"], 'product'))[$_SESSION["data"][$i]["product"]];	
										echo end($duplicate);	
										?> </tr> <?php
											$amount+=$_SESSION["data"][$i]["Price"]*end($duplicate);
									}							
								}
									
								?>	

							<tr class="row100 body">
							
							<td class="cell100 column2"> </td>
							
							<td class="cell100 column3"> <?php echo $amount;?></td>
							
							</tr>	
								</tbody>
							</table>
							
						</div>
						
					</div>
				</div>
			</div>
		<!-- </div> -->
	
	<!-- </div> -->


<!--===============================================================================================-->
	<script src="themes/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="themes/vendor/bootstrap/js/popper.js"></script>
	<script src="themes/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="themes/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="themes/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			var ps = new PerfectScrollbar(this);

			$(window).on('resize', function(){
				ps.update();
			})

			$(this).on('ps-x-reach-start', function(){
				$(this).parent().find('.table100-firstcol').removeClass('shadow-table100-firstcol');
			});

			$(this).on('ps-scroll-x', function(){
				$(this).parent().find('.table100-firstcol').addClass('shadow-table100-firstcol');
			});

		});




	</script>
<!--===============================================================================================-->
	<script src="themes/js/main.js"></script>
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="themes/dist/js/bootstrap.min.js"></script>
    <script src="themes/assets/js/holder.js"></script>

</body>
</html>
