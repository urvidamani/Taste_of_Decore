<?php
	include 'connection.php';
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
														<h3 class="inner-tittle t-inner">Login</h3>
															
																<form method="POST">
																		Email Address : 
																		<input type="text" name="uemail" Placeholder="Enter E-mail" required>
																		Password :
																		<input type="password" name="upass" value="Password" required>
																		<input type="submit" name="data"  value="Login" ></div>
																		<div class="clearfix"></div>
																		
																		
																	</form>
																	
														</div>

														
													</div>
													
													
	<?php
		if(isset($_POST['data']))
		{
			$email=$_POST['uemail'];
			$pass=$_POST['upass'];
			$query=("SELECT * FROM login_table WHERE EMAIL_ID='".$email."' AND PASSWORD='".$pass."' AND ROLE=1 AND STATUS=1");
			$run=mysqli_query($con,$query);
			$count=mysqli_num_rows($run);
		
			if($count==1)
			{
				session_start();
				$_SESSION['sess_admin']=$email;
				header("Location:dashboard.php");
			}
			else
			{
				echo "<script> alert('Enter correct Email ID or Password');</script>";
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