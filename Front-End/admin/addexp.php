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
															<li><a href="expert_dashboard.php">Home</a></li>
															<li class="active">Add Expert</li>
														</ol>
											</div>	
											<!--//set-1-->
																			  <!--/set-2-->
																		<div class="set-1">
																			<div class="graph-2 general">
																				<h3 class="inner-tittle two">Add New Expert  </h3>
																					<div class="grid-1">
																							<div class="form-body">
																									<form method="POST" class="form-horizontal" enctype="multipart/form-data">
																										<div class="form-group">
																											<label for="focusedinput" class="col-sm-2 control-label">Expert Name</label>
																											<div class="col-sm-8">
																												<input type="text" class="form-control1" id="focusedinput" name="e_name" placeholder="Write expert's full name" required pattern="[a-zA-Z ]{2,20}">
																											</div>
																							
																										</div>
																										
																										<div class="form-group">
																										<div class="form-group">
																										<label class="col-md-2 control-label">Expert Email</label>
																										<div class="col-md-8">
																											<div class="input-group">							
																												<span class="input-group-addon">
																													<i class="fa fa-envelope-o"></i>
																												</span>
																												<input type="text" class="form-control1 icon" name="e_email" placeholder="Email Address" required>
																											</div>
																										</div>
																										</div>
																											
																											
																										<div class="form-group">
																										<label class="col-md-2 control-label">Password</label>
																										<div class="col-md-8">
																											<div class="input-group">
																												<span class="input-group-addon">
																													<i class="fa fa-key"></i>
																												</span>
																												<input type="password" class="form-control1 icon" id="exampleInputPassword1" name="e_pass" placeholder="Password" required pattern="[a-zA-Z0-9]{6,12}">
																											</div>
																										</div>
																									</div>
																									
																									<div class="form-group">
																										<label class="col-md-2 control-label">Confirm Password</label>
																										<div class="col-md-8">
																											<div class="input-group">
																												<span class="input-group-addon">
																													<i class="fa fa-key"></i>
																												</span>
																												<input type="password" class="form-control1 icon" id="exampleInputPassword1" name="e_repass" placeholder="Confirm Password" required pattern="[a-zA-Z0-9]{6,12}">
																											</div>
																										</div>
																									</div>
																									
																									<div class="form-group">
																										<div class="form-group">
																										<label class="col-md-2 control-label">Expert Work experience</label>
																										<div class="col-md-8">
																											<div class="input-group">							
																												<span class="input-group-addon">
																													<i class="fa fa-envelope-o"></i>
																												</span>
																												<input type="text" class="form-control1 icon" name="e_wexp" placeholder="Expert's work experience" required pattern="[0-9]{1,2}">
																											</div>
																										</div>
																										</div>
																										</div>
																										
																										<div class="form-group">
																										<div class="form-group">
																										<label class="col-md-2 control-label">Expert's work</label>
																										<div class="col-md-8">
																											<div class="input-group">							
																												<span class="input-group-addon">
																													<i class="fa fa-envelope-o"></i>
																												</span>
																												<input type="file" id="photo-img" accept="image/png,image/jpg,image/jpeg" name="image"><br/>
																											</div>
																										</div>
																										</div>
																										
																										<div class="form-group">
																											<label for="radio" class="col-sm-2 control-label">Gender</label>
																											<div class="col-sm-8">
																												<div class="radio block"><label><input type="radio" checked="" name="e_gen"> Male</label></div>
																												<div class="radio block"><label><input type="radio" name="e_gen">Female</label></div>
																												</div>
																										</div>
																										
																										<div class="form-group">
																											<label for="smallinput" class="col-sm-2 control-label label-input-sm">Contact Number</label>
																											<div class="col-sm-8">
																												<input type="text" class="form-control1 input-sm" id="smallinput" name="e_phone" placeholder="Enter contact number" required pattern="[6789][0-9]{9}">
																											</div>
																										</div>
																										
																										<input type="submit" name="add" value="Add Expert">
																										
																									
																										
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
include("connection.php");

if(isset($_POST['add']))
{

	$ex_email=$_POST['e_email'];
	$ex_phone=$_POST['e_phone'];
	$ex_password=$_POST['e_pass'];
	$ex_wep=$_POST['e_wexp'];
	$ex_name=$_POST['e_name'];
	 $filename = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];    
		
		
		date_default_timezone_set("Asia/Calcutta");
			
			$iname=(string)(date('YmdHis'));
			$extension=pathinfo($filename,PATHINFO_EXTENSION);
			$image_path=$iname.".".$extension;
			
			
			if($filename)
			{
				move_uploaded_file($_FILES['image']['tmp_name'],"../experts/Expert_work/".$image_path);
			}
    
	
	$checkemail= "SELECT * FROM login_table WHERE EMAIL_ID='$ex_email'";
	$ans = mysqli_query($con,$checkemail);
	$count = mysqli_num_rows($ans);
	
	
	
	if($count>1)
	{
		echo "<script>alert('you are already registered');</script>";
		//echo "you are already registerd";
	}
	else{
		
	$q1="INSERT INTO login_table(EMAIL_ID,CONTACT_NO,PASSWORD,ROLE,STATUS) VALUES('$ex_email','$ex_phone','$ex_password',4,1)";
	$ans1=mysqli_query($con,$q1);
	
	$q2="SELECT LOGIN_ID FROM login_table WHERE EMAIL_ID='$ex_email'";
	$ans2=mysqli_query($con,$q2);
	$fetchid=mysqli_fetch_array($ans2);
	$lid=$fetchid['LOGIN_ID'];
	
	$q3="INSERT INTO expert_table(LOGIN_ID,WORK_EXPERIENCE,EXPERT_NAME,EXPERT_WORK) VALUES ('$lid','$ex_wep','$ex_name','$image_path')";
	$ans3=mysqli_query($con,$q3);
	
	if($ans1 && $ans3)
	{
		echo "<script>alert('Expert Added Successfully');</script>";
		//echo "form submitted";
	}
	else
	{
		echo "<script>alert('Expert Not Added');</script>";
		//echo "error while inserting...";
	}
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