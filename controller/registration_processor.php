<?php

	session_start();
	$_SESSION['regErr'] = [];
	require_once('../model/conn.php');
	require_once('../model/functions.php');
	// set variables to null
	$username =	$password = $first_name = $last_name = $email_address = "";
	$errors = [];
	
	// rinse values and assign variables
	if ($_SERVER['REQUEST_METHOD'] == "POST"){
		// check if empty
		if(empty($_POST['username'])){
			$errors['usernameErr'] = "Username is required.";
		}else{
			$username = test_input($_POST['username']);
		}

		if(empty($_POST['password'])){
			$errors['passwordErr'] = "Password is required.";
		}else{
			$password = test_input($_POST['password']);
		}

		if(empty($_POST['email_address'])){
			$errors['emailErr'] = "Email Address is required.";
		}else{
			// check email format
			$email_address = test_input($_POST['email_address']);
			if (!filter_var($email_address, FILTER_VALIDATE_EMAIL)) {
			  $errors['emailErr'] = "Invalid email format";
			}
		}

		if(empty($_POST['first_name'])){
			$errors['firstNameErr'] = "First name is required.";
		}else{
			// check if firstname contains letters and white space
			$first_name = test_input($_POST['first_name']);
			if (!preg_match("/^[a-zA-Z-' ]*$/",$first_name)) {
				  $errors['firstNameErr'] = "Only letters and white space allowed";
				}
		}

		if(empty($_POST['last_name'])){
			$errors['lastNameErr'] = "Last name is required.";
		}else{
			// check if last name only contains letters and white space
			$last_name = test_input($_POST['last_name']);
			if (!preg_match("/^[a-zA-Z-' ]*$/",$last_name)) {
				  $errors['lastNameErr'] = "Only letters and white space allowed";
				}
		}	
	}
	// process variales
	if(empty($errors)){

		$salt = md5(uniqid(rand(), true));
		$password = hash('sha256', $password.$salt); 
		$result = register_user($username, $password, $salt, $email_address, $first_name, $last_name);
		header('location: ../view/login.php');
	}else{

		$_SESSION['regErr'] = $errors;
		header('location: ../view/register.php');
	}

?>