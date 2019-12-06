

<?php include("inc/header.php"); ?>
<br><br>
<div class="container">
	<?php echo form_open("admin/createCollege", ['class' => 'form-horizontal']); ?>
	<?php if($msg = $this->session->flashdata('message')); { ?>
	
     
     <div class="row">
     	<div class="col-md-6">
     		<div class="alert alert-dismissible alert-success"><?php echo $msg;?></div>
     	</div>
     </div>
 <?php } ?>

	<h3>AD COLLEGE</h3>
	<hr>
	<div class="container">
	

    <div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label class="col-md-3 control-label"><b>College_Name:</b></label>
				<div class="col-md-9">
					<?php echo form_input(['name' => 'collegename', 'class'=>'form-control', 'placeholder' => 'College Name','value'=>set_value('collegename')]); ?>
				</div>
			</div>
		</div>
		</div>
		<div class="col-md-6">
			<?php echo form_error('collegename','<div class="text-danger">', '</div>' );?>
		</div>


		

		

		<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label class="col-md-3 control-label"><b>Branch:</b></label>
				<div class="col-md-9">
					<?php echo form_input(['name' => 'branch', 'class'=>'form-control', 'placeholder' => 'Branch']); ?>
				</div>
			</div>
		</div>
		</div> 
		<div class="col-md-6">
			<?php echo form_error('branch','<div class="text-danger">', '</div>' );?>
		</div>


		

		<button type="submit" class="btn btn-primary">ADD HERE</button>
		<?php echo anchor("welcome", "BACK", ['class'=>'btn btn-success']); ?>



	</div>
	<?php echo form_close(); ?>
</div>
</div>

<?php include("inc/footer.php"); ?>