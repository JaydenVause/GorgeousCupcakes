<?php
		session_start();
		require_once 'authorize.php';
		require_once '../model/conn.php';
		require_once '../model/functions.php';
		$category_id = empty($_GET['category_id']) ? 0 : $_GET['category_id'] ;
		$categoryName = empty($_GET['category_name']) ? "Gorgeous Cupcakes" : $_GET['category_name'] ;
		$title = $categoryName;
		require_once 'header.php';	
		require_once 'sidebar.php';

?>
			<div id="product_container">
				<h2 style="background-color: #b84d91;"><?php echo $title ;?></h2>
				<div>
					<?php
						$result = select_products_cat($category_id);
						require_once 'product.php'; 
					?> 

				</div>
			</div>
			
<?php require_once 'footer.php'; ?>