<?php
require_once "header.php";
?>
<div class="container">
	<!-- Breadcrumbs-->
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="?controller=admin&action=listAdmin">Admin</a>
		</li>
		<li class="breadcrumb-item active">Danh sách thành viên</li>
	</ol>
	<div class="clearfix"></div>
	<?php require "C:/xampp/htdocs/ltweb/system/core/notification.php";?>
	<!-- Example DataTables Card-->
	<div class="card mb-3">
		<div class="card-header">
			<i class="fa fa-table"></i> Danh sách thành viên
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-hover" id="dataTable" cellspacing="0">
					<thead>
						<tr>
							<th>STT</th>
							<th>Tên</th>
							<th>Email</th>
							<th>Địa chỉ</th>
							<th>Số điện thoại</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php  $stt=1; foreach ($listUser as $row): ?>
						<tr>
							<td><?php echo$stt?></td>
							<td><?php echo $row['name'] ?></td>
							<td><?php echo $row['email'] ?></td>
							<td><?php echo $row['address'] ?></td>
							<td><?php echo $row['phone'] ?></td>
							<td>
								<a href="?controller=user&action=delete&id=<?php echo $row['id']?>" class="btn btn-danger"><i class="fa fa-times"></i>Xóa</a>
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
