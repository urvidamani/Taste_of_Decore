<?php
	include 'connection.php';
	session_start();
	if(!isset($_SESSION['sess_exp']))
	{
		header("Location:expert_index.php");
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
						<!--menu-right-->
						<div class="top_menu">
						      
									
									<script type="text/javascript">
										 $('.main-search').hide();
										$('button').click(function (){
											$('.main-search').show();
											$('.main-search text').focus();
										}
										);
										$('.close').click(function(){
											$('.main-search').hide();
										});
									</script>
							<!--/profile_details-->
										   							   		
							<div class="clearfix"></div>	
								</ul>
							</div>
							<div class="clearfix"></div>	
							<!--//profile_details-->
						</div>
						<!--//menu-right-->
					<div class="clearfix"></div>
				</div>
					<!-- //header-ends -->
						<!--outter-wp-->
							<div class="outter-wp">
									<!--sub-heard-part-->
									  <div class="sub-heard-part">
									   <ol class="breadcrumb m-b-0">
											<li><a href="expert_dashboard.php">Home</a></li>
											<li class="active"> Records</li>
										</ol>
									   </div>
								  <!--//sub-heard-part-->
									<div class="graph-visual tables-main">
												
										        </div>
												
													<h3 class="inner-tittle two">Expert Records </h3>
													<div class="graph">
															<div class="tables">
															
																<table border="2" class="table table-hover"> 
																	<thead> <tr height="75px"> 
																		<th> Email Address </th>
																		<th> Contact Number </th>
																		<th> Expert ID</th>
																		<th> Work Experience</th>
																		<th> Expert Name</th>
																		<th> Expert Work </th>
																		<th> Delete </th>
																		<th> Edit </th>
																		</tr>
																		<?php
																		
																			$query = "SELECT L.LOGIN_ID,L.EMAIL_ID,L.CONTACT_NO, E.EXPERT_ID,E.WORK_EXPERIENCE,E.EXPERT_NAME,E.EXPERT_WORK FROM login_table L,expert_table E where L.LOGIN_ID=E.LOGIN_ID";
																			$result = mysqli_query($con,$query);
																			
																			
																			while($value = mysqli_fetch_array($result))
																			{
																				?>
																				<tr>
																					
																					<td> <?php echo $value['EMAIL_ID'] ?> </td>
																					<td> <?php echo $value['CONTACT_NO'] ?> </td>
																					<td> <?php echo $value['EXPERT_ID'] ?> </td>
																					<td> <?php echo $value['WORK_EXPERIENCE'] ?> </td>
																					<td> <?php echo $value['EXPERT_NAME'] ?> </td>
																				<td><img src="Expert_work/<?PHP ECHO $value['EXPERT_WORK'];?>" width="100" height="100"></td>
																					
																					<td> <a href="?del=<?php echo $value['LOGIN_ID'];?>" onclick="return confirm('Are you sure you want to delete expert?')">DELETE </a> </td>
																					<td> <a href="edit1_ex.php?id=<?php echo $value['LOGIN_ID'];?>"> EDIT </a> </td>
																				</tr>
																			<?php
																			}
																			
																				if(isset($_GET['del']))
																				{
																				$sq = "delete from expert_table where LOGIN_ID=".$_GET['del']."";
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
																		</thead> <tbody>  </tbody> </table>
															</div>
												
													</div>
													
										</div>
										<!--//graph-visual-->
									</div>
									
								</div>
							</div>
				<!--//content-inner-->
			<!--/sidebar-menu-->
			<?php 
				include 'expert_menu.php';
			?>				
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
 <?php } ?> 