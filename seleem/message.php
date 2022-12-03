<?php  

	if (isset($_SESSION['error'])) {
				  echo ' 	<div class="alert alert-danger">
				  				<strong>'.$_SESSION['error'].'</strong>
				  			</div>';
				  			unset($_SESSION['error']);
				   }   
				   if (isset($_SESSION['success'])) {
				  echo ' 	<div class="alert alert-success">
				  				<strong>'.$_SESSION['success'].'</strong>
				  			</div>';
				  			unset($_SESSION['success']);
				   } 
  ?>