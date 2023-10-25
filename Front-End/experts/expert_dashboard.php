<?php
	include 'connection.php';

	session_start();
	if(!isset($_SESSION['sess_exp']))
	{
		header("Location:expert_index.php");
	}
	else
	{
		$expmail = $_SESSION['sess_exp'];
	
	
	// to get login id from 
	
		$qry1 = "SELECT LOGIN_ID FROM login_table where EMAIL_ID='$expmail'";	
		$result1 = mysqli_query($con,$qry1);
		$value1 = mysqli_fetch_array($result1);
		$lid = $value1['LOGIN_ID'];
	
	
	
	
		$qry = "SELECT EXPERT_ID FROM expert_table where LOGIN_ID='$lid'";	
		$result = mysqli_query($con,$qry);
		$value = mysqli_fetch_array($result);
		$id = $value['EXPERT_ID'];
		
		
?>


<!DOCTYPE HTML>
<html>
<head>

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
						        
								</div>
									
							<!--/profile_details-->
								
					<!-- //header-ends -->
						<div class="outter-wp">
								<!--custom-widgets-->
												<div class="custom-widgets">
												   <div class="row-one">
														<div class="col-md-3 widget">
															<div class="stats-left ">
																<h5>Total</h5>
																<h4>Designs</h4>
																
															</div>
															
															<div class="stats-right">
																<label>
																
																	<?php $query=("SELECT * FROM design_table WHERE EXPERT_ID='$id'");
																	$run=mysqli_query($con,$query);
																	$count=mysqli_num_rows($run);
																	echo $count;?>
																	</label>
															</div>
															<div class="clearfix"> </div>	
														</div>
														<div class="col-md-3 widget states-mdl">
															<div class="stats-left">
																<h5>Total</h5>
																<h4>Contracts<h4>
															</div>
															<div class="stats-right">
																<label> 	<?php $query1=("SELECT * FROM contact_exp_table WHERE EXPERT_ID='$id'");
																	$run1=mysqli_query($con,$query1);
																	$count=mysqli_num_rows($run1);
																	echo $count;?>
																	</label>
															</div>
															<div class="clearfix"> </div>	
														</div>
														
														<div class="clearfix"> </div>	
													</div>
												</div>
												<!--//custom-widgets-->
												<!--/candile-->
													
				<!--//content-inner-->
			<!--/sidebar-menu-->
						<?php include 'expert_menu.php'; ?>
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