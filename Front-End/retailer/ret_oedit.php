<?php
	include 'connection.php';
		session_start();
	if(!isset($_SESSION['sess_ret']))
	{
		header("Location:ret_index.php");
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
		$myquery="SELECT * FROM order_table WHERE ORDER_ID='$id'";
		$getresults=mysqli_query($con,$myquery);
		while($viewdata=mysqli_fetch_array($getresults))
		{
			$orstatus=$viewdata['ORDER_STATUS'];
			$shdate=$viewdata['SHIPPING_DATE'];
			
		}
	?>
								<!--/login-->
								
									   <div class="error_page">
												<!--/login-top-->
												
													<div class="error-top">
													
													    <div class="login">
														<h3 class="inner-tittle t-inner">Edit Product Data</h3>
																
																<form method="POST">
																		Order Status :  <br/>
																		<input type="radio" name="r_osta" value=<?php echo $orstatus; ?> onfocus="this.value = '';" onblur="if (this.value == '') {this.value ='Confirmed ';}" > Confirmed <br/>
																		<input type="radio" name="r_osta" value=value=<?php echo $orstatus; ?> onfocus="this.value = '';" onblur="if (this.value == '') {this.value ='Out for Delivery';}">Out for Delivery
																		<br/>
																		Shipping date:
																		<input type="date" name="r_sdate" value=<?php echo $shdate; ?> onfocus="this.value = '';" onblur="if (this.value == '') {this.value ='shipping date';}">
																		
																		<div class="submit"><input type="submit" name="update" onclick="myFunction()" value="UPDATE" ></div>
																		<div class="clearfix"></div>
																		
																</form>
														</div>													
													</div>
													
													
	<?php
		if(isset($_POST['update']))
		{
			$id=$_GET['id'];
			
			$ostatus=$_POST['r_osta'];
			$osdate=$_POST['r_sdate'];
			
			$upsql="UPDATE order_table SET ORDER_STATUS='$ostatus', SHIPPING_DATE='$osdate' WHERE PRODUCT_ID='$id'";
			$sql=mysqli_query($con,$upsql);
			if($sql)
			{
				echo "<script> alert('Order details changed successfully');</script>";
				echo ("<script> location.href='ret_morder.php'</script>");
			
			}
			else
			{
				echo "<script> alert('Order details not changed');</script>";
				echo ("<script> location.href='ret_morder.php'</script>");
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
<?php
	}
?>