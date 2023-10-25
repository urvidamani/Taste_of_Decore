<?php
	session_start();
	unset($_SESSION['sess_admin']);
	session_destroy();
	header("Location:dashboard.php");
?>