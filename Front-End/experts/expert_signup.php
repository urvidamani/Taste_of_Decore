<?php
include("connection.php");

if(isset($_POST['sub']))
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
				move_uploaded_file($_FILES['image']['tmp_name'],"Expert_work/".$image_path);
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
		echo "<script>alert('Form submitted');</script>";
		//echo "form submitted";
	}
	else
	{
		echo "<script>alert('error while inserting');</script>";
		//echo "error while inserting...";
	}
}
}

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
</head> 
<body>
								<!--/login-->
								
									   <div class="error_page">
												<!--/login-top-->
												
													<div class="error-top up">
													
													    <div class="login">
														<h3 class="inner-tittle t-inner">Sign Up</h3>
																<form method="POST" enctype="multipart/form-data">
																
																	Expert's Name: <input type="text" class="text" value="name" name="e_name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'name';}" >
																	Expert's Email-ID: <input type="text" class="text" value="E-mail" name="e_email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-mail address';}" >
																	Password: <input type="password" value="Password" name="e_pass" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
																	Confirm-Password: <input type="password" value="Password" name="e_repass" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
																	Contact No.: <input type="text" value="contact Number" name="e_phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'contact';}">
																	Expert's Work Experience<input type="text" value="Work exp" name="e_wexp" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Work experience';}">
																    Expert's Work: 
																	<input type="file" id="photo-img" accept="image/png,image/jpg,image/jpeg" name="image"><br/>
																		<div class="submit"><input type="submit" name="sub" onclick="myFunction()" value="Sign up" ></div>
																		<div class="clearfix"></div>
																		
																		<div class="new">
																			<p class="sign up">Do you have an account yet ? <a href="expert_index.php"> Login here.</a></p>
																			<div class="clearfix"></div>
																		</div>
																	</form>
														</div>
														
													</div>
													 
												<!--//login-top-->
										   </div>
										  	<!--//login-->
											
										    <!--footer section start-->
										<div class="footer sign">
										<div class="error-btn">
															<a class="read fourth" href="expert_index.php">Return to Home</a>
															</div>

										</div>
									<!--footer section end-->
									<!--/404-->
<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
</body>
</html>