<?php
/* Smarty version 3.1.30, created on 2018-05-17 13:30:45
  from "D:\wamp64\www\doan_trungtam\views\login\v_login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5afd84055591d2_44640692',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac3aef1e84f68d9e61522d2b196bf7893bb52ba9' => 
    array (
      0 => 'D:\\wamp64\\www\\doan_trungtam\\views\\login\\v_login.tpl',
      1 => 1526471300,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5afd84055591d2_44640692 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="banner">
  <div class="w3l_banner_nav_right"> 
    <!-- login -->
    <div class="w3_login">
    	<?php if (isset($_smarty_tpl->tpl_vars['fail_status_login']->value)) {?>
    	<?php if ($_smarty_tpl->tpl_vars['fail_status_login']->value == 0) {?>
        	<div class="alert alert-danger" style="text-align:center">
              <strong>Đăng nhập thất bại!</strong> Kiểm tra lại thông tin đăng nhập.
            </div>
        <?php }?>
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['fail_status_register']->value)) {?>
    	<?php if ($_smarty_tpl->tpl_vars['fail_status_register']->value == 1) {?>
        	<div class="alert alert-danger" style="text-align:center">
              <strong>Đăng ký thất bại!</strong> Tài khoản đã tồn tại.
            </div>
        <?php }?>
        <?php }?>
      <h3>Đăng nhập - Đăng ký</h3>
      <div class="w3_login_module">
        <div class="module form-module">
          <div class="toggle"><i class="fa fa-times fa-pencil"></i>
            <div class="tooltip">Thay đổi</div>
          </div>
          <?php if (!isset($_SESSION['user'])) {?>
          <div class="form">
            <h2>Đăng nhập tài khoản</h2>           
            <form onsubmit="event.preventDefault(); Kiem_tra_dang_nhap()">
              <input type="email" name="l_Email" placeholder="Email" required>
              <input type="password" name="l_Password" placeholder="Mật khẩu" required>
              <input type="submit" value="Đăng nhập" id="btnLogin">
            </form>
          </div>
          <?php }?>
          <div class="form">
            <h2>Đăng ký tài khoản</h2>
            <form action="register_check.php" method="post">
              <input type="text" name="r_Username" placeholder="Họ tên" required>
              <input type="email" name="r_Email" placeholder="Email" required>
              <input type="password" name="r_Password" placeholder="Mật khẩu" required>
              <input type="text" name="r_Phone" placeholder="Điện thoại">
              <input type="text" name="r_Mobile" placeholder="Di động" required>
              <input type="text" name="r_Address" placeholder="Địa chỉ">
              <input type="submit" value="Đăng ký" id="btnRegister">
            </form>
          </div>
          <!--<div class="cta"><a href="#">Quên mật khẩu?</a></div>-->
        </div>
      </div>
      <?php echo '<script'; ?>
>
		$('.toggle').click(function(){
		  // Switches the Icon
		  $(this).children('i').toggleClass('fa-pencil');
		  // Switches the forms  
		  $('.form').animate({
			height: "toggle",
			'padding-top': 'toggle',
			'padding-bottom': 'toggle',
			opacity: "toggle"
		  }, "slow");
		});
	<?php echo '</script'; ?>
> 	
    <?php echo '<script'; ?>
>
    	$(document).ready(function(e) {

        });
    <?php echo '</script'; ?>
>
    </div>
    <!-- //login --> 
  </div>
  <div class="clearfix"></div>
</div>
<?php }
}
