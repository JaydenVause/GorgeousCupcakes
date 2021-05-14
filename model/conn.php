<?php 
// try to connect to database
try{
	$username = 'root';
	$password = '';
	$host = 'localhost';
	$database = 'gorgeous_cupcakes';
	$dbc = new PDO("mysql:host=$host;dbname=$database", $username, $password);
	$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	// else catch errors
}catch(PDOException $e){
	print "Connection Error :" . $e->getMessage() . "<br/>";
	die();
}

?>