<?php
/* Smarty version 3.1.30, created on 2018-05-21 06:04:48
  from "E:\wamp64\www\doan_trungtam\views\homepage\v_homepage.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b02618047b784_94742073',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '911562d83b2b7b117f739d617f39c02046e20400' => 
    array (
      0 => 'E:\\wamp64\\www\\doan_trungtam\\views\\homepage\\v_homepage.tpl',
      1 => 1526882004,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/homepage/v_banner_homepage.tpl' => 1,
    'file:views/homepage/v_top-brands.tpl' => 1,
    'file:views/homepage/v_fresh.tpl' => 1,
  ),
),false)) {
function content_5b02618047b784_94742073 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div>
<!-- banner homepage -->
<?php $_smarty_tpl->_subTemplateRender("file:views/homepage/v_banner_homepage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    
<!-- top-brands -->
<?php $_smarty_tpl->_subTemplateRender("file:views/homepage/v_top-brands.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- //top-brands -->

<!-- fresh-vegetables -->
<?php $_smarty_tpl->_subTemplateRender("file:views/homepage/v_fresh.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- //fresh-vegetables -->
</div><?php }
}
