<?php
/* Smarty version 3.1.30, created on 2018-05-20 02:51:04
  from "C:\wamp64\www\doan_git\views\contact\v_contact.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b00e298418c66_16261258',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '308bf33e3256b928bb6072e9e93e5a6c9af38dc6' => 
    array (
      0 => 'C:\\wamp64\\www\\doan_git\\views\\contact\\v_contact.tpl',
      1 => 1526784518,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b00e298418c66_16261258 (Smarty_Internal_Template $_smarty_tpl) {
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
							<input type="text" name="Name" value="Tên*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Tên*';}" required>
							<input type="email" name="Email" value="Email*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email*';}" required>
						</div>
						<div class="col-md-6 wthree_contact_left_grid">
							<input type="text" name="Telephone" value="Điện thoại*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Điện thoại*';}" required>
							<input type="text" name="Subject" value="Chủ đề*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Chủ đề*';}" required>
						</div>
						<div class="clearfix"> </div>
						<textarea  name="Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nội dung...';}" required>Nội dung...</textarea>
						<input type="submit" value="Gửi" name="Btn_Gui_Lien_He">
						<input type="reset" value="Làm mới" name="Btn_Lam_Moi_Lien_He">
					</form>
                    
				</div>
				<div class="clearfix"> </div>
			</div>
		</div><?php }
}