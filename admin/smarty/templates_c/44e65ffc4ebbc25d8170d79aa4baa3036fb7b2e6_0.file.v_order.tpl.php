<?php
/* Smarty version 3.1.30, created on 2018-05-20 14:10:53
  from "C:\wamp64\www\doan_git\admin\views\order\v_order.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b0181ed1df599_70606722',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44e65ffc4ebbc25d8170d79aa4baa3036fb7b2e6' => 
    array (
      0 => 'C:\\wamp64\\www\\doan_git\\admin\\views\\order\\v_order.tpl',
      1 => 1526825448,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b0181ed1df599_70606722 (Smarty_Internal_Template $_smarty_tpl) {
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
              <table class="table table-hover table-striped">
                <thead>
                  <tr>
                    <th>Ten khach hang</th>
                    <th>Email</th>
                    <th>Dia chi</th>
                    <th>So dien thoai</th>
                    <th>Ghi chu</th>
                    <th style="text-align:center">Hoàn thành</th>
                  </tr>
                </thead>
                <tbody>
                
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['danh_sach_dat_hang']->value, 'don_hang');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['don_hang']->value) {
?>
                <tr CustomerID="<?php echo $_smarty_tpl->tpl_vars['don_hang']->value->CustomerID;?>
" style="cursor:pointer" onclick="Xu_ly_hoa_don(this)">
                  <td><?php echo $_smarty_tpl->tpl_vars['don_hang']->value->CustomerName;?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['don_hang']->value->Email;?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['don_hang']->value->Address;?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['don_hang']->value->Phone;?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['don_hang']->value->Note;?>
</td>
                  <td style="text-align:center"> <?php if (($_smarty_tpl->tpl_vars['don_hang']->value->Status) == 1) {?>
                    <input type="checkbox" checked="checked" onclick="return false;">
                    <?php } else { ?>
                    <input type="checkbox" onclick="return false;">
                    <?php }?> </td>
                </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </tbody>
                
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php echo '<script'; ?>
>
	function Xu_ly_hoa_don(e){
		var CustomerID = $(e).attr("CustomerID")
		var url = "order.php?customerid=" + CustomerID
		window.location = url
	}
<?php echo '</script'; ?>
><?php }
}
