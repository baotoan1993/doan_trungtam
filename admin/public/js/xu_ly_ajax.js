function Kiem_tra_dang_nhap(e){
	e.preventDefault()
	var username = $("[name='username']").val();
	var password = $("[name='password']").val();
	
	$.ajax({
		url: 'login.php',
		type: 'post',
		data: {
			btnLogin: "1",
			username: username,
			password: password
		}
	}).done(function(res){
		if(res == 1){
			var noti = $.notify({
					title: '<strong>Thành công!!</strong>',
					message: 'Chào mừng đến với quản lý siêu thị!!.',
					
				},{
					type: 'success',
					animate: {
						enter: 'animated flipInY',
						exit: 'animated flipOutX'
					},
					allow_dismiss: false,
					placement: {
						from: 'top',
						align: 'center'
					},
					showProgressbar: true
				});
				
				setTimeout(function(){
					noti.update("progress", 90)
				},1000)
				
				setTimeout(function(){
					location.reload();
				},3000)
		}else{
			//console.log(res)
			var noti = $.notify({
					title: '<strong>Lỗi!!</strong>',
					message: 'Tên đăng nhập hoặc mật khẩu không đúng!!.',
					
				},{
					type: 'danger',
					animate: {
						enter: 'animated flipInY',
						exit: 'animated flipOutX'
					},
					allow_dismiss: false,
					placement: {
						from: 'top',
						align: 'center'
					},
				});
				
				

				
			
		}
	})
}