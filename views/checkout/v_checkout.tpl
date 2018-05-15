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
        <td class="invert">
        	<a href="detail.php?ma_san_pham={$san_pham->ProductID}">
        		{$san_pham->ProductName}
            </a>
        </td>
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
        <td class="invert">
            <button onclick="Xoa_hang_trong_gio(this)" 
                    ProductID='{$san_pham->ProductID}'
                    class="btn btn-warning" >
                X
            </button>
        </td>
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
  <div class="checkout-left" style="margin-bottom:10px; float:right; width:100%; text-align:right">
  	{if (!isset($smarty.session.user))}
    <button onclick="location.href='login.php'" class="btn btn-danger" style="padding:10px; width:30%;">ĐĂNG NHẬP THANH TOÁN</button>
    <div class="clearfix"> </div>
    {else}
    <button onclick="Thanh_toan_hoa_don({$smarty.session.user->UserID})" class="btn btn-danger" style="padding:10px; width:30%;">THANH TOÁN</button>
    <div class="clearfix"> </div>
    {/if}
  </div>
</div>
<!-- //about -->
</div>
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
</script>
