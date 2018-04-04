		  <!-- The container -->
		  <div id="container">
		      <!-- The left -->
			  <div class='left'>
			       <div class="box-left">
         <div class="title tittle-box-left">
			  <h2> Tìm kiếm theo giá </h2>
		</div>
		<div class="content-box" ><!-- The content-box -->
	           <form class="t-form form_action" method="post" style='padding:10px' action="index.php?controller=product&action=searchProduct" name="search" >

                  <div class="form-row">
						<label for="param_price_from" class="form-label" style='width:70px'>Giá từ:<span class="req">*</span></label>
						<div class="form-item"  style='width:90px'>
							<select  class="input" id="price_from" name="price_from" >
							     							           <option value="0"
							           							           >
							           0 đ
							           </option>
							     							           <option value="1000000"
							           							           >
							           1,000,000 đ
							           </option>
							     							           <option value="2000000"
							           							           >
							           2,000,000 đ
							           </option>
							     							           <option value="3000000"
							           							           >
							           3,000,000 đ
							           </option>
							     							           <option value="4000000"
							           							           >
							           4,000,000 đ
							           </option>
							     							           <option value="5000000"
							           							           >
							           5,000,000 đ
							           </option>
							     							           <option value="6000000"
							           							           >
							           6,000,000 đ
							           </option>
							     							           <option value="7000000"
							           							           >
							           7,000,000 đ
							           </option>
							     							           <option value="8000000"
							           							           >
							           8,000,000 đ
							           </option>
							     							           <option value="9000000"
							           							           >
							           9,000,000 đ
							           </option>
							     							           <option value="1000000000"
							           							           >
							           10,000,000 đ
							           </option>
							     							</select>
							<div class="clear"></div>
							<div class="error" id="price_from_error"></div>
						</div>
						<div class="clear"></div>
				  </div>
					<div class="form-row">
						<label for="param_price_from" class="form-label" style='width:70px'>Giá tới:<span class="req">*</span></label>
						<div class="form-item"  style='width:90px'>
							<select  class="input" id="price_to" name="price_to" >
							     							           <option value="1000000" >
							           1,000,000 đ</option>
							     							           <option value="2000000" >
							           2,000,000 đ</option>
							     							           <option value="3000000" >
							           3,000,000 đ</option>
							     							           <option value="4000000" >
							           4,000,000 đ</option>
							     							           <option value="5000000" >
							           5,000,000 đ</option>
							     							           <option value="6000000" >
							           6,000,000 đ</option>
							     							           <option value="7000000" >
							           7,000,000 đ</option>
							     							           <option value="8000000" >
							           8,000,000 đ</option>
							     							           <option value="9000000" >
							           9,000,000 đ</option>
							     							           <option value="10000000" >
							           10,000,000 đ</option>
							     							           <option value="11000000" >
							           11,000,000 đ</option>
							     							           <option value="12000000" >
							           12,000,000 đ</option>
							     							           <option value="13000000" >
							           13,000,000 đ</option>
							     							           <option value="14000000" >
							           14,000,000 đ</option>
							     							           <option value="15000000" >
							           15,000,000 đ</option>
							     							           <option value="16000000" >
							           16,000,000 đ</option>
							     							           <option value="17000000" >
							           17,000,000 đ</option>
							     							           <option value="18000000" >
							           18,000,000 đ</option>
							     							           <option value="19000000" >
							           19,000,000 đ</option>
							     							           <option value="20000000" >
							           20,000,000 đ</option>
							     							</select>
							<div class="clear"></div>
							<div class="error" id="price_from_error"></div>
						</div>
						<div class="clear"></div>
				  </div>
				  <div class="form-row">
						<label class="form-label">&nbsp;</label>
						<div class="form-item">
				           	<input type="submit" class="button"  name='search' value="Tìm kiềm" style='height:30px !important;line-height:30px !important;padding:0px 10px !important'>
						</div>
						<div class="clear"></div>
				   </div>
            </form>
	    </div><!-- End content-box -->
</div>


<div class="box-left">
 <div class="title tittle-box-left">
<h2> Danh mục sản phẩm </h2>
</div>
<div class="content-box"><!-- The content-box -->
    <ul class="catalog-sub ml-4">
      <?php foreach ($listCataloge as $row): ?>
                   <li>
                     <span><a href="index.php?controller=product&action=filter&id=<?php echo $row['id']?>" title="Tivi"> <?php echo $row['name']; ?> </a></span>
                          </li>
        <?php endforeach; ?>

  </ul>
</div><!-- End content-box -->
<div class="title tittle-box-left " style="margin-top:10px;">
<h2> Nhãn hàng</h2>
</div>
<div class="content-box"><!-- The content-box -->
    <ul class="catalog-sub  ml-4">
      <?php foreach ($listBrand as $row): ?>
                   <li>
                     <span><a href="index.php?controller=product&action=filter2&brand=<?php echo $row['id']?>" title="Tivi"> <?php echo $row['name']; ?> </a></span>

                          </li>
        <?php endforeach; ?>

                      </li>
                          </li>
  </ul>
</div>






</div>
			  </div>
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
		        <h2>Danh sách các sản phẩm </h2>
		      </div>
		      <div class="box-content-center product d-flex flex-wrap"><!-- The box-content-center -->
						<?php foreach ($listsearchall as $row ): ?>
						<?php 	$a = $row['discount'];
										$price_old = $row['price'];
										$price_new = $price_old - ($price_old * $a);
						?>
		                   <div class='product_item' style="height:auto">
                       <h3>
                         <a class="text-truncate d-inline-block" style="max-width:160px;"  href="index.php?controller=product&action=detailProduct&id=<?php echo $row['id'];?>" title="Sản phẩm">
                         <?php echo $row['name'] ?>	                     </a>
	                   </h3>
                       <div class='product_img'>
                             <a   href="index.php?controller=product&action=detailProduct&id=<?php echo $row['id'];?>" title="Sản phẩm">
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

	                       <a class='button ' id='bambam1' href="#" title='Mua ngay'>Mua ngay</a>
	                       <div class='clear'></div>
                       </div>
                   </div>
								 <?php endforeach ?>



		            <div class='clear'></div>
		      </div><!-- End box-content-center -->
</div>	<!-- End box-center product-->
</div>
			  <!-- End content -->

			  <!-- The right -->
			  <div class='right'>
			                  <!-- The Support -->
	     <div class="box-right">
                <div class="title tittle-box-right">
			        <h2> Hỗ trợ trực tuyến </h2>
			    </div>
			    <div class="content-box">
			         <!-- goi ra phuong thuc hien thi danh sach ho tro -->
			         <div class='support'>
                    <strong>Phạm Phú Quý Đôn </strong>
          <a rel="nofollow" href="ymsgr:sendIM?tuyenht90">
						<div class="">
								<img class="object-fit" style="width:100%"  src="../upload/admin.jpg">
						</div>
	      </a>

	      <p>
	         <img style="margin-bottom:-3px" src="images/phone.png"> 01695.029.800	      </p>
		  <p>
			<a rel="nofollow" href="mailto:hoangvantuyencnt@gmail.com">
			    <img style="margin-bottom:-3px" src="images/email.png"> Gmail: donezombie
		    </a>
		  </p>
		  <p>
		</div>			        </div>
          </div>
       <!-- End Support -->

         <!-- The news -->
	          <div class="box-right">
                <div class="title tittle-box-right">
			        <h2> Bài viết mới </h2>
			    </div>
			    <div class="content-box">
			       <ul class='news'>
			            			            <li>
			                <a href="news/view/4.html" title="Mỹ tăng cường không kích Iraq">
			                <img src="images/li.png">
			                Mỹ tăng cường không kích Iraq	                        </a>
	                     </li>
	                    			            <li>
			                <a href="news/view/3.html" title="Hà Nội: CSGT tìm người thân giúp cháu bé 8 tuổi đi lạc">
			                <img src="images/li.png">
			                Hà Nội: CSGT tìm người thân giúp cháu bé 8 tuổi đi lạc	                        </a>
	                     </li>
	                    			            <li>
			                <a href="news/view/2.html" title="Arsenal đồng ý bán Vermaelen cho Barcelona">
			                <img src="images/li.png">
			                Arsenal đồng ý bán Vermaelen cho Barcelona	                        </a>
	                     </li>
	                    			            <li>
			                <a href="news/view/1.html" title="Nhà lầu siêu xe hàng mã ế sưng, đồ chơi biển đảo hút khách">
			                <img src="images/li.png">
			                Nhà lầu siêu xe hàng mã ế sưng, đồ chơi biển đảo hút khách	                        </a>
	                     </li>
	                    	             </ul>
	    </div>
   </div>		<!-- End news -->

        <!-- The Ads -->
	       <div class="box-right">
                <div class="title tittle-box-right">
			        <h2> Quảng cáo </h2>
			    </div>
			    <div class="content-box">
			        <a href="">
					     <img  src="images/ads.png">
					</a>
			    </div>
		   </div>
		<!-- End Ads -->

		 <!-- The Fanpage -->
	       <div class="box-right">
                <div class="title tittle-box-right">
			        <h2> Fanpage </h2>
			    </div>
			    <div class="content-box">

			         <iframe src="http://www.facebook.com/plugins/likebox.php?href=https://www.facebook.com/facebook&amp;width=190&amp;height=300&amp;show_faces=true&amp;colorscheme=light&amp;stream=false&amp;border_color&amp;header=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:190px; height:300px;" allowTransparency="true">
	                 </iframe>

			    </div>
		   </div>
		<!-- End Fanpage -->

		 <!-- The Fanpage -->
	       <div class="box-right">
                <div class="title tittle-box-right">
			        <h2> Thống kê truy cập </h2>
			    </div>
			    <div class="content-box">
			        <center>
			        <!-- Histats.com  START  (standard)-->
					<script type="text/javascript">document.write(unescape("%3Cscript src=%27http://s10.histats.com/js15.js%27 type=%27text/javascript%27%3E%3C/script%3E"));</script>
					<a href="http://www.histats.com" target="_blank" title="hit counter" ><script  type="text/javascript" >
					try {Histats.start(1,2138481,4,401,118,80,"00011111");
					Histats.track_hits();} catch(err){};
					</script></a>
					<noscript><a href="http://www.histats.com" target="_blank"><img  src="http://sstatic1.histats.com/0.gif?2138481&101" alt="hit counter" border="0"></a></noscript>
				    <!-- Histats.com  END  -->
					</center>
			    </div>
		   </div>
		<!-- End Fanpage -->


					  </div>
			  <!-- End right -->
			  <div class="clear"></div>

		  </div>
		  <!-- End container -->
		  <center>
			<img src="images/bank.png" />
		  </center>
