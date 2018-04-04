<?php require_once 'homepage/header.php' ?>
		  <!-- End header -->
		  <!-- The container -->
		  <div id="container">
		      <!-- The left -->
<?php require_once 'homepage/left.php' ?>
			  <!-- End left -->

			  <!-- The content -->
			  <div class='content'>
			       			       <!-- video -->
<script type='text/javascript' src='http://localhost/webphp//public/site/tivi/jwplayer.js'></script>
<script type='text/javascript'>
jQuery('document').ready(function(){
	 jwplayer('mediaspace').setup({
    'flashplayer': 'http://localhost/webphp//public/site/tivi/player.swf',
    'file': 'https://www.youtube.com/watch?v=zAEYQ6FDO5U',
    'controlbar': 'bottom',
    'width': '560',
    'height': '315',
    'autoplay' : true
  });
})
</script>

<script type="text/javascript">
$(document).ready(function(){
    $('a.tab').click(function(){
    var an_di=$('a.selected').attr('rel');//lấy title của thẻ <a class='active'>
    $('div#'+an_di).hide();//ẩn thẻ <div id='an_di'>
    $('a.selected').removeClass('selected');
    $(this).addClass('selected');
    var hien_thi=$(this).attr('rel');//lấy title của thẻ <a> khi ta kick vào nó
    $('div#'+hien_thi).show();//hiện lên thẻ <div id='hien_thi'>
    });
});
</script>

<!-- zoom image -->
<script src="jqzoom_ev/js/jquery.jqzoom-core.js" type="text/javascript"></script>
<link rel="stylesheet" href="jqzoom_ev/css/jquery.jqzoom.css" type="text/css">
<script type="text/javascript">
$(document).ready(function() {
	$('.jqzoom').jqzoom({
            zoomType: 'standard',
    });
});
</script>
<!-- end zoom image -->

<!-- Raty -->
<script type="text/javascript">
$(document).ready(function() {
	//raty
	$('.raty_detailt').raty({
    	  score: function() {
    	    return $(this).attr('data-score');
    	  },
    	  half    : true,
    	  click: function(score, evt) {
        	  var rate_count = $('.rate_count');
        	  var rate_count_total = rate_count.text();
    		  $.ajax({
	  				url: 'http://localhost/webphp/product/raty.html',
	  				type: 'POST',
	  				data: {'id':'9','score':score},
	  				dataType: 'json',
	  				success: function(data)
	  				{
	  					if(data.complete)
	  					{
		  					var total = parseInt(rate_count_total)+1;
	  						rate_count.html(parseInt(total));
		  				}
	  					alert(data.msg);
	  				}
    		  });
  		  }
      });
});
</script>
<!--End Raty -->

 <div class="box-center"><!-- The box-center product-->
             <div class="tittle-box-center">
		        <h2>Chi tiết sản phẩm</h2>
		      </div>
		      <div class="box-content-center product"><!-- The box-content-center -->
		           <div class='product_view_img'>
								 <?php foreach ($listProducts as $row): ?>
									 <?php if ($row['id'] == $id): ?>
		                <a href="../upload/product/product13.jpg" class="jqzoom" rel='gal1'  title="triumph" >
				            <img  src="../upload/product/<?php echo $row['image']; ?>" style="width:280px !important">
				        </a>
				         <div class='clear' style='height:10px'></div>
				         <div class="clearfix" >
							<ul id="thumblist" >
							    <li>
							    <a class="zoomThumbActive" href='javascript:void(0);' rel="{gallery: 'gal1', smallimage: '../upload/product/product13.jpg',largeimage: '../upload/product/product13.jpg'}">
							    <img src='../upload/product/<?php echo $row['image']; ?>'>
							    </a>
							    </li>
							    	</ul>
											<?php endif ?>
									<?php endforeach; ?>
						</div>
		           </div>
							<?php foreach ($listProducts as $row): ?>
								<?php if ($row['id'] == $id): ?>
		           <div class='product_view_content'>
		               <h1><?php echo $row['name'] ?></h1>

		               <p class='option'>
		                  Giá: <span class='product_price'><?php echo number_format($row['price']) ?> đ</span>
		               </p>

		                <p class='option'>
		                  Danh mục:
											<?php foreach ($listBrand as $brandpro): ?>
											<?php if ($row['brand_id'] == $brandpro['id']):  ?>
												<?php $a = $brandpro['id']; ?>
		                  <a href="#" title="LG">
		                     <b><?php echo $brandpro['name']; ?></b>
											 <?php endif ?>
											<?php endforeach ?>
		                  </a>
		               </p>

		               <p class='option'>
		                  Lượt mua: <b> <?php echo $row['count_buy']; ?>   </b>
		               </p>
		               		               <p class='option'>
		                  Bảo hành: <b>12 tháng</b>
		               </p>
		               		               		               <p class='option'>
		                  Tặng quà: <b>0</b>
		               </p>

		               Mô tả &nbsp;
                       <span class='raty_detailt' style = 'margin:5px' id='9' data-score='4'></span>
                       | <span> <?php echo $row['description']; ?> </span>

		               <div class='action'>
				            <a class='button' style='float:left;padding:8px 15px;font-size:16px' href="http://localhost/webphp/them-vao-gio-9.html" title='Mua ngay'>Thêm vào giỏ hàng</a>
				            <div class='clear'></div>
			            </div>

		           </div>
						 <?php endif ?>
					 <?php endforeach ?>
		           <div class='clear' style='height:15px'></div>
		           <center>
  <!-- AddThis Button BEGIN -->
<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "19a4ed9e-bb0c-4fd0-8791-eea32fb55964", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
<span class='st_facebook_hcount' displayText='Facebook'></span>
<span class='st_fblike_hcount' displayText='Facebook Like'></span>
<span class='st_googleplus_hcount' displayText='Google +'></span>
<span class='st_twitter_hcount' displayText='Tweet'></span>
<!-- AddThis Button END -->
</center>
		            <div class='clear' style='height:10px'></div>
		            <table width="100%" cellspacing="0" cellpadding="3" border="0" class="tbsicons">
					           <tbody>
					           <tr>
					                    <td width="25%"><img alt="Phục vụ chu đáo" src="images/icon-services.png"> <div>Phục vụ chu đáo</div></td>
					                    <td width="25%"><img alt="Giao hàng đúng hẹn" src="images/icon-shipping.png"><div>Giao hàng đúng hẹn</div></td>
					                    <td width="25%"><img alt="Đổi hàng trong 24h" src="images/icon-delivery.png"> <div>Đổi hàng trong 24h</div></td>
					           </tr>
					          </tbody>
					</table>
		      </div>
</div>

<div class="usual" id="usual1">
     <ul>
	       <li><a title="Chi tiết sản phẩm" rel='tab2' href='javascript:void(0)' class="tab selected">Chi tiết sản phẩm</a></li>
	       <li><a title="Video" rel='tab3' href='javascript:void(0)' class="tab">Video</a></li>
	       <li><a title="Hỏi đáp về sản phẩm" rel='tab4' href='javascript:void(0)' class="tab">Hỏi đáp về sản phẩm</a></li>
	</ul>
</div><!-- end  <div class="usual" id="usual1">-->

<div class="usual-content">
	<div id="tab2" style="display: block;">
		<p>
	B&agrave;i viết cho sản phẩm n&agrave;y đang được cập nhật ...</p>
		<!-- comment facebook -->
		<center>
<div class="fb-comments" data-href="http://localhost:8080/ltweb/site/index.php?controller=product&amp;action=detailProduct&amp;id=<?php echo $id ?>" data-numposts="5"></div>
</center>
	</div>
	<div id="tab3" style="display: none;">
	    <!-- the div chay video -->
	    <div id='mediaspace' style="margin:5px;"></div>
	</div>

	<div id="tab4" style="display: none;">
	       <div class='box-show-product'>
	       <!-- hiển thị danh sách comment và form comment -->
	       <div class="comments">
	<div class="title"><h3>THẢO LUẬN CỦA KHÁCH HÀNG <span class="yellow">(0)</span></h3><h4>Ý kiến khách hàng về Sản phẩm Tivi LG 520</h4></div>
	<br class="break">
	<div class="reviews">
	        <div class="content">
	                 	        </div>
	</div>
</div>
<div class='clear'></div>


<style>
.error{
	margin:15px 0px;
}
</style>
<form name='send_comment' id='show_box_comment' class="t-form form_action" method='post' action='http://localhost/webphp/comment/add.html'>
     <table width="90%" cellspacing="0" cellpadding="0" border="0" style="margin:10px auto">
          <tbody>
              <tr>
	              <td style='width:210px;padding-right:15px;vertical-align:top'>
	                   <input type="text" style="width:200px;" class='input' id="user_name" placeholder="Họ tên" value='' name="user_name">
				       <div name="user_name_error" class="error"></div>
				       <input type="text" style="width:200px;" id="user_email" class='input' placeholder="Email" value='' name="user_email">
                       <div name="user_email_error" class="error"></div>
                       <img id="imgsecuri"  src="http://localhost/webphp/captcha/three.html" style="margin-bottom: -6px;" _captcha="http://localhost/webphp/captcha/three.html" class="imgrefresh" >

					   <input type="text"  class='input'   style="width:80px;" id="security_code" placeholder="Mã xác nhận" name="security_code">
					   <div name="security_code_error" class="error"></div>
	              </td>
	              <td>
	                    <textarea id="content_comment" cols="50" rows="3" style='width:320px' class='input' placeholder='Nội dung phản hồi' name="content">
	                    </textarea>
                        <div name="content_error" class="error"></div>
                        <input type="hidden" name='product_id' value='9'>
				        <input type="hidden" name='parent_id' id='comment_parent_id' value=''>
				        <input type="submit" class="button button-border medium blue f" id=""   value="Gửi" name="_submit">
				        <input type="reset" class="button button-border medium red f"  value='Nhập lại'>
				        <div class='clear'></div>
	              </td>
              </tr>
          </tbody>
     </table>
</form>	       </div>
	</div>

</div>


<div class="box-center"><!-- The box-center product-->
             <div class="tittle-box-center">
		        <h2>Sản phẩm cùng danh mục</h2>
		      </div>
		      <div class="box-content-center product"><!-- The box-content-center -->
						<?php foreach ($listProducts as $row): ?>
							<?php if ($row['brand_id'] == $a): ?>
		             <div class='product_item'>
                       <h3>
                         <a class="text-truncate d-inline-block" style="max-width:160px;"  href="index.php?controller=product&action=detailProduct&id=<?php echo $row['id'];?>" title="Sản phẩm">
                         <?php echo $row['name']; ?>
											 </a>
	                   </h3>


                       <div class='product_img'>
                             <a   href="index.php?controller=product&action=detailProduct&id=<?php echo $row['id'];?>" title="Sản phẩm">
                                <img style="width:150px;height:85px;" src="../upload/product/<?php echo $row['image']?>" alt=''/>
                            </a>
                       </div>
                       <p class='price'>
                                		                              <?php echo number_format($row['price']); ?> đ
		                                                  </p>
                        <center>
                          <div class='raty' style='margin:10px 0px' id='6' data-score='4.5'></div>
                        </center>
                       <div class='action'>
                           <p style='float:left;margin-left:10px'>Lượt mua: <b><?php echo $row['count_buy']; ?></b></p>
	                       <a class='button' href="#" title='Mua ngay'>Mua ngay</a>
	                       <div class='clear'></div>
                       </div>
                   </div>
									 <?php endif ?>
							 <?php endforeach ?>

		       <div class='clear'></div>

		      </div><!-- End box-content-center -->
</div>	<!-- End box-center product-->





			   </div>
			  <!-- End content -->

			<?php require_once 'homepage/right.php' ?>

         <!-- The news -->
	          <div class="box-right">
                <div class="title tittle-box-right">
			        <h2> Bài viết mới </h2>
			    </div>
			    <div class="content-box">
			       <ul class='news'>
			            			            <li>
			                <a href="http://localhost/webphp/news/view/4.html" title="Mỹ tăng cường không kích Iraq">
			                <img src="images/li.png">
			                Mỹ tăng cường không kích Iraq	                        </a>
	                     </li>
	                    			            <li>
			                <a href="http://localhost/webphp/news/view/3.html" title="Hà Nội: CSGT tìm người thân giúp cháu bé 8 tuổi đi lạc">
			                <img src="images/li.png">
			                Hà Nội: CSGT tìm người thân giúp cháu bé 8 tuổi đi lạc	                        </a>
	                     </li>
	                    			            <li>
			                <a href="http://localhost/webphp/news/view/2.html" title="Arsenal đồng ý bán Vermaelen cho Barcelona">
			                <img src="images/li.png">
			                Arsenal đồng ý bán Vermaelen cho Barcelona	                        </a>
	                     </li>
	                    			            <li>
			                <a href="http://localhost/webphp/news/view/1.html" title="Nhà lầu siêu xe hàng mã ế sưng, đồ chơi biển đảo hút khách">
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

			         <iframe src="http://www.facebook.com/plugins/likebox.php?href=https://www.facebook.com/nobitacnt&amp;width=190&amp;height=300&amp;show_faces=true&amp;colorscheme=light&amp;stream=false&amp;border_color&amp;header=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:190px; height:300px;" allowTransparency="true">
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
		  <!-- The footer -->
		 <?php require_once 'homepage/footer.php' ?>
