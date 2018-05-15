<?php
/* Smarty version 3.1.30, created on 2018-05-03 08:34:47
  from "C:\wamp64\www\sieuthimini\admin\views\product\v_product.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aeac9a74e6ad0_56491381',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac3b4fb9b8cc6a7fcf773fc989f3d2cfdb7cdd28' => 
    array (
      0 => 'C:\\wamp64\\www\\sieuthimini\\admin\\views\\product\\v_product.tpl',
      1 => 1525336483,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aeac9a74e6ad0_56491381 (Smarty_Internal_Template $_smarty_tpl) {
?>
<table class="table table-striped table-advance table-hover">
  <thead>
    <tr>
      <th>Hình</th>
      <th>Tên SP</th>
      <th>Đơn giá</th>
      <th>Loại</th>
      <th>Nhà sản xuất</th>
      <th></th>

    </tr>
  </thead>
  <tbody>
  	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['danh_sach_san_pham']->value, 'san_pham');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['san_pham']->value) {
?>
    <tr>
      <td width="80px"><img src="../public/images/product/<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->Image;?>
" style="width:100%" ></td>
      <td><?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ProductName;?>
</td>
      <td><?php echo number_format($_smarty_tpl->tpl_vars['san_pham']->value->Price);?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['san_pham']->value->CategoryName;?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['san_pham']->value->SupplierName;?>
</td>
      <td>
      	<div class="btn-group"> 
        	<a class="btn btn-primary" href="edit_product.php?ProductID=<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ProductID;?>
"><i class="icon_cog"></i></a> 
            <a class="btn btn-danger" href="#"><i class="icon_trash"></i></a> </div>
      </td>
    </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

  </tbody>
  <tfoot>
  	<tr>
    	<td colspan="6" align="center">
        	 <div style="text-align:center" class="page_list"><?php echo $_smarty_tpl->tpl_vars['page_list']->value;?>
</div>
        </td>
    </tr>
  </tfoot>
</table>
<?php }
}
