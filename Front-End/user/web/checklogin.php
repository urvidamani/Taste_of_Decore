<?php
	include 'connection.php';
		if(isset($_POST['submit']))
		{
			
			$email=$_POST['uemail'];
			$pass=$_POST['upass'];
			$query=("SELECT * FROM login_table WHERE EMAIL_ID='".$email."' AND PASSWORD='".$pass."' AND ROLE=2 AND STATUS=1");
			$run=mysqli_query($con,$query);
			$count=mysqli_num_rows($run);
		
			if($count==1)
			{
				
				session_start();
				$_SESSION['sess_user']=$email;
				header("Location:dashboard.php");
			}
			else
			{
				echo "<script> alert('Enter correct Email ID or Password');</script>";
			}
		}
	?>