<?php
/* Smarty version 3.1.30, created on 2018-05-21 13:50:10
  from "C:\wamp64\www\doan_trungtam\admin\smarty\templates\login\content.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b02ce92a89c99_73847545',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da478b925b10c9e1aba91475ef24873845f5f542' => 
    array (
      0 => 'C:\\wamp64\\www\\doan_trungtam\\admin\\smarty\\templates\\login\\content.tpl',
      1 => 1526910608,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b02ce92a89c99_73847545 (Smarty_Internal_Template $_smarty_tpl) {
?>
<body class="login-img3-body" style="font-family:Tahoma, Geneva, sans-serif">

  <div class="container">

    <form class="login-form" action="index.html" onSubmit="Kiem_tra_dang_nhap(event)">
      <div class="login-wrap">
        <p class="login-img"><i class="icon_lock_alt"></i></p>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
          <input type="text" class="form-control" placeholder="Username" name="username"  autofocus required>
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_key_alt"></i></span>
          <input type="password" class="form-control" placeholder="Password"  name="password" required>
        </div>
        <button class="btn btn-primary btn-lg btn-block" type="submit">Đăng nhập</button>
      </div>
    </form>
    <div class="text-right">
      <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->
        </div>
    </div>
  </div>


</body>

</html><?php }
}
