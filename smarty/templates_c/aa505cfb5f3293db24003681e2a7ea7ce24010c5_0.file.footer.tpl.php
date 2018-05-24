<?php
/* Smarty version 3.1.30, created on 2018-05-24 08:18:11
  from "C:\wamp64\www\doan_trungtam\smarty\templates\footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b0675434129b1_19433610',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa505cfb5f3293db24003681e2a7ea7ce24010c5' => 
    array (
      0 => 'C:\\wamp64\\www\\doan_trungtam\\smarty\\templates\\footer.tpl',
      1 => 1527149889,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b0675434129b1_19433610 (Smarty_Internal_Template $_smarty_tpl) {
?>

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
        <li><a href="javascript:void(0)" data-toggle="modal" data-target="#myTerms">Điều khoản đổi trả</a></li>
      </ul>
    </div>
    <div class="col-md-5 w3_footer_grid">
    <!--facebook like share-->
      <div class="fb-page" data-href="https://www.facebook.com/B%C3%A1ch-H%C3%B3a-Mini-189112991738434/?modal=admin_todo_tour" 
                             data-small-header="false" data-adapt-container-width="true" data-hide-cover="false"
                             data-show-facepile="true" data-show-posts="false">
    <div class="fb-xfbml-parse-ignore">
        <blockquote cite="https://www.facebook.com/B%C3%A1ch-H%C3%B3a-Mini-189112991738434/?modal=admin_todo_tour">
            <a href="https://www.facebook.com/B%C3%A1ch-H%C3%B3a-Mini-189112991738434/?modal=admin_todo_tour">Facebook</a>
        </blockquote>
    </div>
</div>

      <div class="fb-like" data-href="https://www.facebook.com/B%C3%A1ch-H%C3%B3a-Mini-189112991738434/?modal=admin_todo_tour" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true">
        
        </div>
    <!--//facebook like share-->
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
      <p>© 2018 Siêu thị Bách hóa Mini. All rights reserved | Design by <a href="public/http://w3layouts.com/">W3layouts</a></p>
    </div>
  </div>
</div>

<div class="modal fade" id="myTerms" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        
        <div class="modal-body">
          <!--<iframe src="//www.slideshare.net/slideshow/embed_code/key/7JovLcPYlDIwM9" width="668" height="714" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe> <div style="margin-bottom:5px"> <strong> <a href="//www.slideshare.net/toannguyen459/chnh-sch-i-tr" title="Chính sách đổi trả" target="_blank">Chính sách đổi trả</a> </strong> from <strong><a href="https://www.slideshare.net/toannguyen459" target="_blank">toan nguyen</a></strong> </div>-->
          <embed src="public/doi_tra.pdf" type="application/pdf" width="100%" height="500">
        </div>
        
      </div>
      
    </div>
  </div>

<!-- //footer --> 
<!-- Bootstrap Core JavaScript --> 
<?php echo '<script'; ?>
 src="public/js/bootstrap.min.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
>

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
<?php echo '</script'; ?>
> 

<?php echo '<script'; ?>
 src="public/js/user_cart.js"><?php echo '</script'; ?>
>

<!-- here stars scrolling icon --> 
<?php echo '<script'; ?>
 type="text/javascript">
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
	<?php echo '</script'; ?>
> 
<!-- //here ends scrolling icon -->    

<!-- facebook --->
<div id="fb-root"></div>
    <?php echo '<script'; ?>
>(function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.4";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    <?php echo '</script'; ?>
>
<!-- // facebook --->
</body></html>

<?php }
}
