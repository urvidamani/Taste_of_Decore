<?php
	include 'connection.php';
	if(!isset($_SESSION['sess_admin']))
	{
		header("location:password.php");
	}
	
	else
	{
		$email = $_SESSION['sess_admin'];
		$qry = "SELECT * FROM login_table WHERE EMAIL_ID='$email'";
		$result = mysqli_query($con,$qry);
		$value = mysqli_fetch_array($result);
		$pass = $value['PASSWORD'];
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
													    <div class="login">
														<h3 class="inner-tittle t-inner">Password</h3>
															
																<form method="POST">
																		Old Password : 
																		<input type="password" name="opass" value="Old Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Old Password';}">
																		New Password :
																		<input type="password" name="npass" value="New Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'New Password';}">
																		Re-type Password :
																		<input type="password" name="repass" value="New Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Re-type Password';}">
																		<div class="submit"><input type="submit" name="submit" onclick="myFunction()" value="Change Password" ></div>
																		<div class="clearfix"></div>
																		
																		
																	</form>
														</div>

														
													</div>
													
													
	<?php
		if(isset($_POST['submit']))
		{
			//$id=$_GET['id'];
			$opass=$_POST['opass'];
			$npass=$_POST['npass'];
			$repass=$_POST['repass'];
			
			if($pass==$opass)
			{
				if($npass==$repass)	
				{
				
				
			$update = "UPDATE login_table SET PASSWORD='$npass' WHERE EMAIL_ID='$email'";
				$result1 = mysqli_query($con,$update);
				
				if($result1)
				{
					echo "<script>  alert('Password Changed Successfully'); </script>";
					echo ("<script>location.href='dashboard.php'</script>");
				}
			
				else
				{
					echo "<script>  alert('Password Not Changed'); </script>";
					echo ("<script>location.href='password.php'</script>");
				}
			}
		}
		
		else
		{
			echo "<script>  alert('Old Password Incorrect'); </script>";
			echo ("<script>location.href='password.php'</script>");
		}
	}
}
	?>												
	<!--//login-top-->
										   </div>
						
										  	<!--//login-->
										    <!--footer section start-->
										<div class="footer">
												<div class="error-btn">
															
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