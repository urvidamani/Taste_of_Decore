<?php
	include 'connection.php';
	session_start();
	if(!isset($_SESSION['sess_exp']))
	{
		header("Location:expert_index.php");
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
</head> 
<body>
	
								<!--/login-->
								
									   <div class="error_page">
												<!--/login-top-->
												
													<div class="error-top">
													<h2 class="inner-tittle page"></h2>
													    <div class="login">
														<h3 class="inner-tittle t-inner">Edit Expert Data</h3>
																
															<form method="POST" enctype="multipart/form-data">
																		Expert's Email-ID: <input type="text" class="text" value="e_email"  name="e_email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-mail address';}" >
																
																		Contact Number :
																		<input type="text" name="e_phone" value="e_phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
																		Expert's Work Experience:<input type="text" value="Work exp" name="e_wexp" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Work experience';}">
																		Expert's Work: 
																		<input type="file" id="photo-img" accept="image/png,image/jpg,image/jpeg" name="image"><br/>
																											
																		<div class="submit"><input type="submit" name="update" onclick="myFunction()" value="UPDATE" ></div>
																		<div class="clearfix"></div>
																		
																</form>
														</div>													
													</div>
													
													
	<?php
		if(isset($_POST['update']))
		{
			$id=$_GET['id'];
			
			$email=$_POST['e_email'];
			$contact=$_POST['e_phone'];
			$ex_wexp=$_POST['e_wexp'];
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
			
			
			$ans1="UPDATE login_table SET EMAIL_ID='$email', CONTACT_NO='$contact' WHERE LOGIN_ID='$id'";
			$sql1=mysqli_query($con,$ans1);
			
			$ans2="UPDATE expert_table SET WORK_EXPERIENCE='$ex_wexp', EXPERT_WORK='$image_path' WHERE LOGIN_ID='$id'";
			$sql2=mysqli_query($con,$ans2);
			
			
			if($sql1 && $sql2)
			{
				echo "<script>alert('Profile Updated Successfully');</script>";
				header("location:exp_editprofile.php");
			}
			else
			{
				echo "<script>alert('Profile Not Updated');</script>";
				//echo 'not updated';
			}
		}
	?>
										   </div>
						
										  	<!--//login-->
										    <!--footer section start-->
										<div class="footer">
												<div class="error-btn">
															<a class="read fourth" href="expert_dashboard.php">Return to Home</a>
															</div>
										   </div>
									
											
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
</body>
</html>
<?php
	}
?>
