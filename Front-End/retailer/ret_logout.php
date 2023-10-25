<?php
	session_start();
	unset($_SESSION['sess_ret']);
	session_destroy();
	header("Location:dashboard.php");
?>