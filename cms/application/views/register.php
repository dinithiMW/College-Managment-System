

<?php include("inc/header.php"); ?>
<br><br>
<div class="container">
	<?php echo form_open("welcome/adminSignup", ['class' => 'form-horizontal']); ?>
	<?php if($msg = $this->session->flashdata('message')); { ?>
	
     
     <div class="row">
     	<div class="col-md-6">
     		<div class="alert alert-dismissible alert-success"><?php echo $msg;?></div>
     	</div>
     </div>
 <?php } ?>

	<h3>ADMIN REGISTRATION</h3>
	<hr>
	<div class="container">
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label class="col-md-3 control-label"><b>Username:</b></label>
				<div class="col-md-9">
					<?php echo form_input(['name' => 'username', 'class'=>'form-control', 'placeholder' => 'Username','value'=>set_value('username')]); ?>
				</div>
			</div>
		</div>
	</div>
		<div class="col-md-6">
			<?php echo form_error('username','<div class="text-danger">', '</div>' );?>
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

		<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label class="col-md-3 control-label"><b>Role:</b></label>
				<select class="col-md-9" name="role_id">
					
					<option value="">Select</option>
					<?php if(count($roles)); { ?>
						<?php foreach ($roles as $role ); { ?>
							<option value=<?php echo $role->role_id?> > <?php echo $role->rolename?></option>
						<?php } ?>
					<?php } ?>		
				</select>
			</div>
		</div>
	</div>
		<div class="col-md-6">
			<?php echo form_error('role_id','<div class="text-danger">', '</div>' );?>
		</div>


		<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label class="col-md-3 control-label"><b>Password:</b></label>
				<div class="col-md-9">
					<?php echo form_password(['name' => 'password', 'class'=>'form-control', 'placeholder' => 'Password']); ?>
				</div>
			</div>
		</div>
	</div>
		<div class="col-md-6">
			<?php echo form_error('password','<div class="text-danger">', '</div>' );?>
		</div>


		<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label class="col-md-3 control-label"><b>Confirm_Password:</b></label>
				<div class="col-md-12">
					<?php echo form_password(['name' => 'confpwd', 'class'=>'form-control', 'placeholder' => 'Confirm Password']); ?>
				</div>
			</div>
		</div>
	</div>
		<div class="col-md-6">
			<?php echo form_error('confpwd','<div class="text-danger">', '</div>' );?>
		</div>

		<button type="submit" class="btn btn-primary">REGISTER HERE</button>
		<?php echo anchor("welcome", "BACK", ['class'=>'btn btn-success']); ?>



	</div>
	<?php echo form_close(); ?>
</div>
</div>

<?php include("inc/footer.php"); ?>