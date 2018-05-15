<div class="top-brands">
  <div class="container">
    <h3>Sản phẩm giảm giá</h3>
    <div class="agile_top_brands_grids"> 
    {foreach $danh_sach_san_pham_giam_gia as $san_pham}
      <div class="col-md-3 top_brand_left">
        <div class="hover14 column">
          <div class="agile_top_brand_left_grid">
            <div class="agile_top_brand_left_grid1" style="height:306px">
              <figure>
                <div class="snipcart-item block" >
                  <div class="snipcart-thumb"> <a href="detail.php?ma_san_pham={$san_pham->ProductID}"> 
                    <img src="public/images/product/{$san_pham->Image}" onerror="this.src='public/images/updating.jpg'; this.style.width='100%'" /> </a>
                    <p title="{$san_pham->ProductName}">{$san_pham->ProductName}</p>
                    <h4>{number_format($san_pham->Price)} VND 
                      
                      {if ($san_pham->Discount != 0)} <span> {number_format($san_pham->Price + ($san_pham->Price * $san_pham->Discount / 100))} VND </span> {/if} </h4>
                  </div>
                  
                   <div class="snipcart-details top_brand_home_details">
                    <fieldset>
                        <input  type="button" 
                                name="add_cart"
                                ma_san_pham="{$san_pham->ProductID}"
                                ten_san_pham="{$san_pham->ProductName}"
                                don_gia="{$san_pham->Price}"
                                hinh="{$san_pham->Image}"
                                value="Thêm giỏ hàng" 
                                class="button" 
                                onclick="Xu_ly_gio_hang(this)" />
                    </fieldset>
                  </div>
                  
                </div>
              </figure>
            </div>
          </div>
        </div>
      </div>
      {/foreach}
      <div class="clearfix"> </div>
    </div>
    <div class="clearfix"> </div>
    <hr />
    <h3>Sản phẩm bán chạy</h3>
    <div class="agile_top_brands_grids"> {foreach $danh_sach_san_pham_mua_nhieu as $san_pham}
      <div class="col-md-3 top_brand_left">
        <div class="hover14 column">
          <div class="agile_top_brand_left_grid">
            <div class="agile_top_brand_left_grid_pos"> <img src="public/images/offer.png" alt=" " class="img-responsive" /> </div>
            <div class="agile_top_brand_left_grid1" style="height:306px">
              <figure>
                <div class="snipcart-item block" >
                  <div class="snipcart-thumb"> <a href="detail.php?ma_san_pham={$san_pham->ProductID}"> 
                    <!--<object data="public/images/product/{$san_pham->Image}" type="image/jpg">
                                                <img title=" " alt=" " src="public/images/updating.jpg" style="width:100%" />
                                            </object>--> 
                    <img src="public/images/product/{$san_pham->Image}" onerror="this.src='public/images/updating.jpg'; this.style.width='100%'" /> </a>
                    <p data-toggle="tooltip" title="{$san_pham->ProductName}">{$san_pham->ProductName}</p>
                    <h4>{number_format($san_pham->Price)} VND 
                      
                      {if ($san_pham->Discount != 0)} <span> {number_format($san_pham->Price + ($san_pham->Price * $san_pham->Discount / 100))} VND </span> {/if} </h4>
                  </div>
                  
                   <div class="snipcart-details top_brand_home_details">
                    <fieldset>
                        <input  type="button" 
                                name="add_cart"
                                ma_san_pham="{$san_pham->ProductID}"
                                ten_san_pham="{$san_pham->ProductName}"
                                don_gia="{$san_pham->Price}"
                                hinh="{$san_pham->Image}"
                                value="Thêm giỏ hàng" 
                                class="button" 
                                onclick="Xu_ly_gio_hang(this)" />
                    </fieldset>
                  </div>
                  
                </div>
              </figure>
            </div>
          </div>
        </div>
      </div>
      {/foreach}
      <div class="clearfix"> </div>
    </div>
    <div class="clearfix"> </div>
    <hr />
    <h3>Sản phẩm nổi bật</h3>
    <div class="agile_top_brands_grids"> 
    {foreach $danh_sach_san_pham_noi_bat as $san_pham}
      <div class="col-md-3 top_brand_left">
        <div class="hover14 column">
          <div class="agile_top_brand_left_grid">
            <div class="agile_top_brand_left_grid_pos"> 
            	<img src="public/images/offer.png" alt=" " class="img-responsive" /> 
            </div>
            <div class="agile_top_brand_left_grid1" style="height:306px">
              <figure>
                <div class="snipcart-item block" >
                  <div class="snipcart-thumb"> <a href="detail.php?ma_san_pham={$san_pham->ProductID}"> 
                    <!--<object data="public/images/product/{$san_pham->Image}" type="image/jpg">
                                                <img title=" " alt=" " src="public/images/updating.jpg" style="width:100%" />
                                                
                                            </object>--> 
                    <img src="public/images/product/{$san_pham->Image}" onerror="this.src='public/images/updating.jpg'; this.style.width='100%'" /> </a>
                    <p data-toggle="tooltip" title="{$san_pham->ProductName}">{$san_pham->ProductName}</p>
                    <h4>{number_format($san_pham->Price)} VND 
                      
                      {if ($san_pham->Discount != 0)} <span> {number_format($san_pham->Price + ($san_pham->Price * $san_pham->Discount / 100))} VND </span> {/if} </h4>
                  </div>
                  
                   <div class="snipcart-details top_brand_home_details">
                    <fieldset>
                        <input  type="button" 
                                name="add_cart"
                                ma_san_pham="{$san_pham->ProductID}"
                                ten_san_pham="{$san_pham->ProductName}"
                                don_gia="{$san_pham->Price}"
                                hinh="{$san_pham->Image}"
                                value="Thêm giỏ hàng" 
                                class="button" 
                                onclick="Xu_ly_gio_hang(this)" />
                    </fieldset>
                  </div>
                  
                 
                </div>
              </figure>
            </div>
          </div>
        </div>
      </div>
      {/foreach}

      <div class="clearfix"> </div>

    </div>
  </div>
</div>
