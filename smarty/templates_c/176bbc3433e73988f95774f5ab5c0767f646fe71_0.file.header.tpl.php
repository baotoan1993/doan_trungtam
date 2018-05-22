<?php
/* Smarty version 3.1.30, created on 2018-05-22 16:37:00
  from "C:\wamp64\www\doan_trungtam\smarty\templates\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b04472c423557_25112961',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '176bbc3433e73988f95774f5ab5c0767f646fe71' => 
    array (
      0 => 'C:\\wamp64\\www\\doan_trungtam\\smarty\\templates\\header.tpl',
      1 => 1526847466,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b04472c423557_25112961 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
                    	<?php if (!isset($_SESSION['user'])) {?>
                    	<i class="fa fa-user" aria-hidden="true"></i> Tài khoản <span class="caret"></span>
                        <?php } else { ?>
                        <i class="fa fa-user" aria-hidden="true"></i> <?php echo $_SESSION['user']->Name;?>
 <span class="caret"></span>
                        <?php }?>
                    </a>
					<div class="mega-dropdown-menu">
						<div class="w3ls_vegetables">
							<ul class="dropdown-menu drp-mnu">
                            	<?php if (!isset($_SESSION['user'])) {?>
								<li><a href="login.php">Đăng nhập</a></li> 
								<li><a href="login.php">Đăng ký</a></li>
                                <?php } else { ?>
                                <li><a href="logout.php">Đăng xuất</a></li>
                                <?php }?>
							</ul>
						</div>                  
					</div>	
				</li>
			</ul>
		</div>
		<div class="w3l_header_right1">
			<h2><a href="contact.php">Liên hệ</a></h2>
		</div>
		<div class="clearfix"> </div>
	</div>
<!-- script-for sticky-nav -->
	<?php echo '<script'; ?>
>
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
	<?php echo '</script'; ?>
>
<!-- //script-for sticky-nav -->
	<div class="logo_products">
		<div class="container">
			<div class="w3ls_logo_products_left">
				<h1><a href="."><span>Siêu thị Bách Hóa</span>MiNi</a></h1>
			</div>
			<div class="w3ls_logo_products_left1">
				<ul class="special_items">
					<li><a href="bestdeal.php">Sản phẩm HOT</a><i>/</i></li>
					<li><a href="discount.php">Giảm giá</a><i>/</i></li>
					<li><a href="aboutus.php">Về chúng tôi</a></li>
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

<?php echo '<script'; ?>
>
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
<?php echo '</script'; ?>
><?php }
}
