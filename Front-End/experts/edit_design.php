<?php
	include 'connection.php';
	session_start();
	if(!isset($_SESSION['sess_exp']))
	{
		header("Location:expert_index.php");
	}
	else
	{
		//$eid=$_GET['id'];
	
	$expmail = $_SESSION['sess_exp'];
	
	
	// to get login id from 
	
		$qry1 = "SELECT LOGIN_ID FROM login_table where EMAIL_ID='$expmail'";	
		$result1 = mysqli_query($con,$qry1);
		$value1 = mysqli_fetch_array($result1);
		$lid = $value1['LOGIN_ID'];
	
	
	
	
	$qry = "SELECT EXPERT_ID FROM expert_table where LOGIN_ID='$lid'";	
		$result = mysqli_query($con,$qry);
		$value = mysqli_fetch_array($result);
		$id = $value['EXPERT_ID'];
	
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
		
		$myquery="SELECT * FROM design_table WHERE DESIGN_ID='$id'";
		$getresults=mysqli_query($con,$myquery);
		while($viewdata=mysqli_fetch_array($getresults))
		{
			$email=$viewdata['DESIGN_NAME'];
		}
	?>
								<!--/login-->
								
									   <div class="error_page">
												<!--/login-top-->
												
													<div class="error-top">
													<h2 class="inner-tittle page"></h2>
													    <div class="login">
														<h3 class="inner-tittle t-inner">Edit Design</h3>
																
																<form method="POST" enctype="multipart/form-data">
																		Design name:<input type="text" class="text" value=<?php echo $email;?>  name="e_email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-mail address';}" >
																
																		Design Image: 
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
			$contact=$_POST['d_des'];
			
			$filename = $_FILES["image"]["name"];
			$tempname = $_FILES["image"]["tmp_name"];    
		
		
		date_default_timezone_set("Asia/Calcutta");
			
			$iname=(string)(date('YmdHis'));
			$extension=pathinfo($filename,PATHINFO_EXTENSION);
			$image_path=$iname.".".$extension;
			
			
			if($filename)
			{
				move_uploaded_file($_FILES['image']['tmp_name'],"Designs/".$image_path);
			}
			
			
			$ans1="UPDATE design_table SET DESIGN_NAME='$email' WHERE DESIGN_ID='$id'";
			$sql1=mysqli_query($con,$ans1);
			
			
			
			if($sql1)
			{
				echo "<script>alert('Design Updated Successfully');</script>";
				header("location:edit_design.php");
			}
			else
			{
				echo "<script>alert('Design Not Updated');</script>";
				//echo 'not updated';
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