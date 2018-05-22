<?php
/* Smarty version 3.1.30, created on 2018-05-21 12:12:15
  from "C:\wamp64\www\doan_trungtam\views\homepage\v_fresh.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b02b79f1a3a15_92236985',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3dbb9b4e903ff50ff1f58abc69c27cce855ac92d' => 
    array (
      0 => 'C:\\wamp64\\www\\doan_trungtam\\views\\homepage\\v_fresh.tpl',
      1 => 1526847466,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b02b79f1a3a15_92236985 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="fresh-vegetables">
  <div class="container">
    <h3>TOP Thương hiệu</h3>
    <div class="w3l_fresh_vegetables_grids">
      <div class="col-md-3 w3l_fresh_vegetables_grid w3l_fresh_vegetables_grid_left">
        <div class="w3l_fresh_vegetables_grid2">
          <ul>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['danh_sach_thuong_hieu']->value, 'thuong_hieu');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['thuong_hieu']->value) {
?>
            <li><i class="fa fa-check" aria-hidden="true"></i>
            	<a href="supplier.php?ma_thuong_hieu=<?php echo $_smarty_tpl->tpl_vars['thuong_hieu']->value->SupplierID;?>
"><?php echo $_smarty_tpl->tpl_vars['thuong_hieu']->value->SupplierName;?>
</a>
            </li>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

          </ul>
        </div>
      </div>
      <div class="col-md-9 w3l_fresh_vegetables_grid_right">
        <div class="col-md-4 w3l_fresh_vegetables_grid">
          <div class="w3l_fresh_vegetables_grid1"> <img src="public/images/8.jpg" alt=" " class="img-responsive" /> </div>
        </div>
        <div class="col-md-4 w3l_fresh_vegetables_grid">
          <div class="w3l_fresh_vegetables_grid1">
            <div class="w3l_fresh_vegetables_grid1_rel"> <img src="public/images/7.jpg" alt=" " class="img-responsive" />
              <div class="w3l_fresh_vegetables_grid1_rel_pos">
                <div class="more m1"> <a href="public/products.html" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Mua ngay</a> </div>
              </div>
            </div>
          </div>
          <div class="w3l_fresh_vegetables_grid1_bottom"> <img src="public/images/10.jpg" alt=" " class="img-responsive" />
            <div class="w3l_fresh_vegetables_grid1_bottom_pos">
              <h5>Đặc biệt !!!</h5>
            </div>
          </div>
        </div>
        <div class="col-md-4 w3l_fresh_vegetables_grid">
          <div class="w3l_fresh_vegetables_grid1"> <img src="public/images/9.jpg" alt=" " class="img-responsive" /> </div>
          <div class="w3l_fresh_vegetables_grid1_bottom"> <img src="public/images/11.jpg" alt=" " class="img-responsive" /> </div>
        </div>
        <div class="clearfix"> </div>
        <div class="agileinfo_move_text">
          <div class="agileinfo_marquee">
            <h4>Giảm đến <span class="blink_me">20% </span> cho lần mua sắm đầu tiên!!!</h4>
          </div>
          <div class="agileinfo_breaking_news"> <span> </span> </div>
          <div class="clearfix"></div>
        </div>
      </div>
      <div class="clearfix"> </div>
    </div>
  </div>
</div>
<?php }
}
