<?php
/* Smarty version 3.1.30, created on 2018-05-20 02:50:44
  from "C:\wamp64\www\doan_git\smarty\templates\layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b00e28427b015_30119054',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b29bd63727d2d2fb8d6a52caf7f244aeef6613d' => 
    array (
      0 => 'C:\\wamp64\\www\\doan_git\\smarty\\templates\\layout.tpl',
      1 => 1524903338,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:header.tpl' => 1,
    'file:nav_menu.tpl' => 1,
    'file:banner.tpl' => 1,
    'file:content.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5b00e28427b015_30119054 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- header -->
<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- //header -->

<!-- nav-menu -->
<?php $_smarty_tpl->_subTemplateRender("file:nav_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	
<!-- //nav-menu -->


<!-- banner -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14335465355b00e2842786f2_18943943', "banner");
?>

<!-- //banner -->
    
<!-- content -->
<?php $_smarty_tpl->_subTemplateRender("file:content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- //content -->

<!-- footer -->
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
/* {block "banner"} */
class Block_14335465355b00e2842786f2_18943943 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:banner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "banner"} */
}
