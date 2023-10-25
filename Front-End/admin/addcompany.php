<?php
	include 'connection.php';

	session_start();
	if(!isset($_SESSION['sess_admin']))
	{
		header("Location:index.php");
	}
	else
	{
		
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
<!--clock init-->
<script src="js/css3clock.js"></script>
<!--Easy Pie Chart-->
<!--skycons-icons-->
<script src="js/skycons.js"></script>
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
						        		   							   		
							<div class="clearfix"></div>	
								</ul>
							</div>
							<div class="clearfix"></div>	
							<!--//profile_details-->
						</div>
						<!--//menu-right-->
					<div class="clearfix"></div>
				</div>

						<!-- //header-ends -->
							<!--//outer-wp-->
								<div class="outter-wp">
											<!--/sub-heard-part-->
											 <div class="sub-heard-part">
													   <ol class="breadcrumb m-b-0">
															<li><a href="dashboard.php">Home</a></li>
															<li class="active">Add Company</li>
														</ol>
											</div>	
											<!--//set-1-->
																			  <!--/set-2-->
																		<div class="set-1">
																			<div class="graph-2 general">
																				<h3 class="inner-tittle two">Add New Company  </h3>
																					<div class="grid-1">
																							<div class="form-body">
																									<form method="POST" class="form-horizontal">
																										<div class="form-group">
																											<label for="focusedinput" class="col-sm-2 control-label">Brand Name</label>
																											<div class="col-sm-8">
																												<input type="text" class="form-control1" id="focusedinput" name="b_name" placeholder="Write brand name">
																											</div>
																							
																										</div>
																										
																										<div class="form-group">
																										<div class="form-group">
																										<label class="col-md-2 control-label">Country</label>
																										<div class="col-md-8">
																											<div class="input-group">							
																												<span class="input-group-addon">
																													<i class="fa fa-envelope-o"></i>
																												</span>
																												<input type="text" class="form-control1 icon" name="b_country" placeholder="Country">
																											</div>
																										</div>
																										</div>
																																											
																												
																										<div class="form-group">
																											<label for="smallinput" class="col-sm-2 control-label label-input-sm">Email Address</label>
																											<div class="col-sm-8">
																												<input type="text" class="form-control1 input-sm" id="smallinput" name="b_email" placeholder="Enter Email Address">
																											</div>
																										</div>
																										
																										<div class="form-group">
																											<label for="smallinput" class="col-sm-2 control-label label-input-sm">Contact Number</label>
																											<div class="col-sm-8">
																												<input type="text" class="form-control1 input-sm" id="smallinput" name="b_num" placeholder="Enter contact number">
																											</div>
																										</div>
																										
																										<div class="form-group">
																										<input type="submit" name="add" value="Add Company">
																										</div>
																									</form>
																							</div>

																					</div>
																				</div>
																			</div>
																			 <!--//set-2-->
																			 <!--/set-3-->
																			
																		   <!--//set-4-->
																		</div>
																	<!--//forms-inner-->
																</div> 
														<!--//forms-->											   
												</div>
											<!--//outer-wp-->
									 <!--footer section start-->
										<footer>
										  </footer>
									<!--footer section end-->
								</div>
							</div>
				<!--//content-inner-->
			<!--/sidebar-menu-->
					<?php 
				include 'menu.php';
			?>
			<?php
				if(isset($_POST['add']))
				{
					$bname=$_POST['b_name'];
					$country=$_POST['b_country'];
					$email=$_POST['b_email'];
					$num=$_POST['b_num'];
					$query="INSERT INTO brand_details (BRAND_NAME,COUNTRY,EMAIL,CONTACT_NO) VALUES('$bname','$country','$email','$num')";
					$sql=mysqli_query($con,$query);
					if($sql)
					{
						echo "<script> alert('Admin Added');</script>";
					}
					else
					{
						echo "<script> alert('Admin Not Added');</script>";
					}
					
				}
				
			?>
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
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>

<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
</body>
</html>
	<?php } ?>