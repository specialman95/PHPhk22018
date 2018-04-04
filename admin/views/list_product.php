<?php
require_once "header.php";
?>
<div class="container">
	<!-- Breadcrumbs-->
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="?controller=admin&action=listAdmin">Admin</a>
		</li>
		<li class="breadcrumb-item active">Sản phẩm</li>
	</ol>
	<div class="clearfix"></div>
	<?php require "C:/xampp/htdocs/ltweb/system/core/notification.php";?>
	<!-- Example DataTables Card-->
	<div class="card mb-3">
		<div class="card-header">
			<i class="fa fa-table"></i> Sản phẩm
			<div class="pull-right">
				<a href="?controller=product&action=add" class="btn btn-primary">Thêm</a>
			</div>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" cellspacing="0">
					<thead>
						<tr>
							<th>STT</th>
							<th>Tên</th>
							<th>Danh mục</th>
							<th>Nhãn hiệu</th>
							<th>Đơn giá</th>
							<th>Số lượng</th>
							<th>Sale</th>
							<th>Hình ảnh</th>
							<th>Lượng bán</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php  $stt=1; foreach ($listProduct as $row): ?>
						<tr>
							<td><?php echo$stt?></td>
							<td><?php echo $row['name'] ?></td>
							<td><?php echo $row['cate_name'] ?></td>
							<td><?php echo $row['brand_name'] ?></td>
							<td><?php echo $row['price'] ?></td>
							<td><?php echo $row['quantity'] ?></td>
							<td><?php echo $row['discount'] ?></td>
							<td><img src="../upload/product/<?php echo $row['image']?>" width="80px" height="80px"></td>
							<td><?php echo $row['count_buy'] ?></td>
							<td>
								<a href="?controller=product&action=edit&id=<?php echo $row['id']?>" class="btn btn-success"><i class="fa fa-edit"></i>Sửa</a>
								<a href="?controller=product&action=delete&id=<?php echo $row['id']?>" class="btn btn-danger"><i class="fa fa-times"></i>Xóa</a>
							</td>
						</tr>
						<?php $stt++; endforeach ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<?php
require_once "footer.php";
?>
