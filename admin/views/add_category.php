<?php
require_once "header.php";
?>
<div class="container">
	<!-- Breadcrumbs-->
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="?controller=admin&action=listAdmin">Admin</a>
		</li>
		<li class="breadcrumb-item">
			<a href="?controller=category&action=listCategory">Danh mục</a>
		</li>
		<li class="breadcrumb-item active">Thêm mới danh mục</li>
	</ol>
	<!-- Example DataTables Card-->
	<div class="card mb-3">
		<div class="card-header">
			<i class="fa fa-plus-circle"></i>Thêm danh mục
		</div>		
	</div>
	<?php require "C:/xampp/htdocs/ltweb/system/core/notification.php";?>
	<form class="col-md-4" action="?controller=category&action=add" method="POST">
		<div class="form-group">
			<label>Tên danh mục</label>
			<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục" name="name">
			<?php if(isset($error['name'])):?>
				<p class="text-danger"><?php echo $error['name']?></p>
			<?php endif ?>
		</div>
		<div class="form-group">
			<label for="exampleInputPassword1">Mô tả</label>
			<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Mô tả" name="description" value='<?php if(isset($data['description'])) echo $data['description'];?>'> 
		</div>
		<button type="submit" class="btn btn-success" name="btnAdd">Thêm</button>
	</form>
</div>
<?php
require_once "footer.php";
?>