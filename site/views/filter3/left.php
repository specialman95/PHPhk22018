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
