<?php 
$ten = $_POST['ten'];
include("models/m_product.php");
$m_product = new M_product();
$danh_sach_san_pham = $m_product->Lay_danh_sach_san_pham_theo_ten($ten, 0, 16);
?>

<?php if($danh_sach_san_pham):?>

<div class="banner">       
		<div class="w3l_banner_nav_right">
			<div class="w3ls_w3l_banner_nav_right_grid w3ls_w3l_banner_nav_right_grid_sub">
				<h3 class="w3l_fruit"><?php echo "Sản phẩm tìm thấy" ?></h3>
				<div class="w3ls_w3l_banner_nav_right_grid1 w3ls_w3l_banner_nav_right_grid1_veg">
                <?php $i = 0 ?>
                <?php foreach( $danh_sach_san_pham as $san_pham): ?>
                
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
											<a href="detail.php?ma_san_pham=<?php echo $san_pham->ProductID ?>">
                                           
                                            <object data="public/images/product/<?php echo $san_pham->Image ?>" type="image/jpg">
                                                <img title=" " alt=" " src="public/images/updating.jpg" style="width:100%" />
                                            </object>
                                            
                                            </a>
											<p><?php echo $san_pham->ProductName ?></p>
											<h4><?php echo number_format($san_pham->Price) ?> đ
                            	
                                                    <?php if ($san_pham->Discount != NULL): ?>
                                                        <span>
                                                        <?php echo number_format($san_pham->Price + ($san_pham->Price * $san_pham->Discount / 100)) ?> đ
                                                        </span>
                                                    <?php endif ?>
                                                
                                            </h4>
										</div>
										<div class="snipcart-details">
											<form action="#" method="post">
                                                <fieldset>
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="business" value=" " />
                                                    <input type="hidden" name="item_id" value="<?php echo $san_pham->ProductID ?>" />
                                                    <input type="hidden" name="item_name" value="<?php echo $san_pham->ProductName ?>" />
                                                    <input type="hidden" name="item_img" value="<?php echo $san_pham->Image ?>" />
                                                    <input type="hidden" name="amount" value="<?php echo $san_pham->Price ?>" />
                                                    <input type="hidden" name="discount_amount" value="" />
                                                    <input type="hidden" name="currency_code" value="VND" />
                                                    <input type="hidden" name="return" value=" " />
                                                    <input type="hidden" name="cancel_return" value=" " />
                                                    <input type="submit" name="submit" value="Thêm giỏ hàng" class="button" />
                                                </fieldset>
                                            </form>
										</div>
									</div>
								</figure>
							</div>
						</div>
						</div>
					</div>
                    <?php $i = $i + 1 ?>
                    <?php if ($i % 4 == 0): ?>
                    	<div class="clearfix"> </div>
                    <?php endif ?>
				<?php endforeach ?>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>

<?php else: ?>
<div class="banner">       
    <div class="w3l_banner_nav_right">
        <div class="w3ls_w3l_banner_nav_right_grid w3ls_w3l_banner_nav_right_grid_sub">
        	<h3 class="w3l_fruit"><?php echo "Sản phẩm không tìm thấy" ?></h3>
        </div>
    </div>
</div>
<div class="clearfix"></div>
<?php endif ?>