<?php
/* Smarty version 3.1.30, created on 2018-05-20 14:05:22
  from "C:\wamp64\www\doan_git\admin\views\category\v_category.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b0180a2c8abe3_76888424',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89657f8e88be23e24861b3ccd3ccebd303653ab5' => 
    array (
      0 => 'C:\\wamp64\\www\\doan_git\\admin\\views\\category\\v_category.tpl',
      1 => 1526825120,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b0180a2c8abe3_76888424 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
  <div class="col-lg-12 col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h2><i class="fa fa-flag-o red"></i><strong><?php echo $_smarty_tpl->tpl_vars['content_heading']->value;?>
</strong></h2>
      </div>
      <div class="panel-body" id="main_content">
        <table class="table table-striped table-advance table-hover" width="500px">
          <thead>
            <tr>
              <th>Loại hàng</th>
              <th>Điều chỉnh</th>
            </tr>
          </thead>
          <tbody>
          
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['danh_sach_loai_hang']->value, 'loai_hang');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['loai_hang']->value) {
?>
          <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['loai_hang']->value->CategoryName;?>
</td>
            <td><div class="btn-group"> <a class="btn btn-primary" href="edit_category.php?CategoryID=<?php echo $_smarty_tpl->tpl_vars['loai_hang']->value->CategoryID;?>
"><i class="icon_cog"></i></a> </div></td>
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
<?php }
}
