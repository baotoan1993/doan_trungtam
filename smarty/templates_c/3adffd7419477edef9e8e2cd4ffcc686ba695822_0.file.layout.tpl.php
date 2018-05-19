<?php
/* Smarty version 3.1.30, created on 2018-05-16 12:31:19
  from "D:\wamp64\www\doan_trungtam\smarty\templates\layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5afc2497734e66_73479678',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3adffd7419477edef9e8e2cd4ffcc686ba695822' => 
    array (
      0 => 'D:\\wamp64\\www\\doan_trungtam\\smarty\\templates\\layout.tpl',
      1 => 1526471300,
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
function content_5afc2497734e66_73479678 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_120775afc249770ee35_47146670', "banner");
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
class Block_120775afc249770ee35_47146670 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:banner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "banner"} */
}
