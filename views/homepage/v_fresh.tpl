<div class="fresh-vegetables">
  <div class="container">
    <h3>TOP Thương hiệu</h3>
    <div class="w3l_fresh_vegetables_grids">
      <div class="col-md-3 w3l_fresh_vegetables_grid w3l_fresh_vegetables_grid_left">
        <div class="w3l_fresh_vegetables_grid2">
          <ul>
          {foreach $danh_sach_thuong_hieu as $thuong_hieu}
            <li><i class="fa fa-check" aria-hidden="true"></i>
            	<a href="supplier.php?ma_thuong_hieu={$thuong_hieu->SupplierID}">{$thuong_hieu->SupplierName}</a>
            </li>
          {/foreach}
          </ul>
        </div>
      </div>
      <div class="col-md-9 w3l_fresh_vegetables_grid_right">
        <div class="col-md-4 w3l_fresh_vegetables_grid">
          <div class="w3l_fresh_vegetables_grid1"> <img src="public/images/8.jpg" alt=" " class="img-responsive" /> </div>
        </div>
        <div class="col-md-4 w3l_fresh_vegetables_grid">
          <div class="w3l_fresh_vegetables_grid1">
            <div class="w3l_fresh_vegetables_grid1_rel"> <img src="public/images/7.jpg" alt=" " class="img-responsive" />
              <div class="w3l_fresh_vegetables_grid1_rel_pos">
                <div class="more m1"> <a href="public/products.html" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Mua ngay</a> </div>
              </div>
            </div>
          </div>
          <div class="w3l_fresh_vegetables_grid1_bottom"> <img src="public/images/10.jpg" alt=" " class="img-responsive" />
            <div class="w3l_fresh_vegetables_grid1_bottom_pos">
              <h5>Đặc biệt !!!</h5>
            </div>
          </div>
        </div>
        <div class="col-md-4 w3l_fresh_vegetables_grid">
          <div class="w3l_fresh_vegetables_grid1"> <img src="public/images/9.jpg" alt=" " class="img-responsive" /> </div>
          <div class="w3l_fresh_vegetables_grid1_bottom"> <img src="public/images/11.jpg" alt=" " class="img-responsive" /> </div>
        </div>
        <div class="clearfix"> </div>
        <div class="agileinfo_move_text">
          <div class="agileinfo_marquee">
            <h4>Giảm đến <span class="blink_me">20% </span> cho lần mua sắm đầu tiên!!!</h4>
          </div>
          <div class="agileinfo_breaking_news"> <span> </span> </div>
          <div class="clearfix"></div>
        </div>
      </div>
      <div class="clearfix"> </div>
    </div>
  </div>
</div>
