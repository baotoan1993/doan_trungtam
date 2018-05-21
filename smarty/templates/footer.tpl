
<div class="footer">
  <div class="container">
    <div class="col-md-3 w3_footer_grid">
      <h3>Thông tin</h3>
      <ul class="w3_footer_grid_list">
        <li><a href="public/about.html">Thông tin cửa hàng</a></li>
        <li><a href="bestdeal.php">Sản phẩm bán chạy</a></li>
        <li><a href="discount.php">Sản phẩm giảm giá</a></li>
      </ul>
    </div>
    <div class="col-md-3 w3_footer_grid">
      <h3>Chính sách</h3>
      <ul class="w3_footer_grid_list">
        <li><a href="public/faqs.html">Điều khoản</a></li>
        <li><a href="public/faqs.html">Đổi trả</a></li>
      </ul>
    </div>
    <div class="clearfix"> </div>
    <div class="agile_footer_grids">
      <div class="col-md-3 w3_footer_grid agile_footer_grids_w3_footer">
        <div class="w3_footer_grid_bottom">
          <h4>100% secure payments</h4>
          <img src="public/images/card.png" alt=" " class="img-responsive" /> </div>
      </div>
      <div class="col-md-3 w3_footer_grid agile_footer_grids_w3_footer">
        <div class="w3_footer_grid_bottom">
          <h5>connect with us</h5>
          <ul class="agileits_social_icons">
            <li><a href="public/#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="public/#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li><a href="public/#" class="google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
            <li><a href="public/#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            <li><a href="public/#" class="dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
          </ul>
        </div>
      </div>
      <div class="clearfix"> </div>
    </div>
    <div class="wthree_footer_copy">
      <p>© 2016 Grocery Store. All rights reserved | Design by <a href="public/http://w3layouts.com/">W3layouts</a></p>
    </div>
  </div>
</div>
<!-- //footer --> 
<!-- Bootstrap Core JavaScript --> 
<script src="public/js/bootstrap.min.js"></script> 
<script>
var check = false;
$(document).ready(function(){
    $(".dropdown").click(            
        function() {
			if(!check){
				$('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            	$(this).toggleClass('open'); 
				check = !check;
			}else{
				$('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            	$(this).toggleClass('open');
				check = !check;
			}
                   
        }
    );
    $(".dropdown").hover(            
        function() {     
        },
        function() {
			if(check == true)
			{
				$('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            	$(this).toggleClass('open');    
				check = false;
			}            
        }
    );
});
</script> 

<script src="public/js/user_cart.js"></script>

<!-- here stars scrolling icon --> 
<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script> 
<!-- //here ends scrolling icon -->    
</body></html>