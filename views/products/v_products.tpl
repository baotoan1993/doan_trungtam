<div class="banner"> 
<div class="container">
		<div class="top-brands">
			<div class="w3ls_w3l_banner_nav_right_grid w3ls_w3l_banner_nav_right_grid_sub">
				<h3 class="w3l_fruit">{$category_name}</h3>
				<div class="w3ls_w3l_banner_nav_right_grid1 w3ls_w3l_banner_nav_right_grid1_veg">
                {$i = 0}
                {foreach $danh_sach_san_pham as $san_pham}
                
					<div class="col-md-3 w3ls_w3l_banner_left w3ls_w3l_banner_left_asdfdfd" style="margin-bottom:20px">
						<div class="hover14 column">
						<div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
							<!--<div class="agile_top_brand_left_grid_pos">
								<img src="public/images/offer.png" alt=" " class="img-responsive" />
							</div>-->
							<div class="agile_top_brand_left_grid1" style="height:306px">
								<figure>
									<div class="snipcart-item block">
										<div class="snipcart-thumb" style="text-overflow: hidden">
											<a href="detail.php?ma_san_pham={$san_pham->ProductID}">
                                           
                                            <object data="public/images/product/{$san_pham->Image}" type="image/jpg">
                                                <img title=" " alt=" " src="public/images/updating.jpg" style="width:100%" />
                                            </object>
                                            
                                            </a>
											<p title="{$san_pham->ProductName}">{$san_pham->ProductName}</p>
											<h4>{number_format($san_pham->Price)} đ
                            	
                                                    {if ($san_pham->Discount != 0)}
                                                        <span>
                                                        {number_format($san_pham->Price + ($san_pham->Price * $san_pham->Discount / 100))} đ
                                                        </span>
                                                    {/if}
                                                
                                            </h4>
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
                    {$i = $i + 1}
                    {if ($i % 4 == 0)}
                    	<div class="clearfix"> </div>
                    {/if}
				{/foreach}
					<div class="clearfix"> </div>
                    <div style="text-align:center">{$page_list}</div>
				</div>
			</div>
            
		</div>
        
		<div class="clearfix"></div>
        </div>
        {include file="../homepage/v_fresh.tpl"}
	</div>