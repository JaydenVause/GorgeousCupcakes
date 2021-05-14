<?php
	if(!isset($_SESSION['user'])){
		$_SESSION['error'] = "Please log in!";
		header('location: login.php');
		exit();
	}

	// var_dump($_SESSION['user']);
?>