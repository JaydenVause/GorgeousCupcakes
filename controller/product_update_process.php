<?php
	
	// start session
	session_start();
	require_once '../view/authorize.php';
	require_once '../model/conn.php';
	require_once '../model/functions.php';

	// get vars from post global var
	$cupcake_id = test_input($_POST['cupcake_id']);
	$cupcake_name = test_input($_POST['cupcake_name']);
	$cupcake_description = test_input($_POST['cupcake_description']);
	$category_id = test_input($_POST['category_id']);
	$cupcake_price = test_input($_POST['cupcake_price']);
	// check fields are not empty
	if(empty($cupcake_id) || empty($cupcake_name) || empty($cupcake_description) || empty($category_id) || empty($cupcake_price)){
		$_SESSION['error'] ="All fields must be filled in.";
		header("location: ../view/update_product.php?cupcake_id=$cupcake_id");
		// check is valid price
	}elseif(!is_numeric($cupcake_price)){
		$_SESSION['error'] = 'Product price must be a number value.';
		header('location: ../view/new_product.php');
		// submit to function
	}else{
		$result = update_product_details($cupcake_id, $cupcake_name, $cupcake_description, $category_id, $cupcake_price);
		$_SESSION['success'] = 'Product updated successfully!';
		header("location: ../view/update_product.php?cupcake_id=$cupcake_id");
	}

	
?> 