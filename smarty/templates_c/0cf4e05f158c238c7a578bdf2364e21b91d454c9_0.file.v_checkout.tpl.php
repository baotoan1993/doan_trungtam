<?php
/* Smarty version 3.1.30, created on 2018-05-16 12:31:19
  from "D:\wamp64\www\doan_trungtam\views\checkout\v_checkout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5afc2497efa1e9_15263408',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0cf4e05f158c238c7a578bdf2364e21b91d454c9' => 
    array (
      0 => 'D:\\wamp64\\www\\doan_trungtam\\views\\checkout\\v_checkout.tpl',
      1 => 1526471300,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5afc2497efa1e9_15263408 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
  <h1 style="text-align:center">GIỎ HÀNG</h1>
  <div class="checkout-right">
    <table class="timetable_sub">
      <thead>
      <th width="80px">Hình</th>
        <th width="600px">Tên sản phẩm</th>
        <th style="text-align:center">Số lượng</th>
        <th>Đơn giá</th>
        <th></th>
        </thead>
      <tbody class="your_cart_show">
      <?php $_smarty_tpl->_assignInScope('tongtien', 0);
?>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['danh_sach_gio_hang']->value, 'san_pham');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['san_pham']->value) {
?>
      <tr>
        <td class="invert-image" width="70px"><img style="width:100%" src="public/images/product/<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->Image;?>
" onerror="this.src='public/images/updating.jpg'; this.style.width='100%'" /></td>
        <td class="invert">
        	<a href="detail.php?ma_san_pham=<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ProductID;?>
">
        		<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ProductName;?>

            </a>
        </td>
        <td style="text-align:center;"><div class="quantity">
            <div class="quantity-select">
              <div class="entry value-minus"
                        ProductID="<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ProductID;?>
" 
                        UserID="<?php echo $_SESSION['user']->UserID;?>
"
                        Quantity="<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->Quantity;?>
"
                        onclick="Giam_so_luong(this)" >&nbsp; </div>
              <div class="entry value"><span><?php echo $_smarty_tpl->tpl_vars['san_pham']->value->Quantity;?>
</span></div>
              <div class="entry value-plus active"
                        ProductID="<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ProductID;?>
" 
                        UserID="<?php echo $_SESSION['user']->UserID;?>
"
                        Quantity="<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->Quantity;?>
"
                        onclick="Tang_so_luong(this)" >&nbsp; </div>
            </div>
          </div></td>
        <td><?php echo number_format($_smarty_tpl->tpl_vars['san_pham']->value->Price);?>
 đ</td>
        <td class="invert">
            <button onclick="Xoa_hang_trong_gio(this)" 
                    ProductID='<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ProductID;?>
'
                    class="btn btn-warning" >
                X
            </button>
        </td>
      </tr>
      <?php $_smarty_tpl->_assignInScope('tongtien', $_smarty_tpl->tpl_vars['tongtien']->value+$_smarty_tpl->tpl_vars['san_pham']->value->Price*$_smarty_tpl->tpl_vars['san_pham']->value->Quantity);
?>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

      <tr style="background:#FF9">
        <td colspan="3" style="text-align: center">TỔNG CỘNG</td>
        <td style="color:#F00"><h3><?php echo number_format($_smarty_tpl->tpl_vars['tongtien']->value);?>
 đ</h3></td>
        <td>
    </tr>
      </tbody>
      
    </table>
  </div>
  <div class="checkout-left" style="margin-bottom:10px; float:right; width:100%; text-align:right">
  	<?php if ((!isset($_SESSION['user']))) {?>
    <button onclick="location.href='login.php'" class="btn btn-danger" style="padding:10px; width:30%;">ĐĂNG NHẬP THANH TOÁN</button>
    <div class="clearfix"> </div>
    <?php } else { ?>
    <button onclick="Thanh_toan_hoa_don(<?php echo $_SESSION['user']->UserID;?>
)" class="btn btn-danger" style="padding:10px; width:30%;">THANH TOÁN</button>
    <div class="clearfix"> </div>
    <?php }?>
  </div>
</div>
<!-- //about -->
</div>
<div class="clearfix"></div>

<?php echo '<script'; ?>
>
	function Thanh_toan_hoa_don(UserID){
		$.ajax({
			url: 'payment.php',
			method: 'post',
		}).done(function(res){
			console.log(res)
			if(res == '1'){
				$('.product_list_header').notify("Thanh toán hoá đơn thành công!!!", "success", {
					showAnimation: 'slideDown',
					autoHide: true,
					autoHideDelay: 1000,
					showDuration: 200,
					hideAnimation: 'slideUp',
				});
				
				window.setTimeout(function(){
					window.location.href = ".";		
				}, 3000);
			}
		})
	}
<?php echo '</script'; ?>
>
<?php }
}
