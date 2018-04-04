<html>
   <!-- the head -->
   <head>
                <meta http-equiv="Content-Type" content="text/html ;charset=utf-8" />
        <!-- the CSS -->
        <?php require_once 'views/meta-data.php' ?>
        <link rel="stylesheet" href="css/bootstrap.min.css" >
        <link type="text/css" href="css/reset.css" rel="stylesheet" />
        <link type="text/css" href="css/style.css" rel="stylesheet" />
        <link type="text/css" href="css/menu.css" rel="stylesheet" />
        <link type="text/css" href="css/input.css" rel="stylesheet" />
        <link type="text/css" href="css/product.css" rel="stylesheet" />
        <link type="text/css" href="css/slide-flim.css" rel="stylesheet" />
        <!-- End CSS -->

        <!-- the Javascript -->

        <script type="text/javascript" src="../js/jquery/jquery.min.js"></script>
		<script type="text/javascript" src="../js/jquery/jquery-ui.min.js"></script>
		<link rel="stylesheet" href="../js/jquery/jquery-ui/custom-theme/jquery-ui-1.8.21.custom.css" type="text/css">

        <script src="js/script.js"></script>

        <!-- raty -->
		 <script type="text/javascript" src="raty/jquery.raty.min.js"></script>
		 <script type="text/javascript">
	      $(function() {
	         $.fn.raty.defaults.path = 'raty/img';
	         $('.raty').raty({
	          	  score: function() {
	          	    return $(this).attr('data-score');
	          	  },
	              readOnly  : true,
	          });
	      });
	     </script>
	     <style>.raty img{width:16px !important;height:16px; !important;}</style>
	     <!--End raty -->

        <!-- End Javascript -->
        <script type="text/javascript">
	        $(document).ready(function(){
		        $('#back_to_top').click(function() {
		            $('html, body').animate({scrollTop:0},"slow");
		       });
		       // go top
		       $(window).scroll(function() {
		            if($(window).scrollTop() != 0) {
		                $('#back_to_top').fadeIn();
		            } else {
		                $('#back_to_top').fadeOut();
		            }
		       });
	        });
		</script>
		<style>
		#back_to_top {
		    bottom: 10px;
		    color: #666;
		    cursor: pointer;
		    padding: 5px;
		    position: fixed;
		    right: 55px;
		    text-align: center;
		    text-decoration: none;
		    width: auto;
		}
		</style>

		        <title> Điện Tử - Điện Lạnh </title>   </head>
   <!-- end head -->
   <body>

       <a href="#" id="back_to_top">
		   <img src="images/top.png" />
	  </a>

      <!-- the wraper -->
      <div class="wraper">
          <!-- the header -->
	      <div class='header'>
	           <!-- The box-header-->

<link type="text/css" href="../js/jquery/autocomplete/css/smoothness/jquery-ui-1.8.16.custom.css" rel="stylesheet" />
<script type="text/javascript" src="../js/jquery/autocomplete/jquery-ui-1.8.16.custom.min.js"></script>

<script type="text/javascript">
$(function() {
    $( "#text-search" ).autocomplete({
        source: "product/search_ac.html",
    });
});
</script>
<div class='top'><!-- The top -->
      <div id="logo"><!-- the logo -->
           <a  href="index.php?controller=product&action=listProduct" title="">
	           <img src="images/logo.jpg"  alt=""/>
	       </a>
       </div><!-- End logo -->

       <!--  load gio hàng -->
      <div id="cart_expand" class="cart">
            <a href="gio-hang.html" class="cart_link">
               Giỏ hàng <span id="in_cart">0</span> sản phẩm
            </a>
            <img alt="cart bnc" src="images/cart.png">
</div>
       <div id="search"><!-- the search -->
			<form method="post" action="index.php?controller=product&action=searchall">
			   <input type="text" id="text-search" name="key_search" value="" placeholder="Tìm kiếm sản phẩm..." class="ui-autocomplete-input" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true">
				 <input type="submit" id="but" name="searchall" value="">
			</form>
       </div><!-- End search -->


    <div class='clear'></div><!-- clear float -->
</div><!-- End top -->			   <!-- End box-header  -->

               <!-- The box-header-->
			        <div id="menu"><!-- the menu -->
           <ul class="menu_top">
                <li class="active index-li"><a href="index.php?controller=product&action=listProduct">Trang chủ </a></li>
                <li class=""><a href="index.php?controller=product&action=aboutus">Giới thiệu</a></li>

                           </ul>
</div><!-- End menu -->			   <!-- End box-header  -->

		  </div>
		  <!-- End header -->
