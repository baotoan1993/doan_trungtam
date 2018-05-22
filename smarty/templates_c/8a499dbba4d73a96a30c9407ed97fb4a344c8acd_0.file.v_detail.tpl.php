<?php
/* Smarty version 3.1.30, created on 2018-05-21 12:14:02
  from "C:\wamp64\www\doan_trungtam\views\detail\v_detail.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b02b80a782604_17063014',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a499dbba4d73a96a30c9407ed97fb4a344c8acd' => 
    array (
      0 => 'C:\\wamp64\\www\\doan_trungtam\\views\\detail\\v_detail.tpl',
      1 => 1526847466,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../homepage/v_fresh.tpl' => 1,
  ),
),false)) {
function content_5b02b80a782604_17063014 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="banner">
  <div class="w3l_banner_nav_right">
    <div class="agileinfo_single">
      <h5><?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ProductName;?>
</h5>
      <div class="col-md-4 agileinfo_single_left"> 
        <!--<img id="example" src="public/images/product/full/<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->Image;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ProductName;?>
" class="img-responsive" />--> 
        <!--<object  data="public/images/product/full/<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->Image;?>
" type="image/jpg">
          <img id="example" title=" " alt=" " src="public/images/updating.jpg" style="width:100%" />
        </object>--> 
        <img id="example" src="public/images/product/full/<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->Image;?>
" style="width:100%" onerror="this.src='public/images/updating.jpg'" /> </div>
      <div class="col-md-8 agileinfo_single_right">
        <div class="rating1"> <span class="starRating">
          <input id="rating5" type="radio" name="rating" value="5">
          <label for="rating5">5</label>
          <input id="rating4" type="radio" name="rating" value="4">
          <label for="rating4">4</label>
          <input id="rating3" type="radio" name="rating" value="3" checked>
          <label for="rating3">3</label>
          <input id="rating2" type="radio" name="rating" value="2">
          <label for="rating2">2</label>
          <input id="rating1" type="radio" name="rating" value="1">
          <label for="rating1">1</label>
          </span> </div>
        <div class="w3agile_description">
          <table class="table table-bordered">
            <tr>
              <th width="132"  style="color:black">Hãng sản xuất:</th>
              <td width="186" style="color:red"><h3><?php echo $_smarty_tpl->tpl_vars['san_pham']->value->SupplierName;?>
</h3></td>
            </tr>
            <tr>
              <th style="color:black">Nhãn hiệu:</th>
              <td ><h4 style="color:#F60"><?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ProductType;?>
</h4></td>
            </tr>
            <tr>
              <th style="color:black">Đơn vị tính:</th>
              <td style="color:blue"><?php echo $_smarty_tpl->tpl_vars['san_pham']->value->SubUnit;?>
</td>
            </tr>
            <tr>
              <th style="color:black">Giá:</th>
              <td style="color:blue"><div class="snipcart-item block">
                <div class="snipcart-thumb agileinfo_single_right_snipcart">
                  <h4><?php echo number_format($_smarty_tpl->tpl_vars['san_pham']->value->Price);?>
 VND 
                    <?php if (($_smarty_tpl->tpl_vars['san_pham']->value->Discount != 0)) {?> 
                    <span> <?php echo number_format($_smarty_tpl->tpl_vars['san_pham']->value->Price+($_smarty_tpl->tpl_vars['san_pham']->value->Price*$_smarty_tpl->tpl_vars['san_pham']->value->Discount/100));?>
 VND</span> 
                    <?php }?> 
                  </h4>
                </div>
              </td>
            </tr>
            <tr>
              <th style="color:black">Mô tả:</th>
              <td style="color:black; text-align:left;"><?php echo $_smarty_tpl->tpl_vars['san_pham']->value->Description;?>
</td>
            </tr>
            <tr>
            	<td colspan="2">
                
                   <div class="snipcart-details top_brand_home_details">
                    <!-- <fieldset>
                        <input  type="button" 
                                name="add_cart"
                                ma_san_pham="<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ProductID;?>
"
                                ma_user="<?php echo $_SESSION['user']->UserID;?>
"
                                value="Thêm giỏ hàng" 
                                class="button" 
                                onclick="Xu_ly_gio_hang(this)" />
                    </fieldset>-->
					
                    <fieldset>
                            <input  type="button" 
                                    name="add_cart"
                                    ma_san_pham="<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ProductID;?>
"
                                    ten_san_pham="<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ProductName;?>
"
                                    don_gia="<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->Price;?>
"
                                    hinh="<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->Image;?>
"
                                    value="Thêm giỏ hàng" 
                                    class="button" 
                                    onclick="Xu_ly_gio_hang(this)" />
                        </fieldset>
                    
                  </div>
                  
            </td>
            </tr>
          </table>
        
      </div>
    </div>
    <div class="clearfix"> </div>
  </div>
</div>
<div class="clearfix"></div>
</div>

<!-- brands -->
<div class="w3ls_w3l_banner_nav_right_grid w3ls_w3l_banner_nav_right_grid_popular">
  <div class="container">
    <h3>Sản phẩm cùng loại</h3>
    <div class="w3ls_w3l_banner_nav_right_grid1"> 
      <!-- <h6>food</h6> --> 
      <?php $_smarty_tpl->_assignInScope('i', 0);
?>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['san_pham_cung_loai']->value, 'cung_loai');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cung_loai']->value) {
?>
      <div class="col-md-3 w3ls_w3l_banner_left" style="margin-bottom:20px">
        <div class="hover14 column">
          <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
            <div class="agile_top_brand_left_grid_pos"> <img src="public/images/offer.png" alt=" " class="img-responsive" /> </div>
            <div class="agile_top_brand_left_grid1" style="height:306px">
              <figure>
                <div class="snipcart-item block">
                  <div class="snipcart-thumb"> <a href="detail.php?ma_san_pham=<?php echo $_smarty_tpl->tpl_vars['cung_loai']->value->ProductID;?>
">
                    <object data="public/images/product/<?php echo $_smarty_tpl->tpl_vars['cung_loai']->value->Image;?>
" type="image/jpg">
                      <img title=" " alt=" " src="public/images/updating.jpg" style="width:100%" />
                    </object>
                    </a>
                    <p><?php echo $_smarty_tpl->tpl_vars['cung_loai']->value->ProductName;?>
</p>
                    <h4><?php echo number_format($_smarty_tpl->tpl_vars['cung_loai']->value->Price);?>
 VND 
                      
                      <?php if (($_smarty_tpl->tpl_vars['cung_loai']->value->Discount != 0)) {?> 
                      	<span> 
                        	<?php echo number_format($_smarty_tpl->tpl_vars['cung_loai']->value->Price+($_smarty_tpl->tpl_vars['cung_loai']->value->Price*$_smarty_tpl->tpl_vars['cung_loai']->value->Discount/100));?>
 VND 
                        </span> 
                        <?php }?> 
                    </h4>
                  </div>
                   <div class="snipcart-details top_brand_home_details">
                    <fieldset>
                        <input  type="button" 
                                name="add_cart"
                                ma_san_pham="<?php echo $_smarty_tpl->tpl_vars['cung_loai']->value->ProductID;?>
"
                                ten_san_pham="<?php echo $_smarty_tpl->tpl_vars['cung_loai']->value->ProductName;?>
"
                                don_gia="<?php echo $_smarty_tpl->tpl_vars['cung_loai']->value->Price;?>
"
                                hinh="<?php echo $_smarty_tpl->tpl_vars['cung_loai']->value->Image;?>
"
                                value="Thêm giỏ hàng" 
                                class="button" 
                                onclick="Xu_ly_gio_hang(this)" />
                    </fieldset>
                  </div>
                </div>
              </figure>
            </div>
          </div>
        </div>
      </div>
      <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);
?>
      <?php if (($_smarty_tpl->tpl_vars['i']->value%4 == 0)) {?>
      <div class="clearfix"></div>
      <?php }?>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
 </div>
  </div>
  <?php $_smarty_tpl->_subTemplateRender("file:../homepage/v_fresh.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 </div>
<!-- //brands --><?php }
}
