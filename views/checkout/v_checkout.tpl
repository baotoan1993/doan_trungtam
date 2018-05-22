<div class="container">
<h1 style="text-align:center">GIỎ HÀNG</h1>
<div class="checkout-right">
  <table class="timetable_sub">
    <thead>
    <th width="80px">Hình</th>
      <th width="600px">Tên sản phẩm</th>
      <th style="text-align:center">Số lượng</th>
      <th>Đơn giá</th>
      <th></th>
        </thead>
    <tbody class="your_cart_show">
    
    {$tongtien=0}
    {foreach $danh_sach_gio_hang as $san_pham}
    <tr>
      <td class="invert-image" width="70px"><img style="width:100%" src="public/images/product/{$san_pham->Image}" onerror="this.src='public/images/updating.jpg'; this.style.width='100%'" /></td>
      <td class="invert"><a href="detail.php?ma_san_pham={$san_pham->ProductID}"> {$san_pham->ProductName} </a></td>
      <td style="text-align:center;"><div class="quantity">
          <div class="quantity-select">
            <div class="entry value-minus"
                        ProductID="{$san_pham->ProductID}" 
                        UserID="{$smarty.session.user->UserID}"
                        Quantity="{$san_pham->Quantity}"
                        onclick="Giam_so_luong(this)" >&nbsp; </div>
            <div class="entry value"><span>{$san_pham->Quantity }</span></div>
            <div class="entry value-plus active"
                        ProductID="{$san_pham->ProductID}" 
                        UserID="{$smarty.session.user->UserID}"
                        Quantity="{$san_pham->Quantity}"
                        onclick="Tang_so_luong(this)" >&nbsp; </div>
          </div>
        </div></td>
      <td>{number_format($san_pham->Price)} đ</td>
      <td class="invert"><button onclick="Xoa_hang_trong_gio(this)" 
                    ProductID='{$san_pham->ProductID}'
                    class="btn btn-warning" > X </button></td>
    </tr>
    {$tongtien = $tongtien + $san_pham->Price * $san_pham->Quantity}
    {/foreach}
    <tr style="background:#FF9">
      <td colspan="3" style="text-align: center">TỔNG CỘNG</td>
      <td style="color:#F00"><h3>{number_format($tongtien)} đ</h3></td>
      <td>
    </tr>
      </tbody>
    
  </table>
</div>
<!--  <div class="checkout-left" style="margin-bottom:10px; float:right; width:100%; text-align:right">
  
  	{if (!isset($smarty.session.user))}
    <button onclick="location.href='login.php'" class="btn btn-danger" style="padding:10px; width:30%;">ĐĂNG NHẬP THANH TOÁN</button>
    <div class="clearfix"> </div>
    {else}
    <button onclick="Thanh_toan_hoa_don({$smarty.session.user->UserID})" class="btn btn-danger" style="padding:10px; width:30%;">THANH TOÁN</button>
    <div class="clearfix"> </div>
    {/if}
  </div>
</div>--><br />
<div class="clearfix"></div>
<!-- //thanh toan -->
{if (!isset($smarty.session.user))}
<div class="row">
	<div class="col-md-2"></div>
    <div class="col-md-8">
    	<div>
      <h4>Thông tin liên hệ</h4>
      <form method="post" class="creditly-card-form agileinfo_form" onsubmit="DatHang(event)">
        <section class="creditly-wrapper wthree, w3_agileits_wrapper">
          <div class="information-wrapper">
            <div class="first-row form-group">
              <div class="controls">
                <label class="control-label">Họ tên: </label>
                <input class="billing-address-name form-control" type="text" name="txtHoTen" required="required">
              </div>
              <div class="w3_agileits_card_number_grids">
              
              	<div class="w3_agileits_card_number_grid_right">
                  <div class="controls">
                    <label class="control-label">Email: </label>
                    <input class="form-control" type="email" name="txtEmail" required="required">
                  </div>
                </div>
              
              	<div class="w3_agileits_card_number_grid_right">
                  <div class="controls">
                    <label class="control-label">Địa chỉ: </label>
                    <input class="form-control" type="text" name="txtDiaChi" required="required">
                  </div>
                </div>
              
                <div class="w3_agileits_card_number_grid_left">
                  <div class="controls">
                    <label class="control-label">Số điện thoại:</label>
                    <input class="form-control" type="text" name="txtSoDienThoai" required="required">
                  </div>
                </div>
                
                <div class="w3_agileits_card_number_grid_left">
                  <div class="controls">
                    <label class="control-label">Ghi chú:</label>
                    <textarea class="form-control" name="txtGhiChu"></textarea>
                  </div>
                </div>
                
                
                
                <div class="clear"> </div>
              </div>
            </div>
            <button class="submit check_out">Đặt hàng</button>
          </div>
        </section>
      </form>
    </div>
    </div>   
    <div class="col-md-2"></div>
</div>
{else}
<div class="row">
	<div class="col-md-2"></div>
    <div class="col-md-8">
        <form method="post" onsubmit="DatHang(event)">
            <input type="text" value="{$smarty.session.user->Name}" name="txtHoTen" hidden/>
            <input type="text" value="{$smarty.session.user->Email}" name="txtEmail" hidden/>
            <input type="text" value="{$smarty.session.user->Address}" name="txtDiaChi" hidden/>
            <input type="text" value="{$smarty.session.user->Phone}" name="txtSoDienThoai" hidden/>
            <label>Ghi chú:</label>
            <textarea class="form-control" name="txtGhiChu"></textarea><br />
            <button class="btn btn-danger" style="padding:10px; width:30%;">ĐẶT HÀNG</button>
        </form>
    </div>
    <div class="col-md-2"></div>
</div>
{/if}
<br />
<div class="clearfix"></div>


<script>
	function Thanh_toan_hoa_don(UserID){
		$.ajax({
			url: 'payment.php',
			method: 'post',
		}).done(function(res){
			console.log(res)
			if(res == '1'){
				$('.product_list_header').notify("Thanh toán hoá đơn thành công!!!", "success", {
					showAnimation: 'slideDown',
					autoHide: true,
					autoHideDelay: 1000,
					showDuration: 200,
					hideAnimation: 'slideUp',
				});
				
				window.setTimeout(function(){
					window.location.href = ".";		
				}, 3000);
			}
		})
	}
	
	function DatHang(e){
		e.preventDefault()
		var hoten = $("[name='txtHoTen']").val();
		var email = $("[name='txtEmail']").val();
		var diachi = $("[name='txtDiaChi']").val();
		var sodienthoai = $("[name='txtSoDienThoai']").val();
		var ghichu = $("[name='txtGhiChu']").val();
		$.ajax({
			url: 'payment.php',
			method: 'post',
			data:{
				hoten: hoten,
				email: email,
				diachi: diachi,
				sodienthoai: sodienthoai,
				ghichu: ghichu
			}
		}).done(function(res){
			if(res == '1'){
				$('.product_list_header').notify("Đơn hàng của bạn đã được ghi nhận!!!", "success", {
					showAnimation: 'slideDown',
					autoHide: true,
					autoHideDelay: 1000,
					showDuration: 200,
					hideAnimation: 'slideUp',
				});
				$('body').css({literal}{'pointer-events': 'none', 'opacity': '0.8'}{/literal})
				window.setTimeout(function(){
					window.location.href = ".";		
				}, 3000);
			}
		})
	}
</script> 
