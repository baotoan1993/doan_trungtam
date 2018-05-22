<?php
/* Smarty version 3.1.30, created on 2018-05-22 15:51:02
  from "C:\wamp64\www\doan_trungtam\smarty\templates\banner_right.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b043c667eb892_69947462',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb4054cdf49fe229990078fb0dc34d1bd2c13933' => 
    array (
      0 => 'C:\\wamp64\\www\\doan_trungtam\\smarty\\templates\\banner_right.tpl',
      1 => 1526847466,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:banner_right_content.tpl' => 1,
  ),
),false)) {
function content_5b043c667eb892_69947462 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9358447375b043c667ea784_37637767', "banner_right_content");
?>


<div class="clearfix"></div>
</div><?php }
/* {block "banner_right_content"} */
class Block_9358447375b043c667ea784_37637767 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:banner_right_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "banner_right_content"} */
}
