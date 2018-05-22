<?php
/* Smarty version 3.1.30, created on 2018-05-21 12:59:47
  from "C:\wamp64\www\doan_trungtam\views\products\v_products.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b02c2c37c5265_57881338',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a063374b10632f03ef6c723e076141c098d129c6' => 
    array (
      0 => 'C:\\wamp64\\www\\doan_trungtam\\views\\products\\v_products.tpl',
      1 => 1526847466,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../homepage/v_fresh.tpl' => 1,
  ),
),false)) {
function content_5b02c2c37c5265_57881338 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="banner"> 
<div class="container">
		<div class="top-brands">
			<div class="w3ls_w3l_banner_nav_right_grid w3ls_w3l_banner_nav_right_grid_sub">
				<h3 class="w3l_fruit"><?php echo $_smarty_tpl->tpl_vars['category_name']->value;?>
</h3>
				<div class="w3ls_w3l_banner_nav_right_grid1 w3ls_w3l_banner_nav_right_grid1_veg">
                <?php $_smarty_tpl->_assignInScope('i', 0);
?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['danh_sach_san_pham']->value, 'san_pham');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['san_pham']->value) {
?>
                
					<div class="col-md-3 w3ls_w3l_banner_left w3ls_w3l_banner_left_asdfdfd" style="margin-bottom:20px">
						<div class="hover14 column">
						<div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
							<!--<div class="agile_top_brand_left_grid_pos">
								<img src="public/images/offer.png" alt=" " class="img-responsive" />
							</div>-->
							<div class="agile_top_brand_left_grid1" style="height:306px">
								<figure>
									<div class="snipcart-item block">
										<div class="snipcart-thumb" style="text-overflow: hidden">
											<a href="detail.php?ma_san_pham=<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ProductID;?>
">
                                           
                                            <object data="public/images/product/<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->Image;?>
" type="image/jpg">
                                                <img title=" " alt=" " src="public/images/updating.jpg" style="width:100%" />
                                            </object>
                                            
                                            </a>
											<p title="<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ProductName;?>
"><?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ProductName;?>
</p>
											<h4><?php echo number_format($_smarty_tpl->tpl_vars['san_pham']->value->Price);?>
 đ
                            	
                                                    <?php if (($_smarty_tpl->tpl_vars['san_pham']->value->Discount != 0)) {?>
                                                        <span>
                                                        <?php echo number_format($_smarty_tpl->tpl_vars['san_pham']->value->Price+($_smarty_tpl->tpl_vars['san_pham']->value->Price*$_smarty_tpl->tpl_vars['san_pham']->value->Discount/100));?>
 đ
                                                        </span>
                                                    <?php }?>
                                                
                                            </h4>
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
                    <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);
?>
                    <?php if (($_smarty_tpl->tpl_vars['i']->value%4 == 0)) {?>
                    	<div class="clearfix"> </div>
                    <?php }?>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

					<div class="clearfix"> </div>
                    <div style="text-align:center"><?php echo $_smarty_tpl->tpl_vars['page_list']->value;?>
</div>
				</div>
			</div>
            
		</div>
        
		<div class="clearfix"></div>
        </div>
        <?php $_smarty_tpl->_subTemplateRender("file:../homepage/v_fresh.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	</div><?php }
}
