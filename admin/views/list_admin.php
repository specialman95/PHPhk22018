<?php
require_once "views/header.php";
?>
<head>
	<link rel="stylesheet" type="text/css" href="/../ltweb/public/css/style.css">
</head>
<!-- Breadcrumbs-->
<div class="container">
<ol class="breadcrumb">
	<li class="breadcrumb-item">
		<a href="#">Admin</a>
	</li>
</ol>
<?php foreach ($listAdmin as $item): ?>
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-sm-6">
				<div class="card hovercard">
					<div class="cardheader">
					</div>
					<div class="avatar">
						<img alt="" src="../upload/<?php echo $item['image']?>">
					</div>
					<div class="info">
						<div class="title">
							<a target="_blank" href="#"><?php echo $item['name']?></a>
						</div>
						<p>Email: <?php echo $item['email']?></p>
					</div>
					<div class="bottom">
						<a class="btn btn-primary btn-twitter btn-sm" href="#">
							<i class="fa fa-twitter"></i>
						</a>
						<a class="btn btn-danger btn-sm" rel="publisher"
						href="#">
						<i class="fa fa-google-plus"></i>
					</a>							
					<a class="btn btn-primary btn-sm" rel=""
					href="<?php echo $item['fb']?>" target="_blank">
					<i class="fa fa-facebook"></i>
				</a>		
			</div>
		</div>
	</div>
</div>
</div>
<?php endforeach ?>
</div>

<?php
require_once "views/footer.php";
?>