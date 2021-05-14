<?php
		session_start();
		$title = "Login"; 
		require_once 'header.php'; 	
		require_once '../model/conn.php';
		require_once '../model/functions.php';
		require_once 'sidebar.php';
		
?>		
			
			<h2 style="background-color: #b84d91;">Login</h2>

			<div style="display: flex; justify-content: center;background-color: #911bcc; padding: 0; width: 100%">
				<form id="login-form" method="POST" action="../controller/authentication.php">
					<label style=" color : white; font-weight: 900; text-align: left; display: flex;margin-top: 5px; margin-bottom: -10px" for="username-login">Username: </label><br/>
					<input id="username-login" placeholder="Username" class="login-text-input" type="text" name="username"  required><br/>
					<label style=" color : white; font-weight: 900; text-align: left; display: flex;margin-top: 5px; margin-bottom: -10px" for="password-login">Password: </label><br/>
					<input id="password-login" placeholder="Password" class="login-text-input" type="password" name="password" required><br/>
					<?php include_once 'message_box.php' ?>
					<input style="margin: 10px" id="login-form-button-lgn" type="submit" value="Login">
					<p>Dont have an account yet? Please <a style="color: white;" href="register.php"><strong>Sign Up !</strong></a></p>
					<?php include_once 'message_box.php'; ?>
				</form>
			</div>
<?php require_once 'footer.php';	?>