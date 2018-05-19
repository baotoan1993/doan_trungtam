<?php
/* Smarty version 3.1.30, created on 2018-05-17 14:46:54
  from "D:\wamp64\www\doan_trungtam\smarty\templates\banner_right.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5afd95de5f5362_20194111',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '22ff65a7cc3480d24a520888184318a0a44ee56a' => 
    array (
      0 => 'D:\\wamp64\\www\\doan_trungtam\\smarty\\templates\\banner_right.tpl',
      1 => 1526568307,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:banner_right_content.tpl' => 1,
  ),
),false)) {
function content_5afd95de5f5362_20194111 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_262265afd95de5f0748_41208901', "banner_right_content");
?>


<div class="clearfix"></div>
</div><?php }
/* {block "banner_right_content"} */
class Block_262265afd95de5f0748_41208901 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:banner_right_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "banner_right_content"} */
}
