<?php
	include 'connection.php';
		session_start();
	if(!isset($_SESSION['sess_ret']))
	{
		header("Location:ret_index.php");
	}
	else
	{
		$expmail = $_SESSION['sess_ret'];
	
	
	// to get login id from 
	
		$qry1 = "SELECT LOGIN_ID FROM login_table where EMAIL_ID='$expmail'";	
		$result1 = mysqli_query($con,$qry1);
		$value1 = mysqli_fetch_array($result1);
		$lid = $value1['LOGIN_ID'];
	
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Taste Of Decor</title>
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
	<!-- /js -->
<script src="js/jquery-1.10.2.min.js"></script>
<!-- //js-->
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
						<!--outter-wp-->
							<div class="outter-wp">
									<!--sub-heard-part-->
									  <div class="sub-heard-part">
									   <ol class="breadcrumb m-b-0">
											<li><a href="index.html">Home</a></li>
											<li class="active">Tables</li>
										</ol>
									   </div>
								  <!--//sub-heard-part-->
									<div class="graph-visual tables-main">
											<h3 class="inner-tittle two">MANAGE PRODUCT DETAILS </h3>
													<div class="graph">
															<div class="tables">
																<table class="table table-hover"> 
																	
																	<thead> <tr height="75px"> 
																		
																		<th> Product Name </th>
																		<th> Product manufacturing Date </th>
																		<th> Product Image </th>
																		<th> Product Price </th>
																		<th> Product Description </th>
																		<th> Category Name </th>
																		
																		<th> Delete </th>
																		<th> Edit </th>
																		</tr>
																		<?php
																		
																			$query = "SELECT PRODUCT_ID,PRODUCT_NAME,PRODUCT_MANUFACTURING_DATE,PRODUCT_IMAGE,PRODUCT_PRICE,DESCRIPTION,CATEGORY_NAME FROM products_table WHERE LOGIN_ID='$lid'";
																			$result = mysqli_query($con,$query);
																			
																			
																			while($value = mysqli_fetch_array($result))
																			{
																				?>
																				<tr>
																					
																					<td> <?php echo $value['PRODUCT_NAME'] ?> </td>
																					<td> <?php echo $value['PRODUCT_MANUFACTURING_DATE'] ?> </td>
																					<td> <img src="ret_img/<?PHP ECHO $value['PRODUCT_IMAGE'];?>" width="100" height="100"> </td>
																					<td> <?php echo $value['PRODUCT_PRICE'] ?> </td>
																					<td> <?php echo $value['DESCRIPTION'] ?> </td>
																					<td> <?php echo $value['CATEGORY_NAME'] ?> </td>
																					
																				
																					
																					
																					<td> <a href="?del=<?php echo $value['PRODUCT_ID'];?>" onclick="return confirm('Are you sure you want to delete product?')">DELETE </a> </td>
																					<td> <a href="ret_pedit.php?id=<?php echo $value['PRODUCT_ID'];?>"> EDIT </a> </td>
																				</tr>
																			<?php
																			}
																			
																				if(isset($_GET['del']))
																				{
																				$sq = "delete from products_table where PRODUCT_ID=".$_GET['del']."";
																				$resulta = mysqli_query($con,$sq);
																				
																				
																				if($resulta)
																				{
																					echo "<script>alert('Row deleted');</script>";
																					//echo "Row Deleted";
																				}
																				else
																				{
																					echo "<script>alert('Row not deleted');</script>";
																					//echo "Row not deleted";
																				}
																			}
																			?>
																		</thead> <tbody>  </tbody> 
																</table>
															</div>
												
													</div>
													
													
										</div>
										<!--//graph-visual-->
									</div>
									<!--//outer-wp-->
									 
								</div>
							</div>
				<!--//content-inner-->
			<!--/sidebar-menu-->
				<div class="sidebar-menu">
					<header class="logo">
					<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="index.html"> <span id="logo"> <h1>Augment</h1></span> 
					<!--<img id="logo" src="" alt="Logo"/>--> 
				  </a> 
				</header>
			<div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
			<!--/down-->
							
							   <!--//down-->
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