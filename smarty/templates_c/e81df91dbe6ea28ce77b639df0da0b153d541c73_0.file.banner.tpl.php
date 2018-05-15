<?php
/* Smarty version 3.1.30, created on 2018-04-28 08:16:29
  from "C:\wamp64\www\sieuthimini\smarty\templates\banner.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae42ddd8ac939_48938408',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e81df91dbe6ea28ce77b639df0da0b153d541c73' => 
    array (
      0 => 'C:\\wamp64\\www\\sieuthimini\\smarty\\templates\\banner.tpl',
      1 => 1524903357,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:banner_right.tpl' => 1,
  ),
),false)) {
function content_5ae42ddd8ac939_48938408 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="banner">
  <div class="w3l_banner_nav_left">
    <nav class="navbar nav_bottom">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header nav_2">
      <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs"> 
      	<span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> 
        <span class="icon-bar"></span> 
      </button>
    </div>
    
    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
      <ul class="nav navbar-nav nav_1">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['danh_sach_loai_hang']->value, 'loai1');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['loai1']->value) {
?>
        <?php if (($_smarty_tpl->tpl_vars['loai1']->value->CategoryParentID == NULL)) {?>
        <li class="dropdown mega-dropdown active"> 
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <?php echo $_smarty_tpl->tpl_vars['loai1']->value->CategoryName;?>
<span class="caret"></span>
            </a>
          <div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
            <div class="w3ls_vegetables">
              <ul>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['danh_sach_loai_hang']->value, 'loai2');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['loai2']->value) {
?>
                <?php if (($_smarty_tpl->tpl_vars['loai2']->value->CategoryParentID == $_smarty_tpl->tpl_vars['loai1']->value->CategoryID)) {?>
                <li style="margin-bottom:0"><a href="products.php?ma_loai=<?php echo $_smarty_tpl->tpl_vars['loai2']->value->CategoryID;?>
"><?php echo $_smarty_tpl->tpl_vars['loai2']->value->CategoryName;?>
</a></li>
                <hr style="margin:0" />
                <?php }?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

              </ul>
            </div>
          </div>
        </li>
        <?php }?>
        
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

      </ul>
    </div>
  </div>
  </nav>
</div>

<!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@2 -->

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8316079875ae42ddd8ac0c9_72142759', "banner_right");
}
/* {block "banner_right"} */
class Block_8316079875ae42ddd8ac0c9_72142759 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:banner_right.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "banner_right"} */
}
