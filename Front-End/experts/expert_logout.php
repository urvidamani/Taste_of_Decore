<?php
	session_start();
	unset($_SESSION['sess_exp']);
	session_destroy();
	header("Location:expert_dashboard.php");
?>