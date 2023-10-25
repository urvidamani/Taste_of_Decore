<?php
	include 'connection.php';
		session_start();
	if(!isset($_SESSION['sess_ret']))
	{
		header("Location:ret_index.php");
	}
	else
	{
		//$eid=$_GET['id'];
	
	$expmail = $_SESSION['sess_ret'];
	
	
	// to get login id from 
	
		$qry1 = "SELECT LOGIN_ID FROM login_table where EMAIL_ID='$expmail'";	
		$result1 = mysqli_query($con,$qry1);
		$value1 = mysqli_fetch_array($result1);
		$lid = $value1['LOGIN_ID'];
	
	
		/*$qry = "SELECT EXPERT_ID FROM expert_table where LOGIN_ID='$lid'";	
		$result = mysqli_query($con,$qry);
		$value = mysqli_fetch_array($result);
		$id = $value['EXPERT_ID'];*/
	

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
<script src="js/css3clock.js"></script>
<!--Easy Pie Chart-->
<!--skycons-icons-->
<script src="js/skycons.js"></script>
<!--//skycons-icons-->
</head> 
<body>
 <div class="page-container">
   <!--/content-inner-->
	<div class="left-content">
	   <div class="inner-content">
		<!-- header-starts -->
			<div class="header-section">
						
								
					<div class="clearfix"></div>
				</div>

						<!-- //header-ends -->
							<!--//outer-wp-->
								<div class="outter-wp">
											<!--/sub-heard-part-->
											 <div class="sub-heard-part">
													   <ol class="breadcrumb m-b-0">
															<li><a href="index.html">Home</a></li>
															<li class="active">Forms</li>
														</ol>
											</div>	
											<!--/sub-heard-part-->	
												<!--/forms-->
													<div class="forms-main">
										
																<!--/forms-inner-->
													  				<div class="forms-inner">
														
																			 <!--/set-3-->
																			 <div class="set-3">
																				<div class="graph-2 general">
																					<h3 class="inner-tittle two">Add Product</h3>
																						<div class="grid-1">
																						   <form class="form-horizontal" method="POST" enctype="multipart/form-data">
																									<div class="form-group">
																										<label class="col-md-2 control-label">Manufacturing Date : </label>
																										<div class="col-md-8">
																											<div class="input-group">							
																												<span class="input-group-addon">
																													<i class="fa fa-envelope-o"></i>
																												</span>
																												<input type="date" name="r_prodate">
																											</div>
																										</div>
																									</div>
																									
																									<div class="form-group">
																										<label class="col-md-2 control-label">Product Name : </label>
																										<div class="col-md-8">
																											<div class="input-group">							
																												<span class="input-group-addon">
																													<i class="fa fa-envelope-o"></i>
																												</span>
																												<input type="text" class="form-control1 icon" name="r_proname" placeholder="Product name" required>
																												
																											</div> 	
																										</div>
																									</div>	
																									
																									<div class="form-group">
																										<label class="col-md-2 control-label">Product Image: </label>
																										<div class="col-md-8">
																											<div class="input-group">							
																												<span class="input-group-addon">
																													<i class="fa fa-envelope-o"></i>
																												</span>
																												<input type="file" id="photo-img" accept="image/png,image/jpg,image/jpeg" name="image">
																												
																											</div> 	
																										</div>
																									</div>
																									<div class="form-group">
																										<label class="col-md-2 control-label">Product Price : </label>
																										<div class="col-md-8">
																											<div class="input-group">							
																												<span class="input-group-addon">
																													<i class="fa fa-envelope-o"></i>
																												</span>
																												<input type="text" class="form-control1 icon" name="r_proprice" placeholder="Product price" required pattern="[0-9]{2,10}">
																												
																											</div> 	
																										</div>
																									</div>
																									<div class="form-group">
																										<label class="col-md-2 control-label">Product Description : </label>
																										<div class="col-md-8">
																											<div class="input-group">							
																												<span class="input-group-addon">
																													<i class="fa fa-envelope-o"></i>
																												</span>
																												<textarea name="r_prodes" rows="5" cols="20"> </textarea>
																												
																											</div> 	
																										</div>
																									</div>
																									<div class="form-group">
																										<label class="col-md-2 control-label">Select Category : </label>
																										<div class="col-md-8">
																											<div class="input-group">							
																												<span class="input-group-addon">
																													<i class="fa fa-envelope-o"></i>
																												</span>
																												<select name="r_cat">
																													<optgroup name="cat">
																													<?php
																														$sql=mysqli_query($con,"SELECT CATEGORY_NAME FROM category_table");
																														while($row=mysqli_fetch_array($sql))
																														{
																													?>
																														<option name="category"><?php echo $row['CATEGORY_NAME'] ?></option>
																													<?php
																														
																														}
																													?>
																														
																												</select>
																											</div> 	
																										</div>
																									</div>
																									
																									
																									
																									<div class="submit"><input type="submit" name="sub" onclick="myFunction()" value="ADD" ></div>
																								</div>
																											
																				</div>
																			</div>	
																								</form>
																						</div>
																				</div>
																				<?php
																					if(isset($_POST['sub']))
																					{
																						$pdate=$_POST['r_prodate'];
																						$pname=$_POST['r_proname'];
																						$filename=$_FILES["image"]["name"];
																						$tempname=$_FILES["image"]["tmp_name"];
																						date_default_timezone_set("Asia/Calcutta");
																						$iname=(string)(date('YmdHis'));
																						$extension=pathinfo($filename,PATHINFO_EXTENSION);
																						$image_path=$iname.".".$extension;
																						if($filename)
																						{
																							move_uploaded_file($_FILES['image']['tmp_name'],"ret_img/".$image_path);
																						}
																						$pprice=$_POST['r_proprice'];
																						$pdesc=$_POST['r_prodes'];
																						$pcat=$_POST['r_cat'];
																						
																						//$previ=$_POST['r_prore'];
																						
																						
																						$query="INSERT INTO products_table(LOGIN_ID,PRODUCT_MANUFACTURING_DATE,PRODUCT_NAME,PRODUCT_IMAGE,PRODUCT_PRICE,DESCRIPTION,CATEGORY_NAME) VALUES('$lid','$pdate','$pname','$image_path','$pprice','$pdesc','$pcat')";
																						$sql2=mysqli_query($con,$query);
																						if($sql2)
																						{
																							echo "<script> alert('Product successfully added');</script>";
																							echo ("<script> location.href='ret_apro.php' </script>");
																						}
																						else
																						{
																							echo "<script> alert('Product not added'); </script>";
																							echo ("<script> location.href='ret_apro.php' </script>");
																						}
																					}
																				?>
																			</div>
																			<!--//set-3-->
																			
																		</div>
																	<!--//forms-inner-->
																</div> 
														<!--//forms-->											   
												</div>
											<!--//outer-wp-->
									 
								</div>
							</div>
				<!--//content-inner-->
			<!--/sidebar-menu-->
				<div class="sidebar-menu">
					<header class="logo">
					<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="index.html"> <span id="logo"> </span> 
						<!--<img id="logo" src="" alt="Logo"/>--> 
					</a> 
					</header>
				<div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
			
                                  <?php
									include 'ret_menu.php';
								  ?>
							  </div>
							  <div class="clearfix"></div>		
							</div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>

<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
</body>
</html>
<?php
	}
?>