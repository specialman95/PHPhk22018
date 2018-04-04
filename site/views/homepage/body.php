		  <!-- The container -->
		  <div id="container">
		  	<!-- The left -->
		  	<?php require_once 'left.php' ?>
		  	<!-- End left -->

		  	<!-- The content -->
		  	<div class='content'>
		  		<!-- lay slide -->
		  		<script src="royalslider/jquery.royalslider.min.js"></script>
		  		<link type="text/css" href="royalslider/royalslider.css" rel="stylesheet">
		  		<link type="text/css" href="royalslider/skins/minimal-white/rs-minimal-white.css" rel="stylesheet">


		  		<script type="text/javascript">
		  			(function($)
		  			{
		  				$(document).ready(function()
		  				{
		  					$("#HomeSlide").royalSlider({
		  						arrowsNav:true,
		  						loop:false,
		  						keyboardNavEnabled:true,
		  						controlsInside:false,
		  						imageScaleMode:"fill",
		  						arrowsNavAutoHide:false,
		  						autoScaleSlider:true,
			autoScaleSliderWidth:580,//chiều rộng slide
			autoScaleSliderHeight:205,//chiều cao slide
			controlNavigation:"bullets",
			thumbsFitInViewport:false,
			navigateByClick:true,
			startSlideId:0,
			autoPlay:{enabled:true, stopAtAction:false, pauseOnHover:true, delay:5000},
			transitionType:"move",
			slideshowEnabled:true,
			slideshowDelay:5000,
			slideshowPauseOnHover:true,
			slideshowAutoStart:true,
			globalCaption:false
		});
		  				});
		  			})(jQuery);
		  		</script>


		  		<style>
		  		#HomeSlide.royalSlider {
		  			width: 580px;
		  			height: 205px;
		  			overflow:hidden;
		  		}
		  	</style>

		  	<div id='slide'>
		  		<div id="img-slide" class="sliderContainer" style='width:580px'>
		  			<div id="HomeSlide" class="royalSlider rsMinW">
		  				<a href="http://dantri.com.vn/" target='_blank'><img src="../upload/slide/31.jpg" /> </a>
		  				<a href="http://dantri.com.vn/" target='_blank'><img src="../upload/slide/21.jpg" /> </a>
		  				<a href="http://dantri.com.vn/" target='_blank'><img src="../upload/slide/11.jpg" /> </a>
		  			</div>
		  		</div>
		  		<div class="clear"></div>
		  	</div>
		  	<div class="clear pb20"></div>




		  	<!-- lay san pham moi nhat -->
		  	<div class="box-center"><!-- The box-center product-->
		  		<div class="d-flex align-items-center tittle-box-center" style="padding-top:5px;">
		  			<h2>Danh sách các sản phẩm</h2>
		  		</div>
		  		<div class="box-content-center product d-flex flex-wrap"><!-- The box-content-center -->
		  			<?php foreach ($listProducts as $row ): ?>
		  				<?php $a = $row['discount'];
		  				$price_old = $row['price'];
		  				$price_new = $price_old - ($price_old * $a);
		  				?>
		  				<div class='product_item' style="height:auto">
		  					<h3>
		  						<a class="text-truncate d-inline-block" style="max-width:160px;" href="index.php?controller=product&action=detailProduct&id=<?php echo $row['id'];?>" title="Sản phẩm">
		  							<?php echo $row['name'] ?>	                     </a>
		  						</h3>
		  						<div class='product_img'>
		  							<a  href="index.php?controller=product&action=detailProduct&id=<?php echo $row['id'];?>" title="Sản phẩm">
		  								<img style="width:150px;height:85px;" src="../upload/product/<?php echo $row['image'] ?>" alt=''/>
		  							</a>
		  						</div>
		  						<?php if ($a == 0): ?>
		  							<p class='price'> <?php echo number_format($price_old); ?> đ </p>
		  						<?php else: ?>
		  							<p class='price'>
		  								<?php echo number_format($price_new) ?>đ
		  								<span class='price_old'> <?php echo number_format($price_old) ?> đ </span>
		  							</p>
		  						<?php endif ?>
		  						<center>
		  							<div class='raty' style='margin:10px 0px' id='9' data-score='4'></div>
		  						</center>
		  						<div class='action'>
		  							<p style='float:left;margin-left:10px'>Còn: <b> <?php echo $row['quantity'] ?> </b></p>
		  							<p style='float:left;margin-left:10px'>Lượt mua: <b> <?php echo $row['count_buy'] ?> </b></p>
										
									
										<a class='button' id='bambam1' href="#" title='Mua ngay' >Mua ngay</a>
										
		  							
		  							<div class='clear'></div>
		  						</div>
		  					</div>
		  				<?php endforeach ?>



		  				<div class='clear'></div>
		  			</div><!-- End box-content-center -->
		  		</div>	<!-- End box-center product-->
		  		<!-- lay san pham dang giam gia -->
		  		<div class="box-center"><!-- The box-center product-->
		  			<div class="d-flex align-items-center tittle-box-center">
		  				<h2 style="padding-top:5px;">Sản phẩm giảm giá</h2>
		  			</div>
		  			<div class="box-content-center product" ><!-- The box-content-center -->
		  				<?php foreach ($listProducts as $row): ?>
		  					<?php $a = $row['discount'];
		  					$price_old = $row['price'];
		  					$price_new = $price_old - ($price_old * $a);
		  					?>
		  					<?php if($a > 0): ?>
		  						<div class='product_item' style="height:auto;">
		  							<h3>
		  								<a class="text-truncate d-inline-block" style="max-width:160px;"  href="index.php?controller=product&action=detailProduct&id=<?php echo $row['id'];?>" title="Sản phẩm">
		  									<?php echo $row['name'] ?>                    </a>
		  								</h3>
		  								<div class='product_img'>
		  									<a href="index.php?controller=product&action=detailProduct&id=<?php echo $row['id'];?>" title="Sản phẩm">
		  										<img style="width:150px;height:85px;" src="../upload/product/<?php echo $row['image']?> " alt=''/>
		  									</a>
		  								</div>
		  								<p class='price'>
		  									<?php echo number_format($price_new) ?>đ
		  									<span class='price_old'> <?php echo number_format($price_old) ?> đ </span>
		  								</p>
		  								<center>
		  									<div class='raty' style='margin:10px 0px' id='8' data-score='3.4'></div>
		  								</center>
		  								<div class='action mt-4'>
		  									<p style='float:left;margin-left:10px'>Còn: <b> <?php echo $row['quantity'] ?> </b></p>
		  									<p style='float:left;margin-left:10px'>Lượt mua: <b> <?php echo $row['count_buy'] ?> </b></p>
		  									<a class='button' id='bambam2' href="them-vao-gio-8.html" title='Mua ngay'>Mua ngay</a>
		  									<div class='clear'></div>
		  								</div>
		  							</div>
		  						<?php endif ?>
		  					<?php endforeach ?>
		  					<div class='clear'></div>
		  				</div><!-- End box-content-center -->
		  			</div>	<!-- End box-center product-->
		  			<!-- lay san pham xem nhieu -->
		  			<div class="box-center"><!-- The box-center product-->
		  				<div class="d-flex align-items-center tittle-box-center" style="padding-top:5px;">
		  					<h2>Sản phẩm mua nhiều</h2>
		  				</div>
		  				<div class="box-content-center product" ><!-- The box-content-center -->
		  					<?php foreach ($listProducts as $row): ?>
		  						<?php
		  						$giamgia = $row['discount'];
		  						$l=$row['discount'];
		  						$count = $row['count_buy'];
		  						$price_new_watch = $row['price'];
		  						$price_old_watch = $price_new_watch - ($price_new_watch * $giamgia)
		  						?>
		  						<?php if($count > 0): ?>
		  							<div class='product_item' style="height:auto;">
		  								<h3>
		  									<a class="text-truncate d-inline-block" style="max-width:160px;"  href="index.php?controller=product&action=detailProduct&id=<?php echo $row['id'];?>" title="Sản phẩm">
		  										<?php echo $row['name'] ?>                    </a>
		  									</h3>
		  									<div class='product_img'>
		  										<a  href="index.php?controller=product&action=detailProduct&id=<?php echo $row['id'];?>" title="Sản phẩm">
		  											<img style="width:150px;height:85px;" src="../upload/product/<?php echo $row['image']?> " alt=''/>
		  										</a>
		  									</div>
		  									<?php if ($l == 0): ?>
		  										<p class='price'> <?php echo number_format($price_new_watch); ?> đ </p>
		  									<?php else: ?>
		  										<p class='price'>
		  											<?php echo number_format($price_old_watch) ?>đ
		  											<span class='price_old'> <?php echo number_format($price_new_watch) ?> đ </span>
		  										</p>
		  									<?php endif ?>
		  									<center>
		  										<div class='raty' style='margin:10px 0px' id='8' data-score='3.4'></div>
		  									</center>
		  									<div class='action mt-4'>
		  										<p style='float:left;margin-left:10px'>Còn: <b> <?php echo $row['quantity'] ?> </b></p>
		  										<p style='float:left;margin-left:10px'>Lượt mua: <b> <?php echo $row['count_buy'] ?> </b></p>
		  										<a class='button' id='bambam3' href="them-vao-gio-8.html" title='Mua ngay'>Mua ngay</a>
		  										<div class='clear'></div>
		  									</div>
		  								</div>
		  							<?php endif ?>
		  						<?php endforeach ?>
		  						<div class='clear'></div>
		  					</div><!-- End box-content-center -->
		  				</div>	<!-- End box-center product-->	    			   </div>
		  				<!-- End content -->

		  				<!-- The right -->
		  				<?php require_once 'right.php' ?>
		  				<!-- End Fanpage -->


		  			</div>
		  			<!-- End right -->
		  			<div class="clear"></div>

		  		</div>
		  		<!-- End container -->
		  		<center>
		  			<img src="images/bank.png" />
		  		</center>
