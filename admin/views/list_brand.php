<?php
require_once "header.php";
?>
<div class="container">
	<!-- Breadcrumbs-->
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="?controller=admin&action=listAdmin">Admin</a>
		</li>
		<li class="breadcrumb-item active">Nhãn hiệu</li>
	</ol>
	<div class="clearfix"></div>
	<?php require "C:/xampp/htdocs/ltweb/system/core/notification.php";?>
	<!-- Example DataTables Card-->
	<div class="card mb-3">
		<div class="card-header">
			<i class="fa fa-table"></i> Nhãn hiệu
			<div class="pull-right">
				<a href="?controller=brand&action=add" class="btn btn-primary">Thêm</a>
			</div>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-hover" id="dataTable" cellspacing="0">
					<thead>
						<tr>
							<th>STT</th>
							<th>Tên</th>
							<th>Mô tả</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php  $stt=1; foreach ($listBrand as $row): ?>
						<tr>
							<td><?php echo $stt?></td>
							<td><?php echo $row['name'] ?></td>
							<td><?php echo $row['description'] ?></td>
							<td>
								<a href="?controller=brand&action=edit&id=<?php echo $row['id']?>" class="btn btn-success"><i class="fa fa-edit"></i>Sửa</a>
								<a href="?controller=brand&action=delete&id=<?php echo $row['id']?>" class="btn btn-danger"><i class="fa fa-times"></i>Xóa</a>
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