<?php
/* Smarty version 3.1.30, created on 2018-05-21 13:03:45
  from "E:\wamp64\www\doan_trungtam\smarty\templates\nav_menu.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b02614138f0e3_99996842',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8cb111c29a118d8677325bc1a5c43f6aa8ea16c' => 
    array (
      0 => 'E:\\wamp64\\www\\doan_trungtam\\smarty\\templates\\nav_menu.tpl',
      1 => 1526882004,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b02614138f0e3_99996842 (Smarty_Internal_Template $_smarty_tpl) {
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