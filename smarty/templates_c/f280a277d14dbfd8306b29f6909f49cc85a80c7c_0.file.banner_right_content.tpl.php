<?php
/* Smarty version 3.1.30, created on 2018-05-17 14:14:06
  from "D:\wamp64\www\doan_trungtam\smarty\templates\banner_right_content.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5afd8e2ec12748_45957286',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f280a277d14dbfd8306b29f6909f49cc85a80c7c' => 
    array (
      0 => 'D:\\wamp64\\www\\doan_trungtam\\smarty\\templates\\banner_right_content.tpl',
      1 => 1526566415,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5afd8e2ec12748_45957286 (Smarty_Internal_Template $_smarty_tpl) {
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
</div><?php }
}
