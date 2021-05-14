<?php
    //start session management
    session_start();
    if (isset($_SESSION['user'])){
    	session_destroy();
    	$_SESSION['success'] = 'Goodbye! See you soon!';	
    }else{
    	$_SESSION['error'] = 'You need to login to access this.';
    }
    //destroy the user session
    
    //redirect to the login page after logout
    header("location:../view/login.php"); 
?>