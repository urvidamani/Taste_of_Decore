<?php
	include 'connection.php';
	session_start();
	if(!isset($_SESSION['sess_exp']))
	{
		header("location:add_design.php");
	}
	
	else
	{
	//$eid=$_GET['id'];
	
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
															<li><a href="expert_dashboard.php">Home</a></li>
															<li class="active">Add Design</li>
														</ol>
											</div>	
											<!--//set-1-->
																			  <!--/set-2-->
																		<div class="set-1">
																			<div class="graph-2 general">
																				<h3 class="inner-tittle two">Add New Design</h3>
																					<div class="grid-1">
																							<div class="form-body">
																									<form method="POST" class="form-horizontal" enctype="multipart/form-data">
																										<div class="form-group">
																											<label for="focusedinput" class="col-sm-2 control-label">Design Name</label>
																											<div class="col-sm-8">
																												<input type="text" class="form-control1" id="focusedinput" name="e_dname" placeholder="Write name of design" required>
																											</div>
																							
																										</div>
																										
																										<div class="form-group">
																																																					
																											
																										<div class="form-group">
																										<div class="form-group">
																										<label class="col-md-2 control-label">Design Image</label>
																										<div class="col-md-8">
																											<div class="input-group">							
																												<span class="input-group-addon">
																													<i class="fa fa-envelope-o"></i>
																												</span>
																												<input type="file" id="photo-img" accept="image/png,image/jpg,image/jpeg" name="image"><br/>
																											</div>
																										</div>
																										</div>
																										
																										
																										
																										
																										<input type="submit" name="add" value="Add Design">
																										
																									
																										
																									</form>
																							

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
				include 'expert_menu.php';
			?>
			
			<?php
if(isset($_POST['add']))
		{
			
			$pname=$_POST['e_dname'];
			$filename=addslashes($_FILES['image']['name']);
			$tmpname=addslashes($_FILES['image']['tmp_name']);	
			
			date_default_timezone_set("Asia/Calcutta");
			
			$iname=(string)(date('YmdHis'));
			$extension=pathinfo($filename,PATHINFO_EXTENSION);
			$image_path=$iname.".".$extension;
			if($filename)
			{
				move_uploaded_file($_FILES['image']['tmp_name'],"../experts/Designs/".$image_path);
			}
			
			$query="INSERT INTO design_table (EXPERT_ID,DESIGN_NAME,DESIGN_IMAGE) values('$id','$pname','$image_path')";
			$sql=mysqli_query($con,$query);
			if($sql)
			{
				echo "<script>alert('Design Added Successfully');</script>";
			}
			else
			{
				 echo "<script>alert('Design Not Added');</script>";
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

	<?php 
	}
	?>