<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>College Managment System</title>
     
     








<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<style type="text/css">
	.buttons{
		color: #2196f3;
		border: 1px solid #cabdbd;
		border-radius:5px;
		padding:2px 10px 2px 10px;
	}
</style>
	
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
	<div class="container-fluid">
		<div class="navbar-header col-lg-10">
			<a href="" class="navbar-brand" style="color: #fff;">COLLEGE MANAGEMENT SYSTEM</a>
		</div>
		<div class="col-lg-2" style="margin-top: 15px;" id="bs-example-navbar-collapse-2";>
			<div class="dropdown">
				
				<button type="button" class="btn btn-primary dropdown-toggle" role="button" data-toggle="dropdown">Settings
					<span class="caret"></span></button>
				

				<ul class="dropdown-menu">
					<?php 
					$user_id = $this->session->userdata('user_id');
					 ?>
					 <?php 
                        if($user_id == '1' ):
					  ?>
					<li><?php echo anchor("admin/dashboard",'Dashboard '); ?></li>
					<li><?php echo anchor("admin/coadmins",'View Co Admins'); ?></li>
					<li><?php echo anchor("welcome/logout",'Logout '); ?></li>
					<?php else: ?>
					<li><?php echo anchor("welcome/logout",'Logout '); ?></li>
				<?php endif; ?>
				</ul>
			</div>
		</div>
	</div>
</nav>

