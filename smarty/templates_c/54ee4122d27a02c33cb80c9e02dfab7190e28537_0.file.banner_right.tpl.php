<?php
/* Smarty version 3.1.30, created on 2018-04-28 08:14:43
  from "C:\wamp64\www\sieuthimini\smarty\templates\banner_right.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae42d7374fda2_81952321',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '54ee4122d27a02c33cb80c9e02dfab7190e28537' => 
    array (
      0 => 'C:\\wamp64\\www\\sieuthimini\\smarty\\templates\\banner_right.tpl',
      1 => 1524903261,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae42d7374fda2_81952321 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="w3l_banner_nav_right">
  <section class="slider">
    <div class="flexslider">
      <ul class="slides">
        <li>
          <div class="w3l_banner_nav_right_banner">
            <h3>Make your <span>food</span> with Spicy.</h3>
            <div class="more"> <a href="public/products.html" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a> </div>
          </div>
        </li>
        <li>
          <div class="w3l_banner_nav_right_banner1">
            <h3>Make your <span>food</span> with Spicy.</h3>
            <div class="more"> <a href="public/products.html" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a> </div>
          </div>
        </li>
        <li>
          <div class="w3l_banner_nav_right_banner2">
            <h3>upto <i>50%</i> off.</h3>
            <div class="more"> <a href="public/products.html" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a> </div>
          </div>
        </li>
      </ul>
    </div>
  </section>
  <!-- flexSlider -->
  <link rel="stylesheet" href="public/css/flexslider.css" type="text/css" media="screen" property="" />
  <?php echo '<script'; ?>
 defer src="public/js/jquery.flexslider.js"><?php echo '</script'; ?>
> 
  <?php echo '<script'; ?>
 type="text/javascript">
				$(window).load(function(){
				  $('.flexslider').flexslider({
					animation: "slide",
					start: function(slider){
					  $('body').removeClass('loading');
					}
				  });
				});
			  <?php echo '</script'; ?>
> 
  <!-- //flexSlider --> 
</div>
<div class="clearfix"></div>
</div><?php }
}
