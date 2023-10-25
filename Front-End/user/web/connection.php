<?php
	//1. connect to server
	
	$con=mysqli_connect('localhost','root','');
	if(!$con)
	{
		echo 'not connected with server';
	}
	//echo 'connected with server';
	
	//2.connect to database
	
	$db=mysqli_select_db($con,'taste_of_decor');
	if(!$db)
	{
		echo "Database not connected";
	}
	
	
?>