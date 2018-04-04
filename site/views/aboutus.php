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
     <h2>About us</h2>
   </div><!-- End box-content-center register-->
	 <div class="mt-5">
		<p>Đôn - Trường - Nhóm 3</p>
		<p>Chuyên cung câp - phân phối - sỉ lẻ - các mặt hàng điện tử - điện lạnh</p>
		<p>Địa chỉ: Tầng 7 - Nhà A - Đại học Thăng Long</p>
		<p>Liên hệ: 01695029800  </p>
	 </div>
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
