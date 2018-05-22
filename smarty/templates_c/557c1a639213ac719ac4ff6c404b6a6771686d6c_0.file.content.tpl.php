<?php
/* Smarty version 3.1.30, created on 2018-05-22 15:51:02
  from "C:\wamp64\www\doan_trungtam\smarty\templates\content.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b043c66895a35_52233868',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '557c1a639213ac719ac4ff6c404b6a6771686d6c' => 
    array (
      0 => 'C:\\wamp64\\www\\doan_trungtam\\smarty\\templates\\content.tpl',
      1 => 1526847466,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b043c66895a35_52233868 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="main_content">
<?php if (isset($_smarty_tpl->tpl_vars['view']->value)) {?>
	<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['view']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<?php }?>

<!-- Chat BOX-->

<?php echo '<script'; ?>
 type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: 'ea9ea2d6-bbc6-41a8-b95d-3c9dcb61a333', f: true }); done = true; } }; })();<?php echo '</script'; ?>
>



<!--// End CHAT BOX-->
</div><?php }
}
