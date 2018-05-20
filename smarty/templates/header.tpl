	<div class="agileits_header">
		<div class="w3l_offers">
			<a href=".">Trang chủ</a>
		</div>
		<div class="w3l_search">
			<form action="find_product.php" method="get">
				<input type="text" name="ten_san_pham" 
                		onfocus="this.value = '';" 
                        placeholder="Tìm sản phẩm"
                        required
                        
                 />
				<input type="submit" value=" ">
			</form>
		</div>
        
		<div class="product_list_header">  
            <fieldset>
                <input type="button" 
                		id="btn_view_cart" 
                        value="Xem Giỏ Hàng"
                        class="button" 
                        onclick="clickMe(this)" />
                        
            </fieldset>
            
            <!--<fieldset>
                <input type="button" 
                		id="btn_view_cart" 
                        value="Xem Giỏ Hàng"
                        class="button" 
                        data-toggle="modal" 
                        data-target="#myModal"
                        onclick="Hien_thi_gio_hang(this)" />
                        
            </fieldset>-->
		</div>
        
		<div class="w3l_header_right">
			<ul>
				<li class="dropdown profile_details_drop">
					<a href="public/#" class="dropdown-toggle" data-toggle="dropdown">
                    	{if !isset($smarty.session.user)}
                    	<i class="fa fa-user" aria-hidden="true"></i> Tài khoản <span class="caret"></span>
                        {else}
                        <i class="fa fa-user" aria-hidden="true"></i> {$smarty.session.user->Name} <span class="caret"></span>
                        {/if}
                    </a>
					<div class="mega-dropdown-menu">
						<div class="w3ls_vegetables">
							<ul class="dropdown-menu drp-mnu">
                            	{if !isset($smarty.session.user)}
								<li><a href="login.php">Đăng nhập</a></li> 
								<li><a href="login.php">Đăng ký</a></li>
                                {else}
                                <li><a href="logout.php">Đăng xuất</a></li>
                                {/if}
							</ul>
						</div>                  
					</div>	
				</li>
			</ul>
		</div>
		<div class="w3l_header_right1">
			<h2><a href="public/mail.html">Liên hệ</a></h2>
		</div>
		<div class="clearfix"> </div>
	</div>
<!-- script-for sticky-nav -->
	<script>
	$(document).ready(function() {
		 var navoffeset=$(".agileits_header").offset().top;
		 $(window).scroll(function(){
			var scrollpos=$(window).scrollTop(); 
			if(scrollpos >=navoffeset){
				$(".agileits_header").addClass("fixed");
			}else{
				$(".agileits_header").removeClass("fixed");
			}
		 });
		 
	});
	</script>
<!-- //script-for sticky-nav -->
	<div class="logo_products">
		<div class="container">
			<div class="w3ls_logo_products_left">
				<h1><a href="."><span>Grocery</span> Store</a></h1>
			</div>
			<div class="w3ls_logo_products_left1">
				<ul class="special_items">
					<li><a href="bestdeal.php">Sản phẩm HOT</a><i>/</i></li>
					<li><a href="discount.php">Giảm giá</a><i>/</i></li>
					<li><a href="public/services.html">Liên hệ</a></li>
				</ul>
			</div>
			<div class="w3ls_logo_products_left1">
				<ul class="phone_email">
					<li><i class="fa fa-phone" aria-hidden="true"></i>(+84)123 456 789</li>
					<li><i class="fa fa-envelope-o" aria-hidden="true"></i>
                        <a href="public/mailto:store@grocery.com">
                            	nghiatoan@gmail.com
                        </a>
                    </li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
 <div id="cartModal">
 </div>
 
<!--<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Giỏ hàng hiện tại</h4>
        </div>
        <div class="modal-body" style="overflow:auto; height:400px">
          <table class="table table-striped" id="view_cart">
          	<thead>
            	<th width="80px">Hình</th>
 				<th width="300px">Tên sản phẩm</th>
                <th>Số lượng</th>
                <th>Đơn giá</th>
                <th></th>           	
            </thead>
            <tbody class="your_cart_show">
            	
            </tbody>
          </table>
        </div>
        <div class="modal-footer">
        	<a href="checkout.php" class="btn btn-success">Thanh Toán</a>
          <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
        </div>
      </div>
      
    </div>
  </div>-->

<script>
	function clickMe(e){
		if($('.modal-backdrop').length > 0){
			$('#myModal').modal("hide")
			return;
		}
			
		$.ajax({
			url: 'show_cart.php',
			method: 'post',
			success: function(xx){
				$('#cartModal').html(xx)
				$('#myModal').modal("show")
			}
		})
	}
</script>