<?php
/* Smarty version 3.1.30, created on 2018-05-23 11:14:24
  from "C:\wamp64\www\doan_trungtam\views\contact\v_contact.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b054d10f257a0_87498700',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64a2ba29ed491989ce5bb7a5e9ab15153c8bfffb' => 
    array (
      0 => 'C:\\wamp64\\www\\doan_trungtam\\views\\contact\\v_contact.tpl',
      1 => 1527074062,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b054d10f257a0_87498700 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="mail">
			<h3>Liên hệ với chúng tôi</h3>
			<div class="agileinfo_mail_grids">
				<div class="col-md-4 agileinfo_mail_grid_left">
					<ul>
						<li><i class="fa fa-home" aria-hidden="true"></i></li>
						<li>Địa chỉ<span>137E Nguyễn Chí Thanh P9,Q5.</span></li>
					</ul>
					<ul>
						<li><i class="fa fa-envelope" aria-hidden="true"></i></li>
						<li>email<span><a href="mailto:dangnghia25197@gmail.com">nghiatoan@gmail.com</a></span></li>
					</ul>
					<ul>
						<li><i class="fa fa-phone" aria-hidden="true"></i></li>
						<li>Gọi cho chúng tôi<span>(+84) 123 456 789</span>
                        <span>(+84) 122 458 8770</span>
                        </li>
					</ul>
				</div>
				<div class="col-md-8 agileinfo_mail_grid_right">
					<form action="#" method="post">
						<div class="col-md-6 wthree_contact_left_grid">
							<input type="text" name="Name" placeholder="Họ tên" required>
							<input type="email" name="Email" placeholder="Email của bạn"required>
						</div>
						<div class="col-md-6 wthree_contact_left_grid">
							<input type="text" name="Telephone" placeholder="Số điện thoại" required>
							<input type="text" name="Subject" placeholder="Vấn đề liên hệ" required>
						</div>
						
						<textarea name="Message" placeholder="Hãy để lại nội dung để chúng tôi có thể hỗ trợ bạn!" required></textarea>
						<input type="submit" value="Gửi" name="Btn_Gui_Lien_He">
						<input type="reset" value="Làm mới" name="Btn_Lam_Moi_Lien_He">
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div><?php }
}
