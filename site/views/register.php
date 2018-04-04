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
<div class="content">

<div class="box-center"><!-- The box-center register-->
      <div class="tittle-box-center">
     <h2>Đăng ký thành viên</h2>
   </div>
   <div class="box-content-center register"><!-- The box-content-center -->
     <h1>Đăng ký thành viên</h1>
     <form enctype="multipart/form-data" action="" method="post" class="t-form form_action">
           <div class="form-row">
     <label class="form-label" for="param_email">Email:<span class="req">*</span></label>
     <div class="form-item">
       <input type="text" value="" name="email" id="email" class="input">
       <div class="clear"></div>
       <div id="email_error" class="error"></div>
     </div>
     <div class="clear"></div>
   </div>

   <div class="form-row">
     <label class="form-label" for="param_password">Mật khẩu:<span class="req">*</span></label>
     <div class="form-item">
       <input type="password" name="password" id="password" class="input">
       <div class="clear"></div>
       <div id="password_error" class="error"></div>
     </div>
     <div class="clear"></div>
   </div>

   <div class="form-row">
     <label class="form-label" for="param_re_password">Gõ lại mật khẩu:<span class="req">*</span></label>
     <div class="form-item">
       <input type="password" name="re_password" id="re_password" class="input">
       <div class="clear"></div>
       <div id="re_password_error" class="error"></div>
     </div>
     <div class="clear"></div>
   </div>
   <div class="form-row">
     <label class="form-label" for="param_name">Họ và tên:<span class="req">*</span></label>
     <div class="form-item">
       <input type="text" value="" name="name" id="name" class="input">
       <div class="clear"></div>
       <div id="name_error" class="error"></div>
     </div>
     <div class="clear"></div>
   </div>
   <div class="form-row">
     <label class="form-label" for="param_phone">Số điện thoại:<span class="req">*</span></label>
     <div class="form-item">
       <input type="text" value="" name="phone" id="phone" class="input">
       <div class="clear"></div>
       <div id="phone_error" class="error"></div>
     </div>
     <div class="clear"></div>
   </div>

   <div class="form-row">
     <label class="form-label" for="param_address">Địa chỉ:<span class="req">*</span></label>
     <div class="form-item">
       <textarea name="address" id="address" class="input"></textarea>
       <div class="clear"></div>
       <div id="address_error" class="error"></div>
     </div>
     <div class="clear"></div>
   </div>

    <div class="form-row">
     <!-- <label class="form-label" for="param_re_password">Ảnh đại diện:<span class="req">*</span></label> -->
     <div class="form-item">
       <!-- <input type="file" name="avata" id="avata"> -->
       <div class="clear"></div>
       <div id="avata_error" class="error"></div>
     </div>
     <div class="clear"></div>
   </div>

   <div class="form-row">
     <label class="form-label">&nbsp;</label>
     <div class="form-item">
             <input type="submit" name="submitRegister" value="Đăng ký" class="button">
     </div>
    </div>
     </form>
  </div><!-- End box-content-center register-->
</div><!-- End box-center -->
  </div>
</div>
			  <!-- End content -->
			<?php require_once 'homepage/right.php' ?>
         <!-- The news -->
		<!-- End Fanpage -->
		 <!-- The Fanpage -->
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
