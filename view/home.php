<?php
		session_start();
		require_once 'authorize.php';
		require_once '../model/conn.php';
		require_once '../model/functions.php';
		$title = "Home"; 
		require_once 'header.php'; 	
		
		
?>	
<?php require_once 'sidebar.php'; ?>
<?php include_once 'message_box.php' ?>
			<div id="product-container">
				<h2 style="background-color: #b84d91;">All Products</h2>
				<div>
					<?php
						$result = select_all_products();
						require_once 'product.php'; 
					?>
				</div>
			</div>
<?php require_once 'footer.php';	?>

