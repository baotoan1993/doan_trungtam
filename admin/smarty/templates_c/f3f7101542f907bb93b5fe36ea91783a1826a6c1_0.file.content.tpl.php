<?php
/* Smarty version 3.1.30, created on 2018-05-21 06:38:02
  from "E:\wamp64\www\doan_trungtam\admin\smarty\templates\content.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b02694a57f861_44271140',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3f7101542f907bb93b5fe36ea91783a1826a6c1' => 
    array (
      0 => 'E:\\wamp64\\www\\doan_trungtam\\admin\\smarty\\templates\\content.tpl',
      1 => 1526881977,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:summary.tpl' => 1,
  ),
),false)) {
function content_5b02694a57f861_44271140 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="public/index.html"><?php echo $_smarty_tpl->tpl_vars['main_menu']->value;?>
</a></li>
              <li><i class="fa fa-laptop"></i><?php echo $_smarty_tpl->tpl_vars['sub_title']->value;?>
</li>
            </ol>
          </div>
        </div>

        <!--<?php $_smarty_tpl->_subTemplateRender("file:summary.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
-->

        <!--/.row-->


        <!-- Today status end -->



              	<?php if ((isset($_smarty_tpl->tpl_vars['view']->value))) {?>
                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['view']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

                <?php }?>
        
      </section>
    </section><?php }
}
