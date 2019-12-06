

<?php include("inc/header.php"); ?>
<br><br>
<div class="container">
	<?php echo form_open("admin/createStudent", ['class' => 'form-horizontal']); ?>
	<?php if($msg = $this->session->flashdata('message')); { ?>
	
     
     <div class="row">
     	<div class="col-md-6">
     		<div class="alert alert-dismissible alert-success"><?php echo $msg;?></div>
     	</div>
     </div>
 <?php } ?>

	<h3>ADD STUDENT</h3>
	<hr>
	
	<div class="container">
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label class="col-md-3 control-label"><b>Student_name:</b></label>
				<div class="col-md-9">
					<?php echo form_input(['name' => 'studentname', 'class'=>'form-control', 'placeholder' => 'student name','value'=>set_value('studentname')]); ?>
				</div>
			</div>
		</div>
	</div>
		<div class="col-md-6">
			<?php echo form_error('studentname','<div class="text-danger">', '</div>' );?>
		</div>


	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label class="col-md-3 control-label"><b>College_Name:</b></label>
				<select class="col-md-9" name="college_id">
					
					<option value="">Select</option>
					<?php if(count($colleges)); { ?>
						<?php foreach ($colleges as $college ); { ?>
							<option value=<?php echo $college->college_id?> > <?php echo $college->collegename?></option>
						<?php } ?>
					<?php } ?>		
				</select>
			</div>
		</div>
	</div>
		<div class="col-md-6">
			<?php echo form_error('college_id','<div class="text-danger">', '</div>' );?>
		</div>	

    <div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label class="col-md-3 control-label"><b>Email:</b></label>
				<div class="col-md-9">
					<?php echo form_input(['name' => 'email', 'class'=>'form-control', 'placeholder' => 'Email','value'=>set_value('email')]); ?>
				</div>
			</div>
		</div>
	</div>
		<div class="col-md-6">
			<?php echo form_error('email','<div class="text-danger">', '</div>' );?>
		</div>


		<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label class="col-md-3 control-label"><b>Gender:</b></label>
				<select class="col-md-9" name="gender">
					<option value="">Select</option>
					<option value="Male">Male</option>
					<option value="Female">Female</option>
				</select>
			</div>
		</div>
	</div>
		<div class="col-md-6">
			<?php echo form_error('gender','<div class="text-danger">', '</div>' );?>
		</div>
   <div class="container">
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label class="col-md-3 control-label"><b>Course:</b></label>
				<div class="col-md-9">
					<?php echo form_input(['name' => 'course', 'class'=>'form-control', 'placeholder' => 'course','value'=>set_value('course')]); ?>
				</div>
			</div>
		</div>
	</div>
		<div class="col-md-6">
			<?php echo form_error('course','<div class="text-danger">', '</div>' );?>
		</div>
		


		
		

		<button type="submit" class="btn btn-primary">ADD HERE</button>
		<?php echo anchor("admin/viewStudents", "BACK", ['class'=>'btn btn-success']); ?>



	</div>
	<?php echo form_close(); ?>
</div>
</div>

<?php include("inc/footer.php"); ?>