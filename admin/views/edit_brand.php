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
			<a href="?controller=brand&action=listBrand">Nhãn hiệu</a>
		</li>
		<li class="breadcrumb-item active">Sửa Nhãn hiệu</li>
	</ol>
	<!-- Example DataTables Card-->
	<div class="card mb-3">
		<div class="card-header">
			<i class="fa fa-edit"></i>Sửa Nhãn hiệu
		</div>		
	</div>
	<?php require "C:/xampp/htdocs/ltweb/system/core/notification.php";?>
	<form class="col-md-4" action="?controller=brand&action=edit&id=<?php echo $editBrand['id']; ?>" method="POST">
		<div class="form-group">
			<label>Tên danh mục</label>
			<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục" name="name" value='<?php echo $editBrand['name'];?>'>
			<?php if(isset($error['name'])):?>
				<p class="text-danger"><?php echo $error['name']?></p>
			<?php endif ?>
		</div>
		<div class="form-group">
			<label for="exampleInputPassword1">Mô tả</label>
			<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Mô tả" name="description" value="<?php echo $editBrand['description'];?>">
		</div>
		<button type="submit" class="btn btn-success" name="btnEdit">Lưu</button>
	</form>
</div>
<?php
require_once "footer.php";
?>