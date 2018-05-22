<?php
/* Smarty version 3.1.30, created on 2018-05-21 06:04:48
  from "E:\wamp64\www\doan_trungtam\views\homepage\v_top-brands.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b0261807da9a9_51527659',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f39e059b24aad10e1a9cf8e632ca378a80c2a60' => 
    array (
      0 => 'E:\\wamp64\\www\\doan_trungtam\\views\\homepage\\v_top-brands.tpl',
      1 => 1526882004,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b0261807da9a9_51527659 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="top-brands">
  <div class="container">
    <h3>Sản phẩm giảm giá</h3>
    <div class="agile_top_brands_grids"> 
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['danh_sach_san_pham_giam_gia']->value, 'san_pham');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['san_pham']->value) {
?>
      <div class="col-md-3 top_brand_left">
        <div class="hover14 column">
          <div class="agile_top_brand_left_grid">
            <div class="agile_top_brand_left_grid1" style="height:306px">
              <figure>
                <div class="snipcart-item block" >
                  <div class="snipcart-thumb"> <a href="detail.php?ma_san_pham=<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ProductID;?>
"> 
                    <img src="public/images/product/<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->Image;?>
" onerror="this.src='public/images/updating.jpg'; this.style.width='100%'" /> </a>
                    <p title="<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ProductName;?>
"><?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ProductName;?>
</p>
                    <h4><?php echo number_format($_smarty_tpl->tpl_vars['san_pham']->value->Price);?>
 VND 
                      
                      <?php if (($_smarty_tpl->tpl_vars['san_pham']->value->Discount != 0)) {?> <span> <?php echo number_format($_smarty_tpl->tpl_vars['san_pham']->value->Price+($_smarty_tpl->tpl_vars['san_pham']->value->Price*$_smarty_tpl->tpl_vars['san_pham']->value->Discount/100));?>
 VND </span> <?php }?> </h4>
                  </div>
                  
                   <div class="snipcart-details top_brand_home_details">
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
                  
                </div>
              </figure>
            </div>
          </div>
        </div>
      </div>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

      <div class="clearfix"> </div>
    </div>
    <div class="clearfix"> </div>
    <hr />
    <h3>Sản phẩm bán chạy</h3>
    <div class="agile_top_brands_grids"> <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['danh_sach_san_pham_mua_nhieu']->value, 'san_pham');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['san_pham']->value) {
?>
      <div class="col-md-3 top_brand_left">
        <div class="hover14 column">
          <div class="agile_top_brand_left_grid">
            <div class="agile_top_brand_left_grid_pos"> <img src="public/images/offer.png" alt=" " class="img-responsive" /> </div>
            <div class="agile_top_brand_left_grid1" style="height:306px">
              <figure>
                <div class="snipcart-item block" >
                  <div class="snipcart-thumb"> <a href="detail.php?ma_san_pham=<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ProductID;?>
"> 
                    <!--<object data="public/images/product/<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->Image;?>
" type="image/jpg">
                                                <img title=" " alt=" " src="public/images/updating.jpg" style="width:100%" />
                                            </object>--> 
                    <img src="public/images/product/<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->Image;?>
" onerror="this.src='public/images/updating.jpg'; this.style.width='100%'" /> </a>
                    <p data-toggle="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ProductName;?>
"><?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ProductName;?>
</p>
                    <h4><?php echo number_format($_smarty_tpl->tpl_vars['san_pham']->value->Price);?>
 VND 
                      
                      <?php if (($_smarty_tpl->tpl_vars['san_pham']->value->Discount != 0)) {?> <span> <?php echo number_format($_smarty_tpl->tpl_vars['san_pham']->value->Price+($_smarty_tpl->tpl_vars['san_pham']->value->Price*$_smarty_tpl->tpl_vars['san_pham']->value->Discount/100));?>
 VND </span> <?php }?> </h4>
                  </div>
                  
                   <div class="snipcart-details top_brand_home_details">
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
                  
                </div>
              </figure>
            </div>
          </div>
        </div>
      </div>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

      <div class="clearfix"> </div>
    </div>
    <div class="clearfix"> </div>
    <hr />
    <h3>Sản phẩm nổi bật</h3>
    <div class="agile_top_brands_grids"> 
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['danh_sach_san_pham_noi_bat']->value, 'san_pham');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['san_pham']->value) {
?>
      <div class="col-md-3 top_brand_left">
        <div class="hover14 column">
          <div class="agile_top_brand_left_grid">
            <div class="agile_top_brand_left_grid_pos"> 
            	<img src="public/images/offer.png" alt=" " class="img-responsive" /> 
            </div>
            <div class="agile_top_brand_left_grid1" style="height:306px">
              <figure>
                <div class="snipcart-item block" >
                  <div class="snipcart-thumb"> <a href="detail.php?ma_san_pham=<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ProductID;?>
"> 
                    <!--<object data="public/images/product/<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->Image;?>
" type="image/jpg">
                                                <img title=" " alt=" " src="public/images/updating.jpg" style="width:100%" />
                                                
                                            </object>--> 
                    <img src="public/images/product/<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->Image;?>
" onerror="this.src='public/images/updating.jpg'; this.style.width='100%'" /> </a>
                    <p data-toggle="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ProductName;?>
"><?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ProductName;?>
</p>
                    <h4><?php echo number_format($_smarty_tpl->tpl_vars['san_pham']->value->Price);?>
 VND 
                      
                      <?php if (($_smarty_tpl->tpl_vars['san_pham']->value->Discount != 0)) {?> <span> <?php echo number_format($_smarty_tpl->tpl_vars['san_pham']->value->Price+($_smarty_tpl->tpl_vars['san_pham']->value->Price*$_smarty_tpl->tpl_vars['san_pham']->value->Discount/100));?>
 VND </span> <?php }?> </h4>
                  </div>
                  
                   <div class="snipcart-details top_brand_home_details">
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
                  
                 
                </div>
              </figure>
            </div>
          </div>
        </div>
      </div>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


      <div class="clearfix"> </div>

    </div>
  </div>
</div>
<?php }
}
