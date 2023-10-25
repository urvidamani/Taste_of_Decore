<?php
	include 'connection.php';
?>	
	<div class="sidebar-menu">
					<header class="logo">
					<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="index.html"> <span id="logo"> <h1>Taste Of Decor</h1></span> 
					<!--<img id="logo" src="" alt="Logo"/>--> 
				  </a> 
				</header>
			<div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
			<!--/down-->
							<div class="down">	
									  <a href="index.html"><img src="images/admin3.jpg"></a>
									  <a href="index.html"><span class=" name-caret">ZACH MCLARIEN</span></a>
									  <?php $query=("SELECT CONTACT_NO FROM login_table");
																	$run=mysqli_query($con,$query);
																//	echo $run;?>
									
									<ul>
									<li><a class="tooltips" href="profile.php"><span>Profile</span><i class="lnr lnr-user"></i></a></li>
									
										<li><a class="tooltips" href="changepass.php"><span>Password</span><i class="lnr lnr-cog"></i></a></li>
										<li><a class="tooltips" href="logout.php"><span>Log out</span><i class="lnr lnr-power-switch"></i></a></li>
										</ul>
									</div>
							   <!--//down-->
                           <div class="menu">
									<ul id="menu" >
										<li><a href="dashboard.php"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a></li>
										 <li id="menu-academico" ><a href="#"><i class="fa fa-table"></i> <span> Manage Admin</span> <span class="fa fa-angle-right" style="float: right"></span></a>
										   <ul id="menu-academico-sub" >
											<li id="menu-academico-avaliacoes" ><a href="addadmin.php"> Add New Admin</a></li>
											<li id="menu-academico-avaliacoes" ><a href="table.php"> Edit / Delete Admin</a></li>
										  </ul>
										</li>
										
										
										
																				 
										 
									
										<li id="menu-academico" ><a href="#"><i class="fa fa-table"></i> <span> Experts</span> <span class="fa fa-angle-right" style="float: right"></span></a>
										   <ul id="menu-academico-sub" >
											<li id="menu-academico-avaliacoes" ><a href="addexp.php"> Add New Experts</a></li>
											<li id="menu-academico-avaliacoes" ><a href="manage_expert.php"> Manage Experts</a></li>
										  </ul>
										</li>
										
										<li id="menu-academico" ><a href="#"><i class="fa fa-table"></i> <span> Retailer</span> <span class="fa fa-angle-right" style="float: right"></span></a>
										   <ul id="menu-academico-sub" >
											<li id="menu-academico-avaliacoes" ><a href="addret.php"> Add New Retailer</a></li>
											<li id="menu-academico-avaliacoes" ><a href="manage_ret.php"> Manage Retailer</a></li>
										  </ul>
										</li>
										<li id="menu-academico" ><a href="#"><i class="fa fa-table"></i> <span> Product Category</span> <span class="fa fa-angle-right" style="float: right"></span></a>
										   <ul id="menu-academico-sub" >
											<li id="menu-academico-avaliacoes" ><a href="addcat.php"> Add Category</a></li>
											<li id="menu-academico-avaliacoes" ><a href="managecat.php"> Manage Category</a></li>
											 </ul>
										</li>
										<li><a href="manage_user.php"><i class="fa fa-table"></i> <span> Manage User</span> <span style="float: right"></span></a>
										  </li>
										  <li><a href="manage_tips_tricks.php"><i class="fa fa-table"></i> <span> Manage Tips and Tricks</span> <span style="float: right"></span></a>
										  </li>
										  <li><a href="manage_reviews_ratings.php"><i class="fa fa-table"></i> <span> Manage Feedback</span> <span style="float: right"></span></a>
										  </li>
									<li><a href="yourorders.php"><i class="fa fa-table"></i> <span> Manage Orders</span> <span style="float: right"></span></a>
									<li><a href="managecon.php"><i class="fa fa-table"></i> <span> Manage Contact Us</span> <span style="float: right"></span></a>
										  </li>
										
											
								  </ul>
								</div>
							  </div>
			