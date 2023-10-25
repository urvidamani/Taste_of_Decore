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
											<li class="active">Order</li>
										</ol>
									   </div>
								  <!--//sub-heard-part-->
									<div class="graph-visual tables-main">
											<h3 class="inner-tittle two">MANAGE ORDER DETAILS </h3>
													<div class="graph">
															<div class="tables">
																<table class="table table-hover"> 
																	<thead> 
																		<tr height="75px"> 
																		<th> ID </th>
																		<th>EMAIL ID</th>
																		<th>PRODUCT IMAGE</th>
																		<th>PRODUCT NAME</th>
																		<th> Order Status</th>
																		<th> Order date </th>
																		
																		<th> Address </th>
																		
																		
																		</tr>
																	</thead> 
																	<tbody> 
																		<?php
																			$query = "SELECT O.ORDER_ID,O.EMAIL_ID,O.ORDER_STATUS,O.ORDER_DATE,O.ADDRESS,O.PRODUCT_ID,P.PRODUCT_ID,P.PRODUCT_IMAGE,P.PRODUCT_NAME FROM order_table O,products_table P where O.PRODUCT_ID=P.PRODUCT_ID ";
																			$result = mysqli_query($con,$query);
																			
																			//$query1="select * from products_table where LOGIN_ID='$lid' ";
																			//$result2=mysqli_query($con,$query1);
																			
		
																			while($value = mysqli_fetch_array($result))
																			{
																		?>
																			<tr>
																				<td> <?php echo $value['ORDER_ID'] ?> </td>
																				<td> <?php echo $value['EMAIL_ID'] ?> </td>
																				
																				<td><img src="../retailer/ret_img/<?PHP ECHO $value['PRODUCT_IMAGE'];?>" width="100" height="100"></td>
																				<td><?php echo $value['PRODUCT_NAME'] ?></td>
																				
																				<td> <?php echo $value['ORDER_STATUS'] ?> </td>
																				<td> <?php echo $value['ORDER_DATE'] ?> </td>
																				
																				<td> <?php echo $value['ADDRESS'] ?> </td>
																				
																				
																				
																			</tr>
																		<?php
																			}
																			
																				if(isset($_GET['del']))
																				{
																				$sq = "delete from order_table where ORDER_ID=".$_GET['del']."";
																				$resulta = mysqli_query($con,$sq);
																				
																				if($resulta)
																				{
																					echo "<script> alert('Order Deleted Successfully');</script>";
																				}
																				else
																				{
																					echo "<script> alert('Order Not Deleted');</script>";
																				}
																			}
																			?>
																	</tbody> 
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
									include 'menu.php';
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