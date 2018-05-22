// JavaScript Document
var checkRead = false;
var content = '';
function Tim_san_pham(ten)
{
	if(!checkRead){
		content = $('#main_content').html()
		checkRead = !checkRead
	}
	if(ten == ''){
		$('#main_content').html(content)
		return
	}
	if(ten == ''){
		$('#main_content').html(main_content)
		return;
	}
	$.post('ajax_product.php', { ten: ten}, 
    function(res){
		$('#main_content').html(res)
	})
}

function Kiem_tra_dang_nhap(){
	var Email = $("input[name='l_Email']").val()
	var Password = $("input[name='l_Password']").val()

	$.ajax({
		url: 'login_ajax.php',
		method: 'post',
		data: {
			Email: Email,
			Password: Password
		}
	}).done(function(res){
		if(res){
			$('.w3l_header_right>ul').notify("Đăng nhập thành công !!! Đang chuyển về trang chủ", {
				className: 'success',
				clickToHide: true,
				showAnimation: 'slideDown',
				autoHide: true,
				autoHideDelay: 2000,
				showDuration: 300,
				hideAnimation: 'slideUp',
				arrowShow: true,
				arrowSize: 10,
				hideDuration: 200,
			});
			$('body').css({'pointer-events': 'none', 'opacity': '0.8'})
			setTimeout(function(){
				window.location = '.';
			}, 3000)
		}else{
			$('.w3l_header_right>ul').notify("Email hay mật khẩu không đúng !!!", {
				className: 'error',
				clickToHide: true,
				showAnimation: 'slideDown',
				autoHide: true,
				autoHideDelay: 3000,
				showDuration: 300,
				hideAnimation: 'slideUp',
				arrowShow: true,
				arrowSize: 10,
				hideDuration: 200,
			});
		}
	})
	
}