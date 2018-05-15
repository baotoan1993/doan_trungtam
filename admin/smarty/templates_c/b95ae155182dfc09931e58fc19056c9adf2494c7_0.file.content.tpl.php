<?php
/* Smarty version 3.1.30, created on 2018-05-01 09:21:32
  from "C:\wamp64\www\sieuthimini\admin\smarty\templates\content.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae8319cbdf084_77662208',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b95ae155182dfc09931e58fc19056c9adf2494c7' => 
    array (
      0 => 'C:\\wamp64\\www\\sieuthimini\\admin\\smarty\\templates\\content.tpl',
      1 => 1525166490,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:summary.tpl' => 1,
  ),
),false)) {
function content_5ae8319cbdf084_77662208 (Smarty_Internal_Template $_smarty_tpl) {
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



        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2><i class="fa fa-flag-o red"></i><strong><?php echo $_smarty_tpl->tpl_vars['content_heading']->value;?>
</strong></h2>
              </div>
              <div class="panel-body">
              	<?php if ((isset($_smarty_tpl->tpl_vars['view']->value))) {?>
                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['view']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

                <?php }?>
              </div>

            </div>
          </div>
        </div>
      </section>
    </section><?php }
}
