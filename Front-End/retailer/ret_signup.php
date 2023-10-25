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
												
													<div class="error-top up">
													
													    <div class="login">
														<h3 class="inner-tittle t-inner">Sign Up</h3>
																<form method="POST">
																	Name: <input type="text" class="text" value="name" name="r_name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'name';}" >
																	Email-ID: <input type="text" class="text" value="E-mail" name="r_email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-mail address';}" >
																	Password: <input type="password" value="Password" name="r_pass" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
																	Confirm Password: <input type="password" value="Password" name="r_pass" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
																	Contact No.: <input type="text" value="contact Number" name="r_con" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'contact';}">
																		<div class="submit"><input type="submit" name="sub" onclick="myFunction()" value="Sign up" ></div>
																		<div class="clearfix"></div>
																		
																		<div class="new">
																			<p class="sign up">Do you have an account yet ? <a href="ret_index.php"> Login here.</a></p>
																			<div class="clearfix"></div>
																		</div>
																	</form>
														</div>
														
													</div>
													 
												<!--//login-top-->
										   </div>
										  	<!--//login-->
											<?php
												if(isset($_POST['sub']))
												{
													$email=$_POST['r_email'];
													$pass=$_POST['r_pass'];
													$contact=$_POST['r_con'];
													$role="3";
													$status="1";
													$query="INSERT INTO login_table(EMAIL_ID,CONTACT_NO,PASSWORD,ROLE,STATUS) VALUES('$email','$contact','$pass','$role','$status')";
													$sql=mysqli_query($con,$query);
													if($sql)
													{
														echo ("<script> location.href='ret_index.php' </script>");
													}
													else
													{
														echo 'you have not successfully signed up';
													}
												}	
											?>
										    <!--footer section start-->
										<div class="footer sign">
										<div class="error-btn">
															<a class="read fourth" href="ret_index.php">Return to Home</a>
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