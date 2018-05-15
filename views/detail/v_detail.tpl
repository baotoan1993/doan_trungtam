<div class="banner">
  <div class="w3l_banner_nav_right">
    <div class="agileinfo_single">
      <h5>{$san_pham->ProductName}</h5>
      <div class="col-md-4 agileinfo_single_left"> 
        <!--<img id="example" src="public/images/product/full/{$san_pham->Image}" alt="{$san_pham->ProductName}" class="img-responsive" />--> 
        <!--<object  data="public/images/product/full/{$san_pham->Image}" type="image/jpg">
          <img id="example" title=" " alt=" " src="public/images/updating.jpg" style="width:100%" />
        </object>--> 
        <img id="example" src="public/images/product/full/{$san_pham->Image}" style="width:100%" onerror="this.src='public/images/updating.jpg'" /> </div>
      <div class="col-md-8 agileinfo_single_right">
        <div class="rating1"> <span class="starRating">
          <input id="rating5" type="radio" name="rating" value="5">
          <label for="rating5">5</label>
          <input id="rating4" type="radio" name="rating" value="4">
          <label for="rating4">4</label>
          <input id="rating3" type="radio" name="rating" value="3" checked>
          <label for="rating3">3</label>
          <input id="rating2" type="radio" name="rating" value="2">
          <label for="rating2">2</label>
          <input id="rating1" type="radio" name="rating" value="1">
          <label for="rating1">1</label>
          </span> </div>
        <div class="w3agile_description">
          <table class="table table-bordered">
            <tr>
              <th width="132"  style="color:black">Hãng sản xuất:</th>
              <td width="186" style="color:red"><h3>{$san_pham->SupplierName}</h3></td>
            </tr>
            <tr>
              <th style="color:black">Nhãn hiệu:</th>
              <td style="color:red"><h4>{$san_pham->ProductType}</h4></td>
            </tr>
            <tr>
              <th style="color:black">Đơn vị tính:</th>
              <td style="color:blue">{$san_pham->SubUnit}</td>
            </tr>
            <tr>
              <th style="color:black">Giá:</th>
              <td style="color:blue"><div class="snipcart-item block">
                <div class="snipcart-thumb agileinfo_single_right_snipcart">
                  <h4>{number_format($san_pham->Price)} VND 
                    {if ($san_pham->Discount != 0)} 
                    <span> {number_format($san_pham->Price + ($san_pham->Price * $san_pham->Discount / 100))} VND</span> 
                    {/if} 
                  </h4>
                </div>
              </td>
            </tr>
            <tr>
            	<td colspan="2">
                
                   <div class="snipcart-details top_brand_home_details">
                    <!-- <fieldset>
                        <input  type="button" 
                                name="add_cart"
                                ma_san_pham="{$san_pham->ProductID}"
                                ma_user="{$smarty.session.user->UserID}"
                                value="Thêm giỏ hàng" 
                                class="button" 
                                onclick="Xu_ly_gio_hang(this)" />
                    </fieldset>-->
					
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
                  
            </td>
            </tr>
          </table>
        
      </div>
    </div>
    <div class="clearfix"> </div>
  </div>
</div>
<div class="clearfix"></div>
</div>

<!-- brands -->
<div class="w3ls_w3l_banner_nav_right_grid w3ls_w3l_banner_nav_right_grid_popular">
  <div class="container">
    <h3>Sản phẩm cùng loại</h3>
    <div class="w3ls_w3l_banner_nav_right_grid1"> 
      <!-- <h6>food</h6> --> 
      {$i=0}
      {foreach $san_pham_cung_loai as $cung_loai}
      <div class="col-md-3 w3ls_w3l_banner_left" style="margin-bottom:20px">
        <div class="hover14 column">
          <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
            <div class="agile_top_brand_left_grid_pos"> <img src="public/images/offer.png" alt=" " class="img-responsive" /> </div>
            <div class="agile_top_brand_left_grid1" style="height:306px">
              <figure>
                <div class="snipcart-item block">
                  <div class="snipcart-thumb"> <a href="detail.php?ma_san_pham={$cung_loai->ProductID}">
                    <object data="public/images/product/{$cung_loai->Image}" type="image/jpg">
                      <img title=" " alt=" " src="public/images/updating.jpg" style="width:100%" />
                    </object>
                    </a>
                    <p>{$cung_loai->ProductName}</p>
                    <h4>{number_format($cung_loai->Price)} VND 
                      
                      {if ($cung_loai->Discount != 0)} 
                      	<span> 
                        	{number_format($cung_loai->Price + ($cung_loai->Price * $cung_loai->Discount / 100))} VND 
                        </span> 
                        {/if} 
                    </h4>
                  </div>
                   <div class="snipcart-details top_brand_home_details">
                    <fieldset>
                        <input  type="button" 
                                name="add_cart"
                                ma_san_pham="{$cung_loai->ProductID}"
                                ten_san_pham="{$cung_loai->ProductName}"
                                don_gia="{$cung_loai->Price}"
                                hinh="{$cung_loai->Image}"
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
      {$i=$i+1}
      {if ($i % 4 == 0)}
      <div class="clearfix"></div>
      {/if}
      {/foreach} </div>
  </div>
  {include file="../homepage/v_fresh.tpl"} </div>
<!-- //brands -->