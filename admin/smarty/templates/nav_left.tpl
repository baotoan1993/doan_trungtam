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
                      <i class="fa fa-shopping-cart"></i>
                      <span>Đơn hàng</span>
                      <span class="menu-arrow arrow_carrot-right"></span>
                  </a>
        <ul class="sub">
          <li><a class="" href="order.php">Danh sách đơn hàng</a></li>
        </ul>
      </li>
      {if ($smarty.session.admin->Role == 1)}
      <li class="sub-menu">
        <a href="javascript:;" class="">
                      <i class="fa fa-user"></i>
                      <span>Quản lý</span>
                      <span class="menu-arrow arrow_carrot-right"></span>
                  </a>
        <ul class="sub">
          <li><a class="" href="manager.php">Thêm quản lý</a></li>
          <li><a class="" href="manager.php?edit" onclick="Thay_doi_quyen()">Thay đổi quyền</a></li>
        </ul>
      </li>
      {/if}
    </ul>
    <!-- sidebar menu end-->
  </div>
</aside>