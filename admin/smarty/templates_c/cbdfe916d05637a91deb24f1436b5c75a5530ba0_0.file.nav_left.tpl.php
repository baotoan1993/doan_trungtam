<?php
/* Smarty version 3.1.30, created on 2018-05-21 06:38:02
  from "E:\wamp64\www\doan_trungtam\admin\smarty\templates\nav_left.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b02694a51b358_96061914',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cbdfe916d05637a91deb24f1436b5c75a5530ba0' => 
    array (
      0 => 'E:\\wamp64\\www\\doan_trungtam\\admin\\smarty\\templates\\nav_left.tpl',
      1 => 1526881977,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b02694a51b358_96061914 (Smarty_Internal_Template $_smarty_tpl) {
?>
<aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="active">
            <a class="" href=".">
                          <i class="icon_house_alt"></i>
                          <span>QUẢN LÝ</span>
                      </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Sản phẩm</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="product.php">Danh sách sản phẩm</a></li>
              <li><a class="" href="show_add_product.php">Thêm sản phẩm</a></li>
            </ul>
          </li>
          
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_desktop"></i>
                          <span>Loại hàng</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="category.php">Danh sách loại hàng</a></li>
            </ul>
          </li>
          
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="fa fa-user"></i>
                          <span>Đơn hàng</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="order.php">Danh sách đơn hàng</a></li>
            </ul>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside><?php }
}
