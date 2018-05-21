<?php
/* Smarty version 3.1.30, created on 2018-05-21 06:38:02
  from "E:\wamp64\www\doan_trungtam\admin\smarty\templates\layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b02694a3d8d81_79456257',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35dad158a59d839d18d2aae3f55a2f8a4659339d' => 
    array (
      0 => 'E:\\wamp64\\www\\doan_trungtam\\admin\\smarty\\templates\\layout.tpl',
      1 => 1526881977,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:header.tpl' => 1,
    'file:nav_left.tpl' => 1,
    'file:content.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5b02694a3d8d81_79456257 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:nav_left.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
