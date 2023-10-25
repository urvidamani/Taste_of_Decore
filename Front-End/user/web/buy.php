<?php
	include 'connection.php';
if(isset($_POST['sub']))
							{
								session_start();
								$email=$_SESSION['sess_user'];
								

								$q=$_POST['quan'];
								
								date_default_timezone_set("Asia/Calcutta");
								$date = (string)(date('"d/m/Y h:i:sa"'));
								
								$pid=$_GET['page_id'];
							
			
								$q = "INSERT INTO order_table (EMAIL_ID,QUANTITY,ORDER_DATE,ORDER_DATE,PRODUCT_ID) VALUES ('$email','$q','$date','$pid')";
								$sql=mysqli_query($con,$q);
								if($sql)
								{
									header("Location:product_single.php");
								}
								else
								{
									echo "data not inserted";
								}
							}
							?>