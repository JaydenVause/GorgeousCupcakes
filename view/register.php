<?php

		// *** NEED TO WRITE HANDLER TO ENSURE USER IS LOGGED OUT *** //
		session_start();
		$title = "Register"; 
		require_once 'header.php'; 	
		require_once '../model/conn.php';
		require_once '../model/functions.php';
		require_once 'sidebar.php';
?>		
			
			<h2 style="background-color: #b84d91;">Register</h2>
			<div style="display: flex; justify-content: center;background-color: #911bcc; padding: 0; width: 100%">
				<form id="login-form" method="POST" action='<?php echo htmlspecialchars("../controller/registration_processor.php") ?>'>
					<label style=" color : white; font-weight: 900; text-align: left; display: flex;margin-top: 5px; margin-bottom: -10px" for="email-register-field">*Email Address: </label><br/>
					<input id="email-register-field"  placeholder="Email Address" class="login-text-input" type="email" name="email_address" required><br/>

					<label style=" color : white; font-weight: 900; text-align: left; display: flex;margin-top: 5px; margin-bottom: -10px" for="username-register-field">*Username: </label><br/>
					<input id="username-register-field"  placeholder="Username" class="login-text-input" type="text" name="username" required><br/>
					<label style=" color : white; font-weight: 900; text-align: left; display: flex;margin-top: 5px; margin-bottom: -10px" for="password-register-field">*Password: </label><br/>
					<input id="password-register-field"  placeholder="Password" class="login-text-input" type="password" name="password" required><br/>
					<label style=" color : white; font-weight: 900; text-align: left; display: flex;margin-top: 5px; margin-bottom: -10px" for="first-name-register-field">*First Name: </label><br/>
					<input id="first-name-register-field"  placeholder="First Name" class="login-text-input" type="text" name="first_name" required><br/>
					<label style=" color : white; font-weight: 900; text-align: left; display: flex;margin-top: 5px; margin-bottom: -10px" for="last-name-register-field">*Last Name: </label><br/>
					<input id="last-name-register-field" placeholder="Last Name"  class="login-text-input" type="text" name="last_name" required><br/>
					<?php include_once 'message_box.php'; ?>
					<input style="margin: 10px" id="login-form-button-lgn" type="submit" value="Register">
					<?php 
						if(!empty($_SESSION['regErr'])){
							foreach($_SESSION['regErr'] as $error){
							echo '<br/>' . $error;
							$_SESSION['regErr'] = [];
						}}

						
					?>
					<p style="color: white; font-weight: 900;">* Required Fields</p>
					<p>Have an account already? Please <strong><a style="color: white;" href="login.php">Sign In !</a></strong></p>
				</form>
			</div>
<?php require_once 'footer.php';	?>