<?php
/* Smarty version 3.1.30, created on 2018-05-21 13:03:45
  from "E:\wamp64\www\doan_trungtam\smarty\templates\banner_right.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b0261416396d8_03911048',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f545c06fd3882db0a027033db5642051459fe8b' => 
    array (
      0 => 'E:\\wamp64\\www\\doan_trungtam\\smarty\\templates\\banner_right.tpl',
      1 => 1526882004,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:banner_right_content.tpl' => 1,
  ),
),false)) {
function content_5b0261416396d8_03911048 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_48925b026141633fb6_60302853', "banner_right_content");
?>


<div class="clearfix"></div>
</div><?php }
/* {block "banner_right_content"} */
class Block_48925b026141633fb6_60302853 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:banner_right_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "banner_right_content"} */
}
