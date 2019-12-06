

<?php include("inc/header.php"); ?>
<br><br>
<div class="jumbotron">
	<h3 class="display-3" style="text-align: center;"><b>ADMIN & CO ADMIN LOGIN</b></h3>
	<hr>
	<div class="my-4">
		<div class="row">

			
		

		<?php 
		if('rolename'=='Admin') {
             

				 
			
			  echo anchor("welcome/adminLogin", "ADMIN LOGIN", ['class'=>'btn btn-primary']); 
			
		   
		    

		

		}
		else{
		         echo anchor("welcome/adminRegister", "ADMIN REGISTER", ['class'=>'btn btn-primary']); 
				 echo anchor("welcome/login", "ADMIN LOGIN", ['class'=>'btn btn-primary']); 
			
	} 
	?>
	</div>
</div>

<?php include("inc/footer.php"); ?>  

		