<?php
	echo "<div class='products-box' style='display: flex; flex-wrap: wrap;'>";
							foreach($result as $row) {
								echo '<div class="product-container">';
								echo "<h3>" . $row['cupcake_name'] . "</h3>";
								echo '<br/>' ;
								echo '<p class="description">'.$row['cupcake_description'].'</p>';
								echo '<br/>' ;
								echo '<p>$'. number_format($row['cupcake_price'],2) .'</p>';
								echo '<br/>' ;
								echo '<div style="text-align: center;">';
								if((is_null($row['img'])) || (empty($row['img']))){
									echo "<img alt='product_image' src='../assets/img/default-cupcake.jpg' style='width:200px; margin-top: 20px; border-radius: 5px;'>";
									echo '<br/>';
								}else{
									echo "working";
								}
								echo '<p style="width: 100%; background-color: #144cf5; font-weight: 900;padding-top: 5px;padding-bottom:5px; border-radius: 5px;"><a href="update_product.php?cupcake_id='.$row['cupcake_id'].'" style="color: white;"><i class="far fa-edit" style="padding-right : 5px;"></i>Update</a> | <a href="../controller/delete_product_processor.php?cupcake_id='.$row['cupcake_id'].'" style="color: white;"><i class="fas fa-trash" style="padding-right: 5px;"></i>Delete</a></p>';
								echo '</div>';
								echo '</div>';

							} 

							echo "</div>";
	?>