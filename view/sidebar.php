<aside id="sidebar" style="padding-left: 5px;">
			<h2>
					Categories
			</h2>
				<ul>
					<li style= "color: white;"><i class="fas fa-store" style="padding-right: 5px;"></i><a href="home.php">All Products</a></li>
					<?php
						$result = select_categories();						
						foreach($result as $row){
							echo '<li style= "color: white;">' .
							"<i  style='margin-right: 5px;' class='far fa-arrow-alt-circle-right'></i>".
							'<a href="category.php?category_id=' .
							$row['category_id'].'&'.'category_name='. str_replace(" ", "%20", $row['category_name']) .'">' . $row[0] .
							'</a>' .'</li>';
						}
					?>
					<li style= "color: white;"> <i class="fas fa-plus"></i> <a href="new_product.php">New Product</a></li>
				</ul>
			
</aside>