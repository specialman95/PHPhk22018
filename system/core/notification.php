<?php if(isset($_SESSION['success'])): ?>
	<div class="alert alert-success alert-dismissible col-md-4" id="myAlert">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<strong>Success!</strong><?php echo $_SESSION['success']; unset($_SESSION['success'])?>
	</div>
<?php endif?>
<?php if(isset($_SESSION['noti'])): ?>
	<div class="alert alert-primary alert-dismissible col-md-4" id="myAlert">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<strong>!</strong><?php echo $_SESSION['noti']; unset($_SESSION['noti'])?>
	</div>
<?php endif?>
<?php if(isset($_SESSION['error'])): ?>
	<div class="alert alert-danger alert-dismissible col-sm-12" id="myAlert">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<strong>Error!</strong><?php echo $_SESSION['error']; unset($_SESSION['error'])?>
	</div>
<?php endif?>