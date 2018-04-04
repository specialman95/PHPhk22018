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
			<a href="?controller=product&action=listProduct">Sản phẩm</a>
		</li>
		<li class="breadcrumb-item active">Sửa sản phẩm</li>
	</ol>
	<!-- Example DataTables Card-->
	<div class="card mb-3">
		<div class="card-header">
			<i class="fa fa-edit"></i>Sửa sản phẩm
		</div>		
	</div>
	<?php require "C:/xampp/htdocs/ltweb/system/core/notification.php";?>
	<form class="col-md-6" action="?controller=product&action=edit&id=<?php echo $editProduct['id']?>" method="POST">
		<div class="form-group">
			<label>Tên sản phẩm</label>
			<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Tên sản phẩm" name="name" value='<?php echo $editProduct['name']?>'>
			<?php if(isset($error['name'])):?>
				<p class="text-danger"><?php echo $error['name']?></p>
			<?php endif ?>
		</div><!--Tên SP -->
		<div class="form-group">
			<label>Danh mục</label>
			<select class="form-control" name="cate_id">
				<option value="">Chọn danh mục sản phẩm</option>
				<?php foreach ($categories as $item) {
					if($editProduct['cate_id'] == $item['id'])
						echo '<option value='.$item['id'].' selected>'.$item['name'].'</option>';
					else
						echo '<option value='.$item['id'].'>'.$item['name'].'</option>';
				}
				?>
			</select>
			<?php if(isset($error['cate_id'])):?>
				<p class="text-danger"><?php echo $error['cate_id']?></p>
			<?php endif ?>
		</div><!--Danh mục -->
		<div class="form-group">
			<label>Nhãn hiệu</label>
			<select class="form-control" name="brand_id">
				<option value="">Chọn nhãn hiệu sản phẩm</option>
				<?php foreach ($brands as $item) {
					if($editProduct['brand_id'] == $item['id'])
						echo '<option value='.$item['id'].' selected>'.$item['name'].'</option>';
					else
						echo '<option value='.$item['id'].'>'.$item['name'].'</option>';
				}
				?>
			</select>
			<?php if(isset($error['brand_id'])):?>
				<p class="text-danger"><?php echo $error['brand_id']?></p>
			<?php endif ?>
		</div><!--Nhãn hiệu-->
		<div class="row">
			<div class="form-group col-md-4">
				<label>Đơn giá</label>
				<input type="number" class="form-control" id="exampleInputEmail1" placeholder="Đơn giá" name="price" value='<?php echo $editProduct['price']?>''>
				<?php if(isset($error['price'])):?>
					<p class="text-danger"><?php echo $error['price']?></p>
				<?php endif ?>
			</div><!--Đơn giá -->
			<div class="form-group col-md-4">
				<label>Số lượng</label>
				<input type="number" class="form-control" id="exampleInputEmail1" placeholder="Số lượng" name="quantity" value='<?php echo $editProduct['quantity']?>''>
				<?php if(isset($error['quantity'])):?>
					<p class="text-danger"><?php echo $error['quantity']?></p>
				<?php endif ?>
			</div><!--Số lượng -->
			<div class="form-group col-md-4">
				<label>Sale</label>
				<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Sale" name="discount" value='<?php echo $editProduct['discount']?>'>	
			</div><!--Sale -->
		</div>
		<div class="form-group">
			<label>Hình ảnh</label><br>
			<div class="form-control">
				<img src="../upload/<?php echo $editProduct['image']?>" width="80px" height="80px">
				<input type="file" name="image">
			</div>
		</div><!--Hình ảnh -->
		<div class="form-group">
			<label for="exampleInputEmail1">Mô tả</label>
			<textarea class="ckeditor" name="description" cols="80" rows="10" id="description"><?php echo $editProduct['description'];?></textarea>
			<script>    CKEDITOR.replace( 'description' );</script>
		</div><!--Mô tả -->
		<button type="submit" class="btn btn-success" name="btnEdit">Lưu</button>
	</form>
</div>
<?php
require_once "footer.php";
?>