<?php
	session_start();
	require_once '../view/authorize.php';
	require_once '../model/conn.php';
	require_once '../model/functions.php';

	$cupcake_name = test_input($_POST['cupcake_name']);
	$cupcake_price = test_input($_POST['cupcake_price']);
	$category_id = test_input($_POST['category']);
	$cupcake_description = test_input($_POST['cupcake_description']);
	// check all fields are not empty
	if(empty($cupcake_name) || empty($cupcake_price) || empty($cupcake_description) || empty($category_id)){
		$_SESSION['error'] = 'All fields must be filled in.';
		header('location: ../view/new_product.php');
		// check price is numeric value
	}elseif(!is_numeric($cupcake_price)){
		$_SESSION['error'] = 'Product price must be a number value.';
		header('location: ../view/new_product.php');
		// pass valid process
	}else{
		$result = insert_product($cupcake_name, $cupcake_description, $category_id, $cupcake_price);
		$_SESSION['success'] = 'Your product has been created!';
		header('location: ../view/home.php');
	}

	
?>