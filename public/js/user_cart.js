function Xu_ly_gio_hang(a)
{
	//console.log($(a).attr("ma_san_pham"))
	$.ajax({
		url: 'cart.php',
		method: 'post',
		data:{
			ma_san_pham: $(a).attr("ma_san_pham"),
			ten_san_pham: $(a).attr("ten_san_pham"),
			don_gia: $(a).attr("don_gia"),
			hinh: $(a).attr("hinh")
		},
		success: function(res){
			/*console.log(res)*/
			if(res == "1"){
				$('.product_list_header').notify("Thêm giỏ hàng thành công !!!",{
					clickToHid: false,
					showAnimation: 'slideDown',
					style: 'bootstrap',
					autoHide: true,
					autoHideDelay: 2000,
					showDuration: 200,
					hideAnimation: 'slideUp',
					className: 'success'
				});
			}else
			{
				$('.product_list_header').notify("Cập nhật giỏ hàng thất bại !!!",{
					showAnimation: 'slideDown',
					autoHide: true,
					showDuration: 400,
					hideAnimation: 'slideUp',
					autoHideDelay: 2000,
					className: 'error'
				});
			}
		}
	})
}

function Hien_thi_gio_hang(a){
	$.ajax({
		url: 'view_cart.php',
		method: 'post',
		success: function(res){			
			$('.your_cart_show').html(res)
		}
	})
}

function Xoa_hang_trong_gio(a){
	var p = $(a).attr('ProductID')
	//tr.remove()
	$.ajax({
		url: 'edit_cart.php',
		type: 'post',
		data: {
			ProductID: p,
			kieu: 'xoa_hang'
		}
	}).done(function(res){
		console.log(res)
		if(res == "1"){
			$('.product_list_header').notify("Xoá giỏ hàng thành công!!!",{
				showAnimation: 'slideDown',
				autoHide: true,
				showDuration: 400,
				hideAnimation: 'slideUp',
				autoHideDelay: 2000,
				className: 'success'
			});
			$.ajax({
				url: 'view_cart.php',
				method: 'post',
				success: function(res){
					$('.your_cart_show').html(res)
				}
			})
		}else
		{
			$('body').css({'pointer-events': 'none', 'opacity': '0.8'})
			setTimeout(function(){
				window.location = '.';
			}, 1000)
		}
	})
}

function Giam_so_luong(a)
{
	var ProductID = $(a).attr('ProductID')
		
	$.ajax({
		url: 'edit_cart.php',
		method: 'post',
		data: {
			ProductID: ProductID,
			kieu: 'giam_hang'
		}
	}).done(function(res){
		if(res == "1"){
			$.ajax({
				url: 'view_cart.php',
				method: 'post',
				success: function(res){
					$('.your_cart_show').html(res)
				}
			})
		}else
		{
			$(a).notify("Không thể giảm số lượng !!!",{
				showAnimation: 'slideDown',
				autoHide: true,
				showDuration: 400,
				hideAnimation: 'slideUp',
				autoHideDelay: 2000,
				className: 'error'
			});
		}
	})
}

function Tang_so_luong(a)
{
	var ProductID = $(a).attr('ProductID')		
	$.ajax({
		url: 'edit_cart.php',
		method: 'post',
		data: {
			ProductID: ProductID,
			kieu: 'tang_hang'
		}
	}).done(function(res){
		if(res == "1"){
			$.ajax({
				url: 'view_cart.php',
				method: 'post',
				success: function(res){
					$('.your_cart_show').html(res)
				}
			})
		}else
		{
			$('.product_list_header').notify("Cập nhật giỏ hàng thất bại !!!",{
				showAnimation: 'slideDown',
				autoHide: true,
				showDuration: 400,
				hideAnimation: 'slideUp',
				autoHideDelay: 2000,
				className: 'error'
			});
		}
	})
}