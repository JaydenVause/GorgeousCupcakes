 <?php
		session_start();
		$title = "New Product"; 
		require_once 'authorize.php';	
		require_once '../model/conn.php';
		require_once '../model/functions.php';
		require_once 'header.php'; 
		require_once 'sidebar.php';
		
?>	
			<div>
				
				<h2 style="background-color: #b84d91;">New Product</h2>
				<div style="">
					<div class="update-product-container">
						<div>
							<img alt="product-image" src='../assets/img/default-cupcake.jpg'>
						</div>
						<div style=" width: 300px;">	
								<form action="../controller/new_product_process.php" method="POST">
									<input type="hidden" name="cupcake_id" value="">
									<input type="hidden" name="category_id" value="">
									<label>Product Name:</label>
									<input placeholder="Cupcake Name" style=""  type="text" name="cupcake_name" value="">
									<label>Price:</label>
									<input placeholder="Cupcake Price" style=""  type="text" name="cupcake_price" value="">
									<label>Category:</label>
									<select name="category">
										<?php $result_dropdown = get_category_dropdown(); ?>
											<?php 
												
												foreach($result_dropdown as $row){
									
														echo "<option value=" . $row['category_id'] . ">" . $row['category_name'] . "</option>";
													
												}
											?>
										</select>
										<label>Description:</label>
										<textarea placeholder="Enter a Description" style="height: 150px; " name="cupcake_description"></textarea>
										<input type="submit" name="submit" value="save" style="margin-top: 10px;">

									</form>
					</div>
					</div>
					<?php include_once 'message_box.php' ?>
				</div>
			</div>
<?php require_once 'footer.php';	?>