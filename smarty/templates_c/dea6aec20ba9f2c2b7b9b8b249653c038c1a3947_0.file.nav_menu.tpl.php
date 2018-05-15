<?php
/* Smarty version 3.1.30, created on 2018-04-25 15:44:08
  from "C:\wamp64\www\sieuthimini\smarty\templates\nav_menu.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae0a248a29149_07628929',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dea6aec20ba9f2c2b7b9b8b249653c038c1a3947' => 
    array (
      0 => 'C:\\wamp64\\www\\sieuthimini\\smarty\\templates\\nav_menu.tpl',
      1 => 1524383039,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae0a248a29149_07628929 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="products-breadcrumb">
		<div class="container">
			<ul>
				<li><i class="fa fa-home" aria-hidden="true"></i><a href=".">Home</a><span>|</span></li>
				<li><?php echo $_smarty_tpl->tpl_vars['category_name']->value;?>
</li>
			</ul>
		</div>
	</div><?php }
}
