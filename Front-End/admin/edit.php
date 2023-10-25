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
</head> 
<body>
	<?php
		$id=$_GET['id'];
		$myquery="SELECT * FROM login_table WHERE LOGIN_ID='$id'";
		$getresults=mysqli_query($con,$myquery);
		while($viewdata=mysqli_fetch_array($getresults))
		{
			$email=$viewdata['EMAIL_ID'];
			$contact=$viewdata['CONTACT_NO'];
		}
	?>
								<!--/login-->
								
									   <div class="error_page">
												<!--/login-top-->
												
													<div class="error-top">
													<h2 class="inner-tittle page"></h2>
													    <div class="login">
														<h3 class="inner-tittle t-inner">Edit Admin Data</h3>
																
																<form method="POST">
																		Email Address : 
																		<input type="text" name="a_email" class="text" value=<?php echo $email;?> onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-mail address';}" >
																		Contact Number :
																		<input type="text" name="a_contact" value=<?php echo $contact;?> onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Contact Number';}">
																		<div class="submit"><input type="submit" name="update" onclick="myFunction()" value="UPDATE" ></div>
																		<div class="clearfix"></div>
																		
																</form>
														</div>													
													</div>
													
													
	<?php
		if(isset($_POST['update']))
		{
			$id=$_GET['id'];
			
			$email=$_POST['a_email'];
			$contact=$_POST['a_contact'];
			
			$upsql="UPDATE login_table SET EMAIL_ID='$email', CONTACT_NO='$contact' WHERE LOGIN_ID='$id'";
			$sql=mysqli_query($con,$upsql);
			if($sql)
			{
				header("location:table.php");
				echo "<script> alert('Admin Updated Successfully');</script>";
			}
			else
			{
				echo "<script> alert('Admin Not Updated');</script>";
			}
		}
	?>
										   </div>
						
										  	<!--//login-->
										    <!--footer section start-->
										<div class="footer">
												<div class="error-btn">
															<a class="read fourth" href="dashboard.php">Return to Home</a>
															</div>
										   </div>
									
											
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
</body>
</html>
	<?php } ?>