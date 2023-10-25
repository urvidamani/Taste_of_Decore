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
		$myquery="SELECT * FROM brand_details WHERE BRAND_ID='$id'";
		$getresults=mysqli_query($con,$myquery);
		while($viewdata=mysqli_fetch_array($getresults))
		{
			$name=$viewdata['BRAND_NAME'];
			$email=$viewdata['EMAIL'];
			$contact=$viewdata['CONTACT_NO'];
			
		}
	?>
								<!--/login-->
								
									   <div class="error_page">
												<!--/login-top-->
												
													<div class="error-top">
													<h2 class="inner-tittle page"></h2>
													    <div class="login">
														<h3 class="inner-tittle t-inner">Edit Company Data</h3>
																
																<form method="POST">
																		Brand Name : 
																		<input type="text" name="b_name" class="text" value=<?php echo $name;?> onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Brand Name';}" >
																		Email Address : 
																		<input type="text" name="b_email" class="text" value=<?php echo $email;?> onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-mail Address';}" >
																		Contact Number :
																		<input type="text" name="b_contact" value=<?php echo $contact;?> onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Contact Number';}">
																		<div class="submit"><input type="submit" name="update" onclick="myFunction()" value="UPDATE" ></div>
																		<div class="clearfix"></div>
																		
																</form>
														</div>													
													</div>
													
													
	<?php
		if(isset($_POST['update']))
		{
			$id=$_GET['id'];
			
			$name=$_POST['b_name'];
			$email=$_POST['b_email'];
			$contact=$_POST['b_contact'];
			
			$upsql="UPDATE brand_details SET BRAND_NAME='$name',EMAIL='$email', CONTACT_NO='$contact' WHERE BRAND_ID='$id'";
			$sql=mysqli_query($con,$upsql);
			if($sql)
			{
				header("location:managecoun.php");
			}
			else
			{
				echo "<script> alert('Company Not Updated');</script>";
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