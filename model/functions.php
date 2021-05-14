<?php


// return all products of database
function select_all_products(){
	global $dbc;
	$sql = "SELECT * FROM cupcakes";
	$statement = $dbc->prepare($sql);
	$statement->execute();
	$result = $statement->fetchAll();
	$statement->closeCursor();
	return $result;
}

// selects product based on id
function select_product($cupcake_id){
	global $dbc;
	$sql = "SELECT cupcakes.`cupcake_id`, cupcakes.`cupcake_name`, cupcakes.`cupcake_description`, categories.`category_id`, categories.category_name, cupcakes.`cupcake_price`, cupcakes.`img` FROM `cupcakes` LEFT JOIN categories ON cupcakes.category_id=categories.category_id WHERE cupcakes.`cupcake_id` = :cupcake_id LIMIT 1";
	$statement = $dbc->prepare($sql);
	$statement->bindValue(":cupcake_id", $cupcake_id);
	$statement->execute();
	$result = $statement->fetch();
	$statement->closeCursor();
	return $result;
}

// insert product to database
function insert_product($cupcake_name, $cupcake_description, $category_id, $cupcake_price){
	global $dbc;
	$sql = "INSERT INTO cupcakes (cupcake_name, cupcake_description, category_id, cupcake_price) VALUES (:cupcake_name, :cupcake_description, :category_id, :cupcake_price)";
	$statement=$dbc->prepare($sql);
	$statement->bindValue(":cupcake_name", $cupcake_name);
	$statement->bindValue(":cupcake_description", $cupcake_description);
	$statement->bindValue(":category_id", $category_id);
	$statement->bindValue(":cupcake_price", $cupcake_price);
	$result = $statement->execute();
	$statement->closeCursor();
	return $result; 
}
// delete single product
function delete_product($cupcake_id){
	global $dbc;
	$sql = "DELETE FROM cupcakes WHERE cupcake_id = :cupcake_id";
	$statement = $dbc->prepare($sql);
	$statement->bindValue(':cupcake_id', $cupcake_id);
	$result = $statement->execute();
	$statement->closeCursor();
	return $result;
}

// return products based on category id

function select_products_cat($category_id){
	global $dbc;
	$sql = "SELECT * FROM cupcakes WHERE category_id = :category_id";
	$statement = $dbc->prepare($sql);
	$statement->bindValue(':category_id', $category_id);
	$statement->execute();
	$result = $statement->fetchAll();
	$statement->closeCursor();
	return $result;
}

// select all categories
function select_categories(){
	global $dbc;
	$sql = "SELECT category_name, category_id FROM categories";
	$statement = $dbc->prepare($sql);
	$statement->execute();
	$result = $statement->fetchAll();
	$statement->closeCursor();
	return $result;
}

// function to retrieve salt
function retrieve_salt($username){
	global $dbc ; 
	$sql = "SELECT * FROM users WHERE username = :username";
	$statement = $dbc->prepare($sql);
	$statement->bindValue(':username', $username);
	$statement->execute();
	$result = $statement->fetch();
	$statement->closeCursor();
	return $result;
}

// log user into website

function login($username, $password){
	global $dbc ;
	$sql = "SELECT * FROM users WHERE username = :username AND password = :password " ;
	$statement = $dbc->prepare($sql);
	$statement->bindValue(':username', $username);
	$statement->bindValue(':password', $password);
	$statement->execute();
	$result = $statement->fetchAll();
	$statement->closeCursor();
	$count = $statement->rowCount();
	return $count;
}

// retrieve user from database
function user_retrieve($username, $password){
	global $dbc;
	$sql = "SELECT user_id FROM users WHERE username = :username AND password = :password";
	$statement = $dbc->prepare($sql);
	$statement->bindValue(':username', $username);
	$statement->bindValue(':password', $password);
	$statement->execute();
	$result = $statement->fetchAll();
	$statement->closeCursor();
	return $result;
}

// get categories for dropdown menu

function get_category_dropdown(){
	global $dbc;
	$sql = 'SELECT * FROM categories ORDER BY category_id';
	$statement = $dbc->prepare($sql);
	$statement->execute();
	$result = $statement->fetchAll();
	$statement->closeCursor();
	return $result;
}

// update a products details
function update_product_details($cupcake_id ,$cupcake_name, $cupcake_description, $category_id, $cupcake_price){
	global $dbc;
	$sql = "UPDATE cupcakes SET `cupcake_name` = :cupcake_name, `cupcake_description` = :cupcake_description, `category_id` = :category_id, `cupcake_price` = :cupcake_price WHERE `cupcake_id` = :cupcake_id ";
	$statement = $dbc->prepare($sql);
	$statement->bindValue(':cupcake_id', $cupcake_id);
	$statement->bindValue(':cupcake_name', $cupcake_name);
	$statement->bindValue(':cupcake_description', $cupcake_description);
	$statement->bindValue(':category_id', $category_id);
	$statement->bindValue(':cupcake_price', $cupcake_price);
	$result = $statement->execute();
	$statement->closeCursor();
	return $result;
}

// register new user
function register_user($username, $password, $salt, $email_address, $first_name, $last_name){
		global $dbc;
		$sql = "INSERT INTO users (username, password, salt, email, first_name, last_name) VALUES (:username, :password, :salt, :email_address, :first_name, :last_name)";
		$statement = $dbc->prepare($sql);
		$statement->bindValue(':username', $username);
		$statement->bindValue(':password', $password);
		$statement->bindValue(':salt', $salt);
		$statement->bindValue(':email_address', $email_address);
		$statement->bindValue(':first_name', $first_name);
		$statement->bindValue(':last_name', $last_name);
		$result = $statement->execute();
		$statement->closeCursor();
		return $result;
	}


// rinse values
	function test_input($data){
		$data = trim($data);
		$data = stripcslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
?>