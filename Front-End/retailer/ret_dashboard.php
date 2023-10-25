<?php
	include 'connection.php';
	session_start();
	if(!isset($_SESSION['sess_ret']))
	{
		header("Location:ret_index.php");
	}
	else
	{
		$log = $_SESSION['sess_ret'];
		$qry = "SELECT * FROM login_table WHERE EMAIL_ID='$log' AND ROLE=3";
		$result = mysqli_query($con,$qry);
		$value = mysqli_fetch_array($result);
		$rid=$value['LOGIN_ID'];
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Taste of Decor</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Augment Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/amcharts.js"></script>	
<script src="js/serial.js"></script>	
<script src="js/light.js"></script>	
<script src="js/radar.js"></script>	
<link href="css/barChart.css" rel='stylesheet' type='text/css' />
<link href="css/fabochart.css" rel='stylesheet' type='text/css' />
<!--clock init-->
<script src="js/css3clock.js"></script>
<!--Easy Pie Chart-->
<!--skycons-icons-->
<script src="js/skycons.js"></script>

<script src="js/jquery.easydropdown.js"></script>

<!--//skycons-icons-->
</head> 
<body>
   <div class="page-container">
   <!--/content-inner-->
	<div class="left-content">
	   <div class="inner-content">
		<!-- header-starts -->
			<div class="header-section">
						<!--menu-right-->
						<div class="top_menu">
						       
							
								
							<!--//profile_details-->
						
						
					
					<!-- //header-ends -->
						<div class="outter-wp">
								<!--custom-widgets-->
											<div class="custom-widgets">
												   <div class="row-one">
														<div class="col-md-3 widget">
															<div class="stats-left ">
																<h5>Total</h5>
																<h4> Orders</h4>
															</div>
															<div class="stats-right"><label>
															<?php
															//$log = $_SESSION['sess_ret'];
															$qry = "SELECT * FROM order_table WHERE LOGIN_ID='$rid'";
															$result = mysqli_query($con,$qry);
															$count = mysqli_num_rows($result);
															echo $count;?>  </label>
															</div>
															<div class="clearfix"> </div>	
														</div>
														
														
														
														<div class="col-md-3 widget states-thrd">
															<div class="stats-left">
																<h5>Total</h5>
																<h4>Products</h4>
															</div>
															<div class="stats-right">
																<label><?php $query=("SELECT * FROM products_table WHERE LOGIN_ID='$rid'");
																	$run=mysqli_query($con,$query);
																	$count1=mysqli_num_rows($run);
																	echo $count1;?> </label>
															</div>
															<div class="clearfix"> </div>	
														</div>
														
														<div class="clearfix"> </div>	
													</div>
												</div> 
												<!--//custom-widgets-->
									</div>
									<!--/charts-inner-->
									</div>
										<!--//outer-wp-->
									</div>
									
								</div>
							</div>
				<!--//content-inner-->
			<!--/sidebar-menu-->
				<div class="sidebar-menu">
					<header class="logo">
					<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="index.html"> <span id="logo"> <h1>Augment</h1></span> 
					<!--<img id="logo" src="" alt="Logo"/>--> 
				  </a> 
				</header>
			<div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
			<!--/down-->
							<?php
								include 'ret_menu.php';
							?>
							  </div>
							  <div class="clearfix"></div>		
							</div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
<!--js -->
<link rel="stylesheet" href="css/vroom.css">
<script type="text/javascript" src="js/vroom.js"></script>
<script type="text/javascript" src="js/TweenLite.min.js"></script>
<script type="text/javascript" src="js/CSSPlugin.min.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>

<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
</body>
</html>
<?php
	}
?>