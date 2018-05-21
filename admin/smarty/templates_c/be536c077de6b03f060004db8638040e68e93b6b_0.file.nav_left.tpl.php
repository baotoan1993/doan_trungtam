<?php
/* Smarty version 3.1.30, created on 2018-05-20 09:37:22
  from "C:\wamp64\www\doan_git\admin\smarty\templates\nav_left.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b0141d2d85a46_33950501',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be536c077de6b03f060004db8638040e68e93b6b' => 
    array (
      0 => 'C:\\wamp64\\www\\doan_git\\admin\\smarty\\templates\\nav_left.tpl',
      1 => 1526808783,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b0141d2d85a46_33950501 (Smarty_Internal_Template $_smarty_tpl) {
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
