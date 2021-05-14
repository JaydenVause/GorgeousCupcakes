<?php 
						if(isset($_SESSION['error'])){
							echo '<div class="error-box"> <p class="error-message">' . $_SESSION['error'] . '</p> </div>';
							unset($_SESSION['error']);
						}elseif (isset($_SESSION['success'])){
							echo '<div class="success-box"> <p class="success-message">' . $_SESSION['success'] . '</p> </div>';
							unset($_SESSION['success']);
						}
?>