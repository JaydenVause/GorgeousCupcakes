<?php
		session_start();
		$title = "Update Product"; 
		require_once 'header.php'; 	
		require_once 'authorize.php';
		require_once '../model/conn.php';
		require_once '../model/functions.php';
		require_once 'sidebar.php';
		$cupcake_id = $_GET['cupcake_id'];
		
?>	
			<div>
				<?php $result = select_product($cupcake_id); ?>
				<h2 style="background-color: #b84d91;">Update</h2>
				<div style="">
					<div class="update-product-container">
						<div>
							<img alt="product-image" src='../assets/img/default-cupcake.jpg'>
						</div>
						<div style=" width: 300px;">	
								<form action="../controller/product_update_process.php" method="POST">
									<input type="hidden" name="cupcake_id" value="<?php echo $result['cupcake_id']?>;">
									
									<label>Product Name:</label>
									<input  placeholder="Cupcake Name" style=""  type="text" name="cupcake_name" value="<?php echo $result['cupcake_name'] ;?>">
									<label>Price:</label>
									<input placeholder="Price"  style=""  type="text" name="cupcake_price" value="<?php echo $result['cupcake_price'] ;?>">
									<label>Category:</label>
									<select name="category_id">
										<?php $result_dropdown = get_category_dropdown(); ?>
											<option value="<?php echo $result['category_id'];?>">
												<?php echo $result['category_name'] ; ?>
											</option>
											<?php 
												$selected = $result['category_id'];
												
												foreach($result_dropdown as $row){
													if($selected != $row['category_id']){
														echo "<option value=" . $row['category_id'] . ">" . $row['category_name'] . "</option>";
													}
												}
											?>
										</select>
										<label>Description:</label>
										<textarea  placeholder="Cupcake Description" style="height: 150px; " name="cupcake_description"><?php echo $result['cupcake_description'];?></textarea>
										<input type="submit" name="submit" value="save" style="margin-top: 10px;">

									</form>
					</div>
					</div>
					<?php include_once 'message_box.php' ?>
				</div>
			</div>
<?php require_once 'footer.php';	?>