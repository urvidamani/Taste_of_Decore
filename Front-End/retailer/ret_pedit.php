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
		$myquery="SELECT * FROM products_table WHERE PRODUCT_ID='$id'";
		$getresults=mysqli_query($con,$myquery);
		while($viewdata=mysqli_fetch_array($getresults))
		{
			$proname=$viewdata['PRODUCT_NAME'];
			$prodate=$viewdata['PRODUCT_MANUFACTURING_DATE'];
			$proimg=$viewdata['PRODUCT_IMAGE'];
			$propri=$viewdata['PRODUCT_PRICE'];
			$prode=$viewdata['DESCRIPTION'];
			//$procna=$viewdata['CATEGORY_NAME'];
			//$probna=$viewdata['BRAND_NAME'];
		}
	?>
								<!--/login-->
								
									   <div class="error_page">
												<!--/login-top-->
												
													<div class="error-top">
													
													    <div class="login">
														<h3 class="inner-tittle t-inner">Edit Product Data</h3>
																
																<form method="POST" enctype="multipart/form-data">
																		<b>Product Name : </b>
																		<input type="text" name="r_pname" class="text" value=<?php echo $proname;?>> </br>
																		<b>Product Manufacturing date : </b>
																		<input type="date" name="r_pdate" value=<?php echo $prodate;?>> </br>
																		<b>Product Image:</b>
																		<input type="file" id="photo-img" accept="image/png,image/jpg,image/jpeg" name="image" value=<?php echo $proimg;?>> </br>
																		<b>Product price:</b>
																		<input type="text" name="r_pprice" class="text" value=<?php echo $propri;?>> </br>
																		<b>Product Description:</b>
																		<textarea name="r_pdesc" rows="5" cols="20" value=<?php echo $prode;?>> </textarea> </br>
																		<b>Category Name:</b>
																		<select name="r_cat">
																			<optgroup name="cat">
																				<?php
																					$sql=mysqli_query($con,"SELECT CATEGORY_NAME FROM category_table");
																					while($row=mysqli_fetch_array($sql))
																					{
																				?>
																					<option name="category"> <?php echo $row['CATEGORY_NAME'] ?></option> </br> </br>
																				<?php									
																					}
																				?>
																		</select>
																		<b>Brand Name:</b>
																		<select name="r_brand">
																			<optgroup name="brand">
																				<?php
																					$sql1=mysqli_query($con,"SELECT BRAND_NAME FROM brand_details");
																					while($row1=mysqli_fetch_array($sql1))
																					{
																				?>
																					<option name="category"><?php echo $row1['BRAND_NAME'] ?></option> </br>
																				<?php
																					}
																				?>
																		</select>
																		<div class="submit"><input type="submit" name="update" onclick="myFunction()" value="UPDATE" ></div>
																		<div class="clearfix"></div>
																		
																</form>
														</div>													
													</div>
													
													
	<?php
		if(isset($_POST['update']))
		{
			$id=$_GET['id'];
			
			$pname=$_POST['r_pname'];
			$pdate=$_POST['r_pdate'];
			$filename=$_FILES["image"]["name"];
			$tempname=$_FILES["image"]["tmp_name"];
			date_default_timezone_set("Asia/calcutta");
			$iname=(string)(date('YmdHis'));
			$extension=pathinfo($filename,PATHINFO_EXTENSION);
			$image_path=$iname.".".$extension;
			if($filename)
			{
				move_uploaded_file($_FILES['image']['tmp_name'],"ret_img/".$image_path);
			}
			$pprice=$_POST['r_pprice'];
			$pdesc=$_POST['r_pdesc'];
			$pcat=$_POST['r_cat'];
			$pbrand=$_POST['r_brand'];
			
			$upsql="UPDATE products_table SET PRODUCT_MANUFACTURING_DATE='$pdate', PRODUCT_NAME='$pname', PRODUCT_IMAGE='$image_path', PRODUCT_PRICE='$pprice', DESCRIPTION='$pdesc', CATEGORY_NAME='$pcat', BRAND_NAME='$pbrand' WHERE PRODUCT_ID='$id'";
			$sql=mysqli_query($con,$upsql);
			if($sql)
			{
				echo "<script> alert('Product details changed successfully');</script>";
				echo ("<script> location.href='ret_mpro.php'</script>");
			}
			else
			{
				echo "<script> alert('Product details not changed');</script>";
				echo ("<script> location.href='ret_mpro.php'</script>");
			}
		}
	?>
										   </div>
						
										  	<!--//login-->
										    <!--footer section start-->
										<div class="footer">
												
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