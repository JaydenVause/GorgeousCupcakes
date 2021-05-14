<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../assets/css/styles.css">
	<title>Gorgeous Cupcakes | <?php echo $title; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Akaya+Telivigala&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/fdd33aa54b.js" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
	<script src="../assets/js/script.js"></script>
	<link rel="icon" href="https://img.icons8.com/plasticine/452/cupcake.png">
</head>
<body>
		<header>
			<h1>Gorgeous Cupcakes</h1>
			<div id="hamburger-container" onclick="menuShowHide()">
				<div id="hamburger-menu">
					<div class="hamburger-menu-bar"></div>
					<div class="hamburger-menu-bar"></div>
					<div class="hamburger-menu-bar"></div>
				</div>
			</div>
			<nav id="desktop-nav-menu">
				<a href="home.php" class="desktop-nav-text">Home</a>
				<?php if(!isset($_SESSION['user'])){ ?>
					<a class="desktop-nav-text" href="login.php">Login</a>
					<a class="desktop-nav-text" href="register.php">Register</a>
				<?php }else{ ?>
					<a class="desktop-nav-text" href="new_product.php">New Product</a>
					<a class="desktop-nav-text" href="../controller/logout.php" >Logout</a>
				<?php ;}?>
			</nav>
			
		</header>
		<nav id="popout-menu-mobile">
				<a href="home.php" class="pop-menu-nav-text">Home</a>
				<?php if(!isset($_SESSION['user'])){ ?>
					<a class="pop-menu-nav-text" href="login.php">Login</a>
					<a class="pop-menu-nav-text" href="register.php">Register</a>
				<?php }else{ ?>
					<a class="pop-menu-nav-text" href="new_product.php">New Product</a>
					<a class="pop-menu-nav-text" href="../controller/logout.php" >Logout</a>
				<?php ;}?>
		</nav>
		
		<main class="main" style="background-color: #ffb0fc;">
