<?php
/* Smarty version 3.1.30, created on 2018-05-20 02:50:44
  from "C:\wamp64\www\doan_git\smarty\templates\banner_right.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b00e2845c28f6_59952599',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '604c72214b9bef48bf5afce483c3cc080092dd66' => 
    array (
      0 => 'C:\\wamp64\\www\\doan_git\\smarty\\templates\\banner_right.tpl',
      1 => 1526784518,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:banner_right_content.tpl' => 1,
  ),
),false)) {
function content_5b00e2845c28f6_59952599 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10319109875b00e2845c1877_27986872', "banner_right_content");
?>


<div class="clearfix"></div>
</div><?php }
/* {block "banner_right_content"} */
class Block_10319109875b00e2845c1877_27986872 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:banner_right_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "banner_right_content"} */
}
