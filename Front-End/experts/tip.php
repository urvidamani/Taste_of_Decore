<?php
	include 'connection.php';
	
		session_start();
	if(!isset($_SESSION['sess_exp']))
	{
		header("Location:expert_index.php");
	}
	else
	{
		$expmail = $_SESSION['sess_exp'];
	
	
	// to get login id from 
	
		$qry1 = "SELECT LOGIN_ID FROM login_table where EMAIL_ID='$expmail'";	
		$result1 = mysqli_query($con,$qry1);
		$value1 = mysqli_fetch_array($result1);
		$lid = $value1['LOGIN_ID'];
	
	
	
	
		$qry = "SELECT EXPERT_ID FROM expert_table where LOGIN_ID='$lid'";	
		$result = mysqli_query($con,$qry);
		$value = mysqli_fetch_array($result);
		$eid = $value['EXPERT_ID'];
		
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
		
		$myquery="SELECT * FROM tips_and_tricks_table WHERE TIP_TRICK_ID='$id'";
		$getresults=mysqli_query($con,$myquery);
		
	?>
								<!--/login-->
								
									   <div class="error_page">
												<!--/login-top-->
												
													<div class="error-top">
													<h2 class="inner-tittle page"></h2>
													    <div class="login">
														<h3 class="inner-tittle t-inner">Write Tip</h3>
																
																<form method="POST" enctype="multipart/form-data">
																		Tip : <textarea name="e_tip"  rows="5" cols="20"> </textarea>
																
																	
																		<div class="submit"><input type="submit" name="Ans" onclick="myFunction()" value="Give Tip" ></div>
																		<div class="clearfix"></div>
																		
																</form>
														</div>													
													</div>
													
													
	<?php
		if(isset($_POST['Ans']))
		{
			$id=$_GET['id'];
			
			$answer=$_POST['e_tip'];
			
		
		
		
			
			$ans1="UPDATE tips_and_tricks_table  SET TIP_DESCRIPTION='$answer' WHERE TIP_TRICK_ID='$id'";
			$sql1=mysqli_query($con,$ans1);
			
			
			
			if($sql1)
			{
				echo "<script>alert('Tip Updated Successfully');</script>";
				header("location:exp_tips_tricks.php");
			}
			else
			{
				echo "<script>alert('Tip Not Updated');</script>";
				
			}
		}
	?>
										   </div>
						
										  	<!--//login-->
										    <!--footer section start-->
										<div class="footer">
												<div class="error-btn">
															<a class="read fourth"></a>
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
