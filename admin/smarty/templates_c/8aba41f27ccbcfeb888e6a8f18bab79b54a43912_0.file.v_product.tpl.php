<?php
/* Smarty version 3.1.30, created on 2018-05-24 07:58:59
  from "C:\wamp64\www\doan_trungtam\admin\views\product\v_product.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b0670c39ae224_60699988',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8aba41f27ccbcfeb888e6a8f18bab79b54a43912' => 
    array (
      0 => 'C:\\wamp64\\www\\doan_trungtam\\admin\\views\\product\\v_product.tpl',
      1 => 1526847466,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b0670c39ae224_60699988 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2><i class="fa fa-flag-o red"></i><strong><?php echo $_smarty_tpl->tpl_vars['content_heading']->value;?>
</strong></h2>
            </div>
            <div class="panel-body" id="main_content">
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
                        <td><div class="btn-group"> <a class="btn btn-primary" href="edit_product.php?ProductID=<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ProductID;?>
"><i class="icon_cog"></i></a> <a class="btn btn-danger btnXoa" href="javascript:void(0)" ProductID="<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ProductID;?>
" onclick="XoaHang(this)"><i class="icon_trash"></i></a> </div></td>
                    </tr>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </tbody>
                    
                    <tfoot>
                        <tr>
                            <td colspan="6" align="center"><div style="text-align:center" class="page_list"><?php echo $_smarty_tpl->tpl_vars['page_list']->value;?>
</div></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
<?php echo '<script'; ?>
>
	function XoaHang(e){
		var p = $(e).attr("ProductID")
		if(confirm("Bạn có chắc chắn xoá món hàng này??")){
			$.ajax({
				url: "product.php",
				type: 'POST',
				data: {
					ProductID: p,
					btnXoa: "ok"
				}
			}).done(function(res){
				if(res == 1){
					$('body').css({'pointer-events': 'none', 'opacity': '1'})
					$.notify({
						title: '<strong>Thành công!!</strong>',
						message: 'Trang sẽ được làm mới!',
						
					},{
						type: 'success',
						animate: {
							enter: 'animated fadeInRight',
							exit: 'animated fadeOutRight'
						},
						delay: 1500,
						allow_dismiss: false,
						placement: {
							from: 'top',
							align: 'right'
						},
					});
					setTimeout(function(){
						location.reload()
					},2000)
				}
				else{
					$.notify({
						title: '<strong>Thất bại!!</strong>',
						message: 'Không thể xoá sản phẩm!',
						
					},{
						type: 'danger',
						animate: {
							enter: 'animated fadeInRight',
							exit: 'animated fadeOutRight'
						},
						delay: 1500,
						allow_dismiss: false,
						placement: {
							from: 'top',
							align: 'right'
						},
					});
				}
			})
		}
	}
<?php echo '</script'; ?>
><?php }
}
