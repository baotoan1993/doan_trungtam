<?php
/* Smarty version 3.1.30, created on 2018-05-02 12:45:39
  from "C:\wamp64\www\sieuthimini\admin\smarty\templates\nav_left.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae9b2f34cfc31_67918093',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8b9f20c6446a1a2ee2e3bda4847da00dd50f5e3' => 
    array (
      0 => 'C:\\wamp64\\www\\sieuthimini\\admin\\smarty\\templates\\nav_left.tpl',
      1 => 1525265044,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae9b2f34cfc31_67918093 (Smarty_Internal_Template $_smarty_tpl) {
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
              <li><a class="" href="public/general.html">Danh sách loại hàng</a></li>
              <li><a class="" href="public/buttons.html">Thêm loại hàng</a></li>
            </ul>
          </li>
          <li>
            <a class="" href="public/widgets.html">
                          <i class="icon_genius"></i>
                          <span>Widgets</span>
                      </a>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside><?php }
}
