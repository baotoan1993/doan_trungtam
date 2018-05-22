<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2><i class="fa fa-flag-o red"></i><strong>{$content_heading}</strong></h2>
            </div>
            <div class="panel-body" id="main_content">
                <table class="table table-striped table-advance table-hover">
                    <thead>
                        <tr>
                            <th>Hình</th>
                            <th>Tên SP</th>
                            <th>Đơn giá</th>
                            <th>Loại</th>
                            <th>Nhà sản xuất</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    
                    {foreach $danh_sach_san_pham as $san_pham}
                    <tr>
                        <td width="80px"><img src="../public/images/product/{$san_pham->Image}" style="width:100%" ></td>
                        <td>{$san_pham->ProductName}</td>
                        <td>{number_format($san_pham->Price)}</td>
                        <td>{$san_pham->CategoryName}</td>
                        <td>{$san_pham->SupplierName}</td>
                        <td><div class="btn-group"> <a class="btn btn-primary" href="edit_product.php?ProductID={$san_pham->ProductID}"><i class="icon_cog"></i></a> <a class="btn btn-danger btnXoa" href="javascript:void(0)" ProductID="{$san_pham->ProductID}" onclick="XoaHang(this)"><i class="icon_trash"></i></a> </div></td>
                    </tr>
                    {/foreach}
                    </tbody>
                    
                    <tfoot>
                        <tr>
                            <td colspan="6" align="center"><div style="text-align:center" class="page_list">{$page_list}</div></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
	function XoaHang(e){
		var p = $(e).attr("ProductID")
		if(confirm("Bạn có chắc chắn xoá món hàng này??")){
			$.ajax({
				url: "product.php",
				type: 'POST',
				data: {
					ProductID: p,
					btnXoa: "ok"
				}
			}).done(function(res){
				if(res == 1){
					$('body').css({literal}{'pointer-events': 'none', 'opacity': '1'}{/literal})
					$.notify({
						title: '<strong>Thành công!!</strong>',
						message: 'Trang sẽ được làm mới!',
						
					},{
						type: 'success',
						animate: {
							enter: 'animated fadeInRight',
							exit: 'animated fadeOutRight'
						},
						delay: 1500,
						allow_dismiss: false,
						placement: {
							from: 'top',
							align: 'right'
						},
					});
					setTimeout(function(){
						location.reload()
					},2000)
				}
				else{
					$.notify({
						title: '<strong>Thất bại!!</strong>',
						message: 'Không thể xoá sản phẩm!',
						
					},{
						type: 'danger',
						animate: {
							enter: 'animated fadeInRight',
							exit: 'animated fadeOutRight'
						},
						delay: 1500,
						allow_dismiss: false,
						placement: {
							from: 'top',
							align: 'right'
						},
					});
				}
			})
		}
	}
</script>