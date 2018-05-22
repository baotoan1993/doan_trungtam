<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2><i class="fa fa-flag-o red"></i><strong>Thêm tài khoản quản lý</strong></h2>
            </div>
            <div class="panel-body" id="main_content">
            	<form onSubmit="Xu_ly_tao_tai_khoan(event)">
            	<div class="row">
                    <div class="col-lg-6">
                    	<div class="form-group">
                            <label for="usr">Email:</label>
                            <input type="email" class="form-control" name="Email" required>
                        </div>
                        <div class="form-group">
                            <label for="pwd">Mật khẩu:</label>
                            <input type="password" class="form-control" name="Password" required>
                        </div>
                        <div class="form-group">
                            <label for="usr">Họ tên:</label>
                            <input type="text" class="form-control" name="Name" required>
                        </div>
                    </div>
                    <div class="col-lg-6">
                    	<div class="form-group">
                            <label for="usr">Địa chỉ:</label>
                            <input type="text" class="form-control" name="Address">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Điện thoại:</label>
                            <input type="text" class="form-control" name="Mobile" required>
                        </div>
                        <div class="form-group">
                            <label for="usr">Loại tài khoản:</label>
                            <select class="form-control" name="Role">
                            	<option value="1">Admin quản lý</option>
                                <option value="2">Nhân viên quản lý</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                    	<button type="submit" class="btn btn-info">Tạo tài khoản</button>
                        <button type="reset" class="btn btn-danger">Làm mới</button>
                    </div>
                
                </div>
                </form>
                
            </div>
        </div>
    </div>
</div>

<script>
	function Xu_ly_tao_tai_khoan(e){
		e.preventDefault()
		var Email = $("[name='Email']").val()
		var Password = $("[name='Password']").val()
		var Name = $("[name='Name']").val()
		var Address = $("[name='Address']").val()
		var Mobile = $("[name='Mobile']").val()
		var Role = $("[name='Role']").val()
		
		$.ajax({
			url: 'manager.php',
			type: 'POST',
			data: {
				btnThem: "1",
				Email: Email,
				Password: Password,
				Name: Name,
				Address: Address,
				Mobile: Mobile,
				Role: Role
			}
		}).done(function(res){
			if(res == 1){
				$('body').css({literal}{'pointer-events': 'none', 'opacity': '0.9'}{/literal})
				$.notify({
					title: '<strong>Thành công!! </strong>',
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
						align: 'center'
					},
				});
				setTimeout(function(){
					location.reload()
				},2000)
			}else if (res == -1){
				$.notify({
					title: '<strong>Thất bại!! </strong>',
					message: 'Email này đã được đăng ký quyền!!',
					
				},{
					type: 'danger',
					animate: {
						enter: 'animated flipInY',
						exit: 'animated flipOutX'
					},
					delay: 2500,
					allow_dismiss: false,
					placement: {
						from: 'top',
						align: 'center'
					},
				});
			}else {
				$.notify({
					title: '<strong>Thất bại!! </strong>',
					message: 'Lỗi hệ thống...!!',
					
				},{
					type: 'warning',
					animate: {
						enter: 'animated flipInY',
						exit: 'animated flipOutX'
					},
					delay: 2500,
					allow_dismiss: false,
					placement: {
						from: 'top',
						align: 'center'
					},
				});
			}
		})
	}
</script>