<?php
	session_start();
	require_once '../view/authorize.php';
	require_once '../model/conn.php';
	require_once '../model/functions.php';

	$cupcake_id = test_input($_GET['cupcake_id']);
	$is_found = select_product($cupcake_id);
	// authenticate ensure it is a valid product; else set error
	if(!empty($cupcake_id)){
		if($is_found){
			$result = delete_product($cupcake_id);
			$_SESSION['success'] = 'Product has been deleted!';
		}
	}else{
		$_SESSION['error'] = "Error: item not found.";
	}

	// redirect to home page
	
	header('location: ../view/home.php');
?>