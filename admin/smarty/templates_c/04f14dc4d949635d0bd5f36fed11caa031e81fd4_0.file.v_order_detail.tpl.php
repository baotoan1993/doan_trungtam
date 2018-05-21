<?php
/* Smarty version 3.1.30, created on 2018-05-21 06:39:03
  from "E:\wamp64\www\doan_trungtam\admin\views\order\v_order_detail.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b026987a16ea7_00424496',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04f14dc4d949635d0bd5f36fed11caa031e81fd4' => 
    array (
      0 => 'E:\\wamp64\\www\\doan_trungtam\\admin\\views\\order\\v_order_detail.tpl',
      1 => 1526881977,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b026987a16ea7_00424496 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
  <div class="col-lg-12 col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h2><i class="fa fa-flag-o red"></i><strong><?php echo $_smarty_tpl->tpl_vars['content_heading']->value;?>
</strong></h2>
      </div>
      <div class="panel-body" id="main_content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
              <h3 style="display:inline">Khach hang: </h3>
              <h1 style="display:inline"><?php echo $_smarty_tpl->tpl_vars['ten_khach_hang']->value;?>
</h1>
            </div>
          </div>
          <br >
          <div class="row">
            <div class="col-lg-12"> <?php $_smarty_tpl->_assignInScope('tong', 0);
?>
              <table class="table table-hover table-striped table-bordered">
                <thead style="background:#FC6">
                  <tr>
                    <th>Sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Giá</th>
                  </tr>
                </thead>
                <tbody>
                
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['chi_tiet_dat_hang']->value, 'chi_tiet');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['chi_tiet']->value) {
?>
                <tr>
                  <td><?php echo $_smarty_tpl->tpl_vars['chi_tiet']->value->ProductName;?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['chi_tiet']->value->Quantity;?>
</td>
                  <td><?php echo number_format($_smarty_tpl->tpl_vars['chi_tiet']->value->Price);?>
</td>
                </tr>
                <?php $_smarty_tpl->_assignInScope('tong', $_smarty_tpl->tpl_vars['tong']->value+($_smarty_tpl->tpl_vars['chi_tiet']->value->Quantity*$_smarty_tpl->tpl_vars['chi_tiet']->value->Price));
?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                <tr>
                  <td colspan="2" style="text-align:center; font-size:18pt"><b>TỔNG CỘNG</b></td>
                  <td style="font-size:16pt; color:red"><?php echo number_format($_smarty_tpl->tpl_vars['tong']->value);?>
</td>
                </tr>
                </tbody>
                
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php }
}
